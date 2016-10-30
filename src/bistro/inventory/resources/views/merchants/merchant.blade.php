
@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('merchants::sidebar')
@endsection

@section('content-main')
  @include('merchants::'.$view)
@endsection