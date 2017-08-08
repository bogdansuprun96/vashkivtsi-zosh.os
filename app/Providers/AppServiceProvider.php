<?php

namespace App\Providers;

use App\Frontpage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (view()->exists('layouts.site'))
        {
            $urls = Frontpage::getUrls();
            $header = Frontpage::getHeader();
            $footer = Frontpage::getFooter();
            view()->share('header', $header);
            view()->share('urls', $urls);
            view()->share('footer', $footer);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
