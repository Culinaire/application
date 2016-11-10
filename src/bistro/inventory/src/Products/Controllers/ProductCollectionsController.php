<?php

namespace Bistro\Inventory\Products\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Bistro\Inventory\Products\Models\Product;
use Bistro\Inventory\Products\Models\ProductCollection;

class ProductCollectionsController extends Controller
{
  protected $handle = "product_";

  public function __construct()
  {
      $this->layout = str_plural($this->handle);
  }

  public function index()
  {
    $collections = ProductCollection::all();
    return view('orderguides::orderguide', ['view' => 'index'])->with('guides', $collections);
    //return view( $this->layout.'::product', ['view' => 'index'])->with($this->layout, $data);
  }

  public function create()
  {
    $products = Product::all();
    return view('orderguides::orderguide', ['view' => 'create'])->with('products', $products);
  }
}