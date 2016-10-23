@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('ingredients::sidebar')
@endsection

@section('content')

  @include('ingredients::'.$view)
  
@endsection