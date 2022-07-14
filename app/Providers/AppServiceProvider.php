<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Models
use App\Models\Header;
use App\Models\Home;
use App\Models\SitesLink;

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
        view()->composer('errors::404', function ($view) {
            $headers = Header::headers();
            $home = Home::first();
            $sitesLinks = SitesLink::all();

            $view->with(['headers' => $headers, 'home' => $home, 'sitesLinks' => $sitesLinks]);
        });
    }
}
