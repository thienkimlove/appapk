<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Category;
use App\Game;
use App\Keyword;
use Illuminate\Support\Facades\DB;


Route::get('crawler', 'CrawlerController@index');
Route::get('import', 'CrawlerController@import');
Route::get('download-free/{slug}', 'MainController@download');

//main
Route::get('/', 'MainController@index');
//ajaxE
Route::post('suggestion', 'MainController@suggestion');
Route::get('downloadLink/{id}', 'MainController@downloadLink');

//sitemap

Route::get('store-sitemap', function()
{
    // create sitemap index
    $sitemap = App::make ("sitemap");

    $games = DB::table('games')->orderBy('created_at', 'desc')->limit(20000)->get();
    $categories = DB::table('categories')->get();
    $keywords = DB::table('keywords')->get();

    foreach ($categories as $category) {
        $sitemap->add(url('android', 'top-' . $category->slug . '-'.$category->type), null, '0.5', 'weekly');
    }
    foreach ($games as $game) {
        $sitemap->add(url('android-' . $game->type, $game->slug), null, '0.8', 'weekly');
    }
    foreach ($keywords as $keyword) {
        $sitemap->add(url('search', 'tag-'. str_replace(' ', '-', $keyword->name)), null, '0.8', 'weekly');
    }
    // create file sitemap.xml in your public folder (format, filename)
    $sitemap->store('xml', 'sitemap');
});


//categories list
Route::get('android-games-categories', 'MainController@gameCategories');
Route::get('android-apps-categories', 'MainController@appCategories');
//list all.
Route::get('android-games', 'MainController@games');
Route::get('android-apps', 'MainController@apps');

//search
Route::get('search', function(){
    $css = 'search';
    $page = null;
    $term = null;
    $pageSearch = true;
    $games = Game::latest('update')->paginate(20);
    return view('games.search', compact('games', 'term', 'pageSearch', 'css', 'page'))->with([
        'title' => 'Hot Search Android Apps - AppForAndroidPhone',
        'desc' => '',
        'keyword' => ''
    ]);
});
Route::get('search/{tag}', function($tag) {
    if (preg_match('/tag-([a-z0-9\-]+)/', $tag, $matches)) {
        $css = 'search';
        $page = null;
        $pageSearch = true;
        $term = $matches[1];
        if (strlen($term) > 2) {
            $term = str_replace('-',' ', $term);
            $keyword = Keyword::where('name', $term)->first();
            if (!$keyword) {
                $keyword = new Keyword();
                $keyword->create(['name' => $term, 'count' => 1]);
            } else {
                $keyword->count ++;
                $keyword->save();
            }
            $games = Game::tagged($term)->latest('update')->paginate(20);
        } else {
            $games = Game::latest('update')->paginate(20);
        }
        return view('games.search', compact('games', 'term', 'pageSearch', 'css', 'page'))->with([
            'title' => 'Search result for '.$term.' - AppForAndroidPhone',
            'desc' => '',
            'keyword' => ''
        ]);
    }
});

//categories details

Route::get('android/{value}', function($value){
    if (preg_match('/top-([a-z0-9\-]+)-(apps|games)/', $value, $matches)) {
        $css = 'app';
        $category = Category::where('slug', $matches[1])->first();
        $games = Game::where('category_id', $category->id)->paginate(20);
        $page = $category->name;
        return view('games.category', compact('category', 'games', 'page', 'css'))->with([
            'title' => 'Top Android '.$category->name.' '.$category->type.' Download - AppForAndroidPhone',
            'desc' => 'AppForAndroidPhone provide top and popular Android '.$category->name.' '.$category->type.' that will satisfy the needs of all types for you.',
            'keyword' => 'top android '.$category->name.' '.$category->type
        ]);
    }
});
//app details
Route::get('android-apps/{slug}', 'MainController@details');

//game details
Route::get('android-games/{slug}', 'MainController@details');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
