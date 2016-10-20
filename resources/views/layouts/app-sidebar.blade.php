@extends('layouts.app')

@section('body')
  
  @include('parts.navbar')
  
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-3 sidebar">
        @include('parts.sidebar')
      </div>

      <div id="main" class="col-sm-9 col-sm-offset-3">
        @yield('content')
      </div>
    </div>
  </div>

  


@endsection