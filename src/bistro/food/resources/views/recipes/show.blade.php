<div class="recipe {{ $recipe->type }}-recipe">

  <div class="page-header">
    <h1>
      {{ $recipe['name'] }}
      <div class="hidden-print pull-right">
        <a class="btn btn-primary" href="#"><span class="fa fa-pencil"></span> Edit</a>
      </div>
    </h1>
  </div>

  
  @include('recipes::partials.ingredients', ['ingredients' => $recipe->recipeIngredients])
  @include('recipes::partials.procedures', ['procedures' => []])
  @include('recipes::partials.quality', ['quality'=> []])

</div>