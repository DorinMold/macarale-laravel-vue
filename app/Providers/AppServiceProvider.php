<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        View::composer('master', function($view){
            $iconUrls = new \stdClass();
            $iconUrls->url1 = "\\assets\\icoane\\dayhrs.png";
            $iconUrls->url2 = "\\assets\\icoane\\familie.png";
            $iconUrls->url3 = "\\assets\\icoane\\dent-wheel.png";
            $iconUrls->url4 = "\\assets\\icoane\\handshake.png";
            $iconUrls->url5 = "\\assets\\icoane\\macara.png";
            $iconUrls->url6 = "\\assets\\icoane\\scaffolding.png";

            $view->with('iconUrls', $iconUrls);


        });
    }
}
