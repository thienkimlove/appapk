<?php
/**
 * Created by PhpStorm.
 * User: MANHQUAN
 * Date: 3/9/2015
 * Time: 11:04 PM
 */

namespace App\Crawlers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;


class GoogleCrawler extends MainCrawler {

    public function createPackages()
    {
        DB::table('stores')->truncate();
        $response = $this->crawlerLink('https://play.google.com/store/apps?hl=en&gl=us');
        $crawler = new Crawler($response);
        $links = $crawler->filter('body a.child-submenu-link');
        $data = [];
        foreach ($links as $i => $link) {
            $temp = new Crawler($link);
            $data[$i] = 'https://play.google.com' . $temp->attr('href') . '/collection/topselling_free?hl=en&gl=us';
        }
        foreach ($data as $item) {
            $packages = $this->googlePackageListFromPage($item);
            foreach ($packages as $package) {
                DB::table('stores')->insert([
                    'name' => $package,
                    'status' => 'not'
                ]);
            }
        }
    }
    /**
     * Google Store
     * later we must add many of this function.
     * get the array of packages name list from a page.
     * @param $url
     * @return array
     */
    protected function googlePackageListFromPage($url)
    {
        $topNewFree = $this->crawlerLink($url);
        $crawler = new  Crawler($topNewFree);
        $items = $crawler->filter('div.card-list > div.card');
        $packages = [];
        foreach ($items as $item) {
            $game = new Crawler($item);
            $temp = $game->filter('div.card-content > div.cover > a.card-click-target')->attr('href');
            $packages[] = str_replace('/store/apps/details?id=', '', $temp);
        }
        return $packages;
    }





}