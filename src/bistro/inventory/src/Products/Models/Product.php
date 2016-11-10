<?php

namespace Bistro\Inventory\Products\Models;

use Bistro\Inventory\Merchants\Models\Merchant;
//use Bistro\Inventory\Products\Traits\Costable;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //use Costable;

    public function merchant()
    {
      return $this->belongsTo('Bistro\Inventory\Merchants\Models\Merchant');
    }

    public function getEachPriceAttribute()
    {
      //return $this->eachPrice();
      
      $price = $this->purchase_price;
      $each = $this->pack_qty;
      return $price/$each;
      
    }

    public function uoms()
    {
      return [
        'oz' => 'oz',
        'lb' => 'lb',
        'ea' => 'ea',
        'gal' => 'gal',
        'dz' => 'dz',
      ];
    }
}
