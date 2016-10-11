@extends('layouts.public')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default panel-register">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
            @include('auth.parts.forms.register')
        </div>
    </div>
</div>
@endsection
