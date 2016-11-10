<?php

namespace Bistro\Inventory\Inventory\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class InventoryServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->app->register('\Bistro\Inventory\Products\Providers\ProductServiceProvider');
    $this->app->register('\Bistro\Inventory\Merchants\Providers\MerchantServiceProvider');

    $this->loadViewsFrom(__DIR__.'/../../../resources/views/inventory/', 'inventory');
  }

  public function register()
  {
    //
  }
}