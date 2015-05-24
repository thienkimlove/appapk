<?php namespace App\Http\Controllers;

use App\Crawlers\MainCrawler;
class CrawlerController extends Controller
{

    /**
     * parse
     */
    public function index()
    {
        $crawler = new MainCrawler();
        $crawler->fix();

    }

    /**
     *
     */
    public function import()
    {
        $crawler = new MainCrawler();
        $crawler->import(5000);

    }
}
