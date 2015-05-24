<?php
/**
 * Created by PhpStorm.
 * User: MANHQUAN
 * Date: 3/9/2015
 * Time: 10:57 PM
 */

namespace App\Crawlers;


use App\Capture;
use App\Game;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image;
use App\Category;
use App\Package;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Symfony\Component\DomCrawler\Crawler;


class MainCrawler {
    
    public $client;

    function __construct()
    {
        set_time_limit(0);
        $this->client = new Client();
        // configure with favored image driver (gd by default)
        Image::configure(['driver' => 'imagick']);
    }
    /**
     * save image to public.
     * @param $url
     * @param $case
     * @return string
     */
    protected function saveImageFromLink($url, $case)
    {
        $ars = explode('.', $url);
        $ext = end($ars);
        if (in_array($ext, ['jpg', 'png', 'jpeg', 'gif'])) {
            $name = md5(time()) . '.' . end($ars);
        } else {
            $name = md5(time()) . '.png';
        }
        $path = public_path() . '/images/' . $case . '/' . $name;
        try {
            Image::make($url)->save($path);
        } catch (NotReadableException $e) {
            return;
        }
        return $name;
    }


    /**
     * crawl a link     *
     * @param $link
     * @param bool $redirect
     * @return string
     */
    protected function crawlerLink($link, $redirect = false)
    {
        try {
            $request = $this->client->createRequest('GET', $link, ['allow_redirects' => $redirect]);
            $response = $this->client->send($request);
            if ($response->getStatusCode() == '200') {
                return $response->getBody()->getContents();
            }
        } catch (TransferException $e) {
            return;
        }
    }



    /**
     * get list of package name in table store and then process.
     * @param int $number
     */
    public function import($number = 0)
    {
        if ($number > 0){
            $lists = DB::table('stores')->where('status', 'not')->limit($number)->lists('name');
        } else {
            $lists = DB::table('stores')->where('status', 'not')->lists('name');
        }
        foreach ($lists as $list) {
            $this->addToPackages(trim($list));
            DB::table('stores')
                ->where('name', $list)
                ->update(['status' => 'done']);
        }
    }

    /** check if package name exist on table packages
     * if not, then add item to game and add to packages.
     * @param $game_id
     * @param $temp
     */
    protected function addToPackages($temp)
    {
        $check = Package::where('name', $temp)->first();
        if (!$check) {
            //add to game.
            $this->addToGame($temp);
        }
    }

    /**
     * using for testing
     * @param $package
     */
    public function test($package) {

    }

    /**
     * crawl details page by package name on google store.
     * @param $package
     * @return CrawlerController|void
     */
    protected function addToGame($package)
    {
        $link = 'https://play.google.com/store/apps/details?id=' . $package . '&hl=en&gl=us';
        $response = $this->crawlerLink($link);
        if (!$response) {
            return;
        }
        $crawler = new  Crawler($response);

        $data = [];
        $temp = $crawler->filter('div.details-info > div.cover-container > img.cover-image');
        if (!$temp) {
            return;
        } else {
            $data['icon'] = $temp->attr('src');
        }

        $data['title'] = $crawler->filter('div.details-info > div.info-container > div.document-title > div')->text();
        $type = $crawler->filter('div.details-info > div.info-container a.category')->attr('href');

        $data['type'] = (strpos($type, 'GAME_') !== false) ? 'games' : 'apps';
        $data['category'] = $crawler->filter('div.details-info > div.info-container a.category > span')->text();
        $data['screens'] = [];
        $captures = $crawler->filter('div.screenshots img.screenshot');
        if (iterator_count($captures) > 0) {
            foreach ($captures as $capture) {
                $temp = new Crawler($capture);
                $data['screens'][] = $temp->attr('src');
            }
        }

        $tempMeta = $crawler->filter('div.metadata div.details-section-contents > div.meta-info');

        if (iterator_count($tempMeta) > 0) {
            foreach ($tempMeta as $i => $meta) {
                $tempUpdate = new Crawler($meta);
                if ($i == 0) {
                    $data['update'] = $tempUpdate->filter('div.content')->text();
                    $data['update'] = Carbon::parse($data['update'])->format('Y-m-d');
                }
                if ($i == 1) {
                    $data['total'] = $tempUpdate->filter('div.content')->text();
                    $data['total'] = trim($data['total']);
                }
                if ($i == 3) {
                    $data['version'] = $tempUpdate->filter('div.content')->text();
                    $data['version'] = trim($data['version']);
                }
                if ($i == 4) {
                    $data['require'] = $tempUpdate->filter('div.content')->text();
                    $data['require'] = trim($data['require']);
                }

            }
        }

        $data['desc'] = $crawler->filter('div.details-section-contents div.id-app-orig-desc')->html();
        $data['news'] = $crawler->filter('div.whatsnew div.recent-change');
        if (count($data['news'])) {
            $data['news'] = $data['news']->html();
        } else {
            $data['news'] = '';
        }
        $data['link'] = $link;
        $data['site'] = 'https://play.google.com';
        $data['download'] = $link;

        $this->saveGames($data, $package);
    }

    /**
     * save one game.
     * @param $data
     * @param $package
     * @return static
     * @internal param $item
     */
    protected function saveGames($data, $package)
    {
        $data['icon'] = $this->saveImageFromLink($data['icon'], 'avatars');
        if ($data['icon']) {
            $category = Category::where('name', $data['category'])->first();
            if (!$category) {
                copy(public_path() . '/images/avatars/' . $data['icon'], public_path() . '/images/categories/' . $data['icon']);
                $category = Category::create(['name' => $data['category'], 'icon' => $data['icon'], 'type' => $data['type']]);
            }
            $data['category_id'] = $category->id;
            try {
                $game = Game::create($data);
                foreach ($data['screens'] as $urlCapture) {
                    $urlCapture = $this->saveImageFromLink($urlCapture, 'captures');
                    if ($urlCapture) {
                        Capture::create(['name' => $urlCapture, 'game_id' => $game->id]);
                    }
                }
                try {
                    Package::create([
                        'game_id' => $game->id,
                        'name' => $package
                    ]);
                } catch (QueryException $e) {
                    DB::table('packages')->where('name', $package)->delete();
                    Package::create([
                        'game_id' => $game->id,
                        'name' => $package
                    ]);
                }
            } catch (QueryException $e) {
                return;
            }

        }
    }


    /**
     * get link download from download-apk.com
     * @param $package
     * @return string|void
     */
    protected function getLinkDownloadApk($package)
    {
        $response = $this->crawlerLink('http://downloader-apk.com/download/dl.php?dl=' . $package, false);
        $response = preg_split('/\r\n|\n|\r/', $response);
        foreach ($response as $line) {
            if (strpos($line, "setTimeout('location.href=") !== false) {
                $line = str_replace('setTimeout(\'location.href="..', 'http://downloader-apk.com', $line);
                $line = str_replace('"\',25000);', '', $line);
                return trim($line);
            }
        }
        return;
    }

    /**
     * download using device.
     * @param $package
     * @return string|void
     * @internal param $game
     */
    protected function simulator($package)
    {
        /*if ($filename = @file_get_contents(env('DOWNLOAD_HOST').'?package='.$package)) {
            $apkFile = '/tempApk/'.md5(time()).'.apk';
            if (file_exists($filename)) {
                copy($filename, public_path().$apkFile);
                unlink($filename);
                return url($apkFile);
            }
        }*/
        $api = new GooglePlayApi(base_path('googleplay-api'), public_path('tempApk/show.txt'));
        // Download an app
        $pathToAPKFile = $api->download(public_path('tempApk'), $package, time());

        if (file_exists($pathToAPKFile)) {
            return url('tempApk/'. basename($pathToAPKFile));
        }
        return;
    }

    /**
     * this function call when download any games.
     * @param $game
     * @return string|void
     */
    public function download($game) {
        $download = '';
        if ($game) {
            if ($game->site == 'https://play.google.com') {
                $package = $game->package->name;
                $download = $this->getLinkDownloadApk($package);
                if (!$download || ($download == 'http://downloader-apk.com/')) {
                    $download = $this->simulator($package);
                    if (!$download) {
                        $download = 'https://play.google.com/store/apps/details?id='.$package.'&hl=en&gl=us';
                    }
                }
            } else {
                $download = $game->download;
            }
        }
        return $download;
    }
    public function fix()
    {
        DB::table('packages')->truncate();
        $games =  Game::all();
        foreach ($games as $game) {
            if ($game->site == 'http://www.9apps.com') {
                $temp = str_replace('http://www.9apps.com/jump/down/', '', $game->download);
                $temp = str_replace('/app/', '', $temp);
                $temp = trim($temp);

            } else {
                $temp  = str_replace('https://play.google.com/store/apps/details?id=', '', $game->link);
                $temp = str_replace('&hl=en&gl=us', '', $temp);
                $temp = trim($temp);
            }
            $count = Package::where('name', $temp)->count();
            if ($count == 0) {
                Package::create([
                    'game_id' => $game->id,
                    'name' => $temp
                ]);
            }

        }

    }

}