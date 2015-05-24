var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less', 'resources/css');
    mix.styles([
        'libs/select2.min.css',
        'site/home_common.css',
        'site/home.css'
    ],'public/css/home.css');

    mix.styles([
        'libs/select2.min.css',
        'site/search_common.css',
        'site/search_header.css',
        'site/search.css'
    ],'public/css/search.css');

    mix.styles([
        'libs/select2.min.css',
        'site/app_common.css',
        'site/app_header.css',
        'site/app.css'
    ],'public/css/app.css');

    mix.styles([
        'libs/select2.min.css',
        'site/details_common.css',
        'site/details.css'
    ],'public/css/details.css');

    mix.scripts([
        'libs/angular/angular.min.js',
        'libs/angular/angular-route.min.js',
        'libs/jquery.min.js',
        'libs/html5shiv.min.js',
        'libs/respond.min.js',
        'libs/select2.min.js'
    ], 'public/js/output.js');
});
