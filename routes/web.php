<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(Auth::check()) {
      return redirect()->route('dashboard');
    }

    return redirect()->route('login');
})->name('home');

Auth::routes();

// Order Guide
/*
Route::get('orderguide', function () {
  $products = Bistro\Inventory\Products\Models\Product::all();
  return view('guides.order')->with('products', $products);
});
*/
