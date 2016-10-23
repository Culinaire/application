
@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('merchants::sidebar')
@endsection

@section('content')
  @include('merchants::'.$view)
@endsection