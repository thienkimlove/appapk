<?php namespace App\Http\Controllers;

use App\Category;
use App\Crawlers\MainCrawler;
use App\Game;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{

    /**
     * @return View
     */
    public function index()
    {
        $css = 'home';
        $pageHome = true;
        $games = Game::latest('update')->take(20)->get();

        return view('games.home', compact('games', 'pageHome', 'css'))->with([
            'title' => 'Free Android Apps Download | Best Games for Android Mobile Phone - AppForAndroidPhone',
            'desc' => 'AppForAndroidPhone.com supports free android apps and games apk download. Thousands of top best android apps at AppForAndroidPhone! Play free apps and games for android mobile phone now!',
            'keyword' => 'android apps,android apps download,free android apps,best android apps,apps for android,appforandroiphone,games, android games download, android games, free android games'
        ]);
    }


    /**
     * @param $type
     * @return View
     * @internal param $page
     * @internal param Request $request
     */
    public function games()
    {
        $css = 'app';
        $games = Game::where('type', 'games')->latest('update')->paginate(20);
        $categories = Category::where('type', 'games')->latest()->take(7)->get();
        $pageGame = true;

        return view('games.app', compact('games', 'pageGame', 'categories', 'css'))->with([
            'title' => 'Hot Android Games Free download - AppForAndroidPhone',
            'desc' => 'Looking for some hot games to play on your Android device? AppForAndroidPhone.com supports top best new Android games download.',
            'keyword' => 'hot android games, free android games'
        ]);
    }


    /**
     * @return View
     */
    public function apps()
    {
        $css = 'app';
        $games = Game::where('type', 'apps')->latest('update')->paginate(20);
        $categories = Category::where('type', 'apps')->latest()->take(7)->get();
        $pageApp = true;

        return view('games.app', compact('games', 'pageApp', 'categories', 'css'))->with([
            'title' => 'Hot Android Apps Free download - AppForAndroidPhone',
            'desc' => 'Looking for some hot apps to play on your Android device? AppForAndroidPhone.com supports top best new Android apps download.',
            'keyword' => 'hot android apps, free android apps'
        ]);
    }


    /**
     * @param $slug
     * @return $this
     */
    public function details($slug)
    {
        $css = 'details';
        $page = 'Details';
        $game = Game::where('slug', $slug)->first();
        $relates = Game::where('category_id', $game->category_id)->take(8)->get();
        return view('games.details', compact('game', 'page', 'relates', 'css'))->with([
            'title' => $game->title . ' for Android Free Download - AppForAndroidPhone',
            'desc' => $game->title . ' is a kind of ' . $game->category->name . ' ' . $game->type . ' for Android, AppForAndroidPhone official website provides download and walkthrough for ' . $game->title . ', Play free ' . $game->title . ' online.',
            'keyword' => $game->title
        ]);
    }

    public function gameCategories()
    {
        $css = 'app';
        $page = 'Categories';
        $categories = Category::where('type', 'games')->get();
        return view('games.categories', compact('categories', 'page', 'css'))->with([
            'title' => 'Android Games Categories - AppForAndroidPhone',
            'desc' => 'AppForAndroidPhone provide thousands hot and popular Android games that will satisfy the needs of all types for you.',
            'keyword' => 'android games categories'
        ]);
    }

    public function appCategories()
    {
        $css = 'app';
        $page = 'Categories';
        $categories = Category::where('type', 'apps')->get();
        return view('games.categories', compact('categories', 'page', 'css'))->with([
            'title' => 'Android Apps Categories - AppForAndroidPhone',
            'desc' => 'AppForAndroidPhone provide thousands hot and popular Android apps that will satisfy the needs of all types for you.',
            'keyword' => 'android apps categories'
        ]);
    }

    /**
     * http request from javascript
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function suggestion(Request $request)
    {
        $games = Game::tagged($request->input('term'))->latest('update')->take(10)->get();
        return response()->json($games);
    }

    /**
     * ajax get link download.
     * @param $gameId
     * @return Response
     */
    public function downloadLink($gameId)
    {
        //return json to ajax.
        $link = session()->get($gameId . '_download');
        if (!$link) {
            $game = Game::find($gameId);
            $crawler = new MainCrawler();
            $link = $crawler->download($game);
            session()->put($gameId . '_download', $link);
        }

        return response()->json(['link' =>  $link]);
    }

    /**
     * download game.
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $gameId
     */
    public function download($slug)
    {
        $css = 'details';
        if (!$slug) {
            return redirect('/');
        }
        $game = Game::where('slug', $slug)->first();

        $page = 'Direct Link download '.$game->title;
        $relates = Game::where('category_id', $game->category_id)->take(16)->get();

        return view('games.download', compact('game', 'page', 'relates', 'css'))->with([
            'title' => $game->title . ' for Android Direct Link download Free - AppForAndroidPhone',
            'desc' => 'Direct link download for '.$game->title.'  at AppForAndroidPhone.Com.',
            'keyword' => 'direct link, get apk, download .apk, '.$game->title
        ]);
    }

}
