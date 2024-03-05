<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class NavbarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $navbarDataJson = file_get_contents(base_path('resources/menu/navbar.json'));
        $navbarMenu = json_decode($navbarDataJson);

        View::share('menuData', $navbarMenu);
    }
}
