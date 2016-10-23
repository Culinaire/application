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
        $this->loadViewsFrom(__DIR__.'/../../../resources/views/dashboard/', 'dashboard');       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('\Bistro\Bistro\Providers\RouteServiceProvider');
        $this->app->register('\Bistro\Food\Recipes\Providers\RecipeServiceProvider');
        $this->app->register('\Bistro\Food\Ingredients\Providers\IngredientServiceProvider');
        $this->app->register('Bistro\Inventory\Products\Providers\ProductServiceProvider');
        $this->app->register('\Bistro\Inventory\Merchants\Providers\MerchantServiceProvider');
    }

    public function router()
    {
        //
    }
}
