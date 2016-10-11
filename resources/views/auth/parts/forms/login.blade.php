{!! Form::open(['url'=>'/login', 'class'=>'form-horizontal']) !!}
  
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::email('email', old('email'), ['class'=>'form-control', 'required' => '', 'autofocus' => '']) !!}
      @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::password('password', ['class'=>'form-control', 'required' => '']) !!}
      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <div class="checkbox">
        <label>{!! Form::checkbox('remember') !!} Remember Me</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8 col-md-offset-4">
      <button type="submit" class="btn btn-primary">
        Login
      </button>

      <a class="btn btn-error btn-danger" href="{{ url('/password/reset') }}">
        Forgot Your Password?
      </a>
    </div>
  </div>


{!! Form::close() !!}