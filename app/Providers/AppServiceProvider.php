<?php

namespace App\Providers;
use View;
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
        // Using Closure based composers...
        View::composer('dashboard::partials.navbar', function ($view) {
            $links = [
                [
                    'name' => title_case('recipes'),
                    'link' => route('recipes.index')
                ],
                [
                    'name' => title_case('ingredients'),
                    'link' => route('ingredients.index')
                ],
                [
                    'name' => title_case('merchants'),
                    'link' => route('merchants.index')
                ],
                [
                    'name' => title_case('products'),
                    'link' => route('products.index')
                ]
            ];
            $view->with('navmenu', $links);
        });
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
