<?php

namespace Bistro\Food\Food\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class FoodServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->app->register('\Bistro\Food\Recipes\Providers\RecipeServiceProvider');
    $this->app->register('\Bistro\Food\Ingredients\Providers\IngredientServiceProvider');

    $this->loadViewsFrom(__DIR__.'/../../../resources/views/food/', 'food');
  }

  public function register()
  {
    //
  }
}