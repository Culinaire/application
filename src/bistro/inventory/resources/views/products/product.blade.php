@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('products::sidebar')
@endsection

@section('content-main')
  @include('products::'.$view)  
@endsection