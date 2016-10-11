@extends('layouts.public')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default panel-forgot">
        <div class="panel-heading">Reset Password</div>

        <div class="panel-body">
            @include('auth.parts.forms.passwords-reset')
        </div>
    </div>
</div>
@endsection
