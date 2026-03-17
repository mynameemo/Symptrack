<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

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
        //

        if (request()->is('admin') || request()->is('admin/*')) {
                // Disable SweetAlert on all Backpack pages
    }

    }
}
