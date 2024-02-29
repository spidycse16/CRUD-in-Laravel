<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-light" href="/">Producs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">NULL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">NULL</a>
    </li>
  </ul>

</nav>
<body>
    <div class="container">
        <div class="text-right">
             <a href="product/create" class="btn-dark mt-2">New Product</a>
</div>

<div>
<table class="table table-hover mt-2">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$product->name}}</td>
        <td><img src="products/{{$product->image}}"class="rounded-circle" width="50" height="50"></td>
        <td>
      <a href="products/{{$product->id}}/edit"class="btn btn-dark btn-sm">Edit</a>
</td>
      </tr> 
      @endforeach
</tbody>
</table>
</div>

</body>
</html>