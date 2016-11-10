<?php

namespace Bistro\Bistro\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class BistroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadViewsFrom(__DIR__.'/../../../resources/views/dashboard/', 'dashboard');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Service Providers
        $this->app->register('\Bistro\Bistro\Providers\RouteServiceProvider');
        
        $this->app->register('\Bistro\Inventory\Inventory\Providers\InventoryServiceProvider');
        $this->app->register('\Bistro\Food\Food\Providers\FoodServiceProvider');

        // Facades
        $this->app->bind('bistro','Bistro\Bistro\Helpers');
    }

    public function router()
    {
        //
    }
}
