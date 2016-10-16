<div class="panel panel-default {{ array_has($panel, 'panel.class') ?  $panel['class'] : '' }}">
  
  <div class="panel-heading">Recipes</div>
  @if(array_has( $panel, 'panel.heading'))
  <div class="panel-heading">{{ $panel['heading'] }}</div>
  @endif
  <div class="panel-body">
    @include('recipes.list')
  </div>
</div>