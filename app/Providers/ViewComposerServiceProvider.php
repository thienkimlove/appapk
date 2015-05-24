<?php namespace App\Providers;

use App\Keyword;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('main', function ($view) {
            $view->with('hotTags', Keyword::orderBy('count', 'desc')->take(10)->get()->toArray());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
