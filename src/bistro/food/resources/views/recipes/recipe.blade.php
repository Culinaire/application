@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('recipes::sidebar')
@endsection

@section('content-main')
  @include('recipes::'.$view)
@endsection