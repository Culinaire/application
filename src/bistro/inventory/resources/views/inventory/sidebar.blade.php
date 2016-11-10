<ul class="nav nav-sidebar">

  <h4 class="sidebar-heading">Merchants</h4>
  <li><a href="{{ route('merchants.index') }}">All Merchants</a></li>
  <li><a href="{{ route('merchants.create') }}">Add Merchant</a></li>
  
  <h4 class="sidebar-heading">Products</h4>
  <li><a href="{{ route('products.index') }}">All Products</a></li>
  <li><a href="{{ route('products.create') }}">Add Product</a></li>
  
  
  <h4 class="sidebar-heading">Order Guides</h4>
  <li><a href="{{ route('orderguides.index') }}">Order Guides</a></li>
  <li><a href="{{ route('orderguides.create') }}">Create Order Guides</a></li>
</ul>