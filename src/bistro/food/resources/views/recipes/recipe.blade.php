@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('recipes::sidebar')
@endsection

@section('content')
  @include('recipes::'.$view)
@endsection