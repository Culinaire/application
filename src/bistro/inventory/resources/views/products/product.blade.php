@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('products::sidebar')
@endsection

@section('content')
  @include('products::'.$view)  
@endsection