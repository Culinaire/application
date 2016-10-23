 <div class="page-header">
    <h1>{{ $merchant->name }}</h1>
  </div>

 <div id="merchant-reps" class="col-sm-12">
   <div class="panel panel-default">
   
   <div class="panel-heading">
     <h2 class="panel-title">Reps</h2>
   </div>

   <ul class="list-group">
     @foreach($merchant->reps as $rep)
     <li class="list-group-item">{{ $rep->first }} {{ $rep->last }}</li>
     @endforeach
   </ul>
 </div>
 </div>

  <div id="merchant-products" class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Products</h2>
      </div>
      <ul class="list-group">
        @foreach($merchant->products as $product)
        <li class="list-group-item"><a href="{{ route('products.show', ['id'=> $product->id]) }}">{{ $product->description }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>


  