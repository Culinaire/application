<?php

namespace Bistro\Food\Recipes\Providers;

use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__.'/../../../resources/views/recipes/', 'recipes');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../../../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('recipes', 'Bistro\Food\Recipes\Facades\RecipesFacade');
    }

}
