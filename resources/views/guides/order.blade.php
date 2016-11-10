@extends('dashboard::layouts.full')

@section('content-main')
  
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <tr>
        <th>Order Qty</th>
        <th>PLU</th>
        <th>Name</th>
        <th>Purchase Price</th>
        <th>Pack Size</th>
        <th>Case on Hand</th>
        <th>Each on Hand</th>
        <th>Merchant</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>&nbsp;</td>
        <td>{{ $product->plu }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->purchase_price }}</td>
        <td>{{ $product->pack_qty }} / {{ $product->pack_size }} {{ $product->pack_uom }}</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>{{ $product->merchant->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
