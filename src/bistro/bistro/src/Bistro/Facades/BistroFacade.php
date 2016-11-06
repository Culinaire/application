<?php

namespace Bistro\Bistro\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

class BistroFacade extends Facade
{
  public static function getFacadeAccessor()
  {
    return 'bistro';
  }
}
