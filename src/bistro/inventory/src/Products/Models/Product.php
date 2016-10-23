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
}
