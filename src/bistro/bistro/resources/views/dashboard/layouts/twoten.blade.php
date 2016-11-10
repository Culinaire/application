@extends('dashboard::layouts.app')

@section('body')
  
  @include('dashboard::layouts.parts.navbar')
  
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-2 sidebar app-sidebar">
        @yield('sidebar')
      </div>

      <div id="main" class="col-sm-10 col-sm-offset-2">
        @yield('content')
      </div>

    </div>
  </div>

  


@endsection