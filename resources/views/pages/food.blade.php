@extends('dashboard::layouts.twoten')

@section('content')
  
  <div class="page-header">
    <h1>Food</h1>
  </div>

  <div>
    <a href="{{ route('recipes.index') }}" class="btn btn-default">Recipes</a>
    <a href="{{ route('ingredients.index') }}" class="btn btn-default">Recipes</a>
  </div>

  

  
@endsection
