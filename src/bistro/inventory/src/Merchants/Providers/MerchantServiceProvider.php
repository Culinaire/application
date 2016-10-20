<?php

namespace Bistro\Inventory\Merchants\Providers;

use Illuminate\Support\ServiceProvider;

class MerchantServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../../resources/views/merchants/', 'merchants');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('recipes', 'Bistro\Food\Recipes\Facades\RecipesFacade');
    }

}
