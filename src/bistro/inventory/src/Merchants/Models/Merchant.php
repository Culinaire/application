<?php

namespace Bistro\Inventory\Merchants\Models;

use Bistro\Inventory\Products\Models\Product;
use Bistro\Inventory\Merchants\Models\MerchantRep;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function products()
    {
      return $this->hasMany('Bistro\Inventory\Products\Models\Product');
    }

    public function reps()
    {
      return $this->hasMany('Bistro\Inventory\Merchants\Models\MerchantRep');
    }

    public function list()
    {
      $model = $this->all();
      $merchants = [];
      $merchants[0] = 'None';
      foreach($model as $merchant) {
        $merchants[$merchant->id] = $merchant->name;
      }

      return $merchants;
    }
}
