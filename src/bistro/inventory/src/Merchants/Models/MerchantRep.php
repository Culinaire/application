<?php

namespace Bistro\Inventory\Merchants\Models;

use Bistro\Inventory\Merchants\Models\Merchant;

use Illuminate\Database\Eloquent\Model;

class MerchantRep extends Model
{
    public function merchant()
    {
      return $this->belongsTo('Merchant');
    }
}
