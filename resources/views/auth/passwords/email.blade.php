@extends('layouts.public')

<!-- Main Content -->
@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default panel-forgot">
        <div class="panel-heading">Reset Password</div>
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('auth.parts.forms.passwords-email')
            
        </div>
    </div>
</div>
@endsection
