<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //fav icon
        View::composer('frontend.layout.master', function ($view) {
            $fav = SiteSetting::first();
            $view->with('fav', $fav);
        });

        View::composer('backend.layout.master', function ($view) {
            $fav = SiteSetting::first();
            $view->with('fav', $fav);
        });


        //logo
        View::composer('frontend.layout.navbar', function ($view) {
            $icon = SiteSetting::first();
            $view->with('icon', $icon);
        });


        View::composer('backend.layout.asidebar', function ($view) {
            $icon = SiteSetting::first();
            $view->with('icon', $icon);
        });

    }
}
