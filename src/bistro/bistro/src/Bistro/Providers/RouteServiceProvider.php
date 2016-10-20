<?php

namespace Bistro\Bistro\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $prefix = "bistro";

    protected $middleware = ["web", "auth"];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::group([
            'prefix' => $this->prefix,
            'middleware' => $this->middleware,
        ], function ($router) {
            $this->mapFoodRoutes();
            $this->mapInventoryRoutes();
        });
    }

    protected function mapBistroRouter()
    {
        Route::group([
            'prefix' => $this->prefix,
            'middleware' => $this->middleware,
        ], function ($router) {
            $this->mapRecipeRoutes();
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFoodRoutes()
    {
        Route::resource('recipes', 'Bistro\Food\Recipes\Controllers\RecipesController');

    }

     protected function mapInventoryRoutes()
    {
        Route::resource('products', 'Bistro\Inventory\Products\Controllers\ProductsController');
        Route::resource('merchants', 'Bistro\Inventory\Merchants\Controllers\MerchantsController');

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }

    protected function mapAppRoutes()
    {
        Route::group([
            'middleware' => ['web', 'auth'],
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/app.php');
        });
    }

    protected function mapBistroRoutes()
    {
        Route::group([
            'prefix' => 'bistro',
            'middleware' => ['web', 'auth'],
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/app.php');
        });
    }


}
