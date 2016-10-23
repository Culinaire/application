
  <div class="page-header">
    <h1>Ingredients</h1>
  </div>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Category</th>
      <th>Type</th>
    </thead>
    <tbody>
      @foreach($ingredients as $ingredient)
      <tr>
        <td>{{ $ingredient->name }}</td>
        <td>{{ $ingredient->category }}</td>
        <td>{{ $ingredient->model_type }}</td>
      </tr> 
      @endforeach 
    </tbody>
  </table>
