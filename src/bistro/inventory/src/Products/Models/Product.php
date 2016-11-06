<?php

namespace Bistro\Inventory\Products\Models;

use Bistro\Inventory\Merchants\Models\Merchant;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function merchant()
    {
      return $this->belongsTo('Bistro\Inventory\Merchants\Models\Merchant');
    }

    public function getEachPriceAttribute()
    {
      $price = $this->purchase_price;
      $each = $this->pack_qty;
      return $price/$each;
    }
}
