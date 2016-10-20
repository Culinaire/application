
@extends('app.layouts.full')

@section('content')

  <div class="col-sm-2">
    @include('merchants::sidebar')
  </div>
  
  <div class="col-sm-10 col-sm-offset-2">
    @include('merchants::'.$view)
  </div>
  
@endsection