@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('ingredients::sidebar')
@endsection

@section('content-main')

  @include('ingredients::'.$view)
  
@endsection