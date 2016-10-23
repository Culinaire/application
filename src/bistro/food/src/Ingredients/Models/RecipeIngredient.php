<?php

namespace Bistro\Food\Ingredients\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
  public function recipe()
  {
    return $this->belongsTo('Bistro\Food\Recipes\Models\Recipe');
  }

  public function ingredient()
  {
    return $this->hasOne('Bistro\Food\Ingredients\Models\Ingredient', 'id','ingredient_id');
  }
}