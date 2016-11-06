<div class="page-header">
  <h1>Add Product</h1>
</div>

{!! Form::open(['route'=>'products.create', 'class'=>"form-horizontal"]) !!}
  
  <div class="form-group">
    {!! Form::label('plu', "PLU", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('plu', '', ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit('Create', ['class'=> "btn btn-primary"]) !!}
    </div>
  </div>
{!! Form::close() !!}