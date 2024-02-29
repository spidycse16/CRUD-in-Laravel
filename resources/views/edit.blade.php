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
      <a class="nav-link text-light" href="/">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">NULL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">NULL</a>
    </li>
  </ul>

</nav>
@if($message= Session::get('success'))
<div class="alert alert-success alert-block">
  <strong> {{ $message  }}</strong>
</div>
@endif
<body>
    <div class="container">
        <div class="row justify-content center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                <form method="POST" action="/product/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" 
                         value="{{ old('name',$product->name)}}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name') }}
</span>
                          @endif
</div>
<div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description"> {{ old('description',$product->description)}}"</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description') }}
</span>
                          @endif
</div>
<div class="form-group">
  <label>Image</label>
  <input type="file" name="image" class="form-control"/>
  @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name') }}
</span>
                          @endif
</div>
<button type="submit" class="btn btn-dark"> Submit</button>
</form>

</div>
               
</div>
</div>

</body>
</html>