@extends('layouts.public')

@section('content')

<div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default panel-login">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
      @include('auth.parts.forms.login')
    </div>
  </div>
  @endsection
