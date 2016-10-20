
  <div class="page-header">
    <h1>Products</h1>
  </div>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Vendor</th>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->vendor->name }}</td>
      </tr> 
      @endforeach 
    </tbody>
  </table>
