<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/')}}">Customer</a></li>
      <li><a href="{{ url('product')}}">Product</a></li>
      <li class="active"><a href="{{ url('purchase')}}">Purchase</a></li>
        <li><a href="{{ url('sales')}}">Sales</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  @if(session ('info'))
  <div class="alert alert-success">
    {{session('info')}}
  </div>
  @endif
  <form action="{{ url('/purchasedetails')}}" method="post">
    <div class="col-sm-2">
      {{csrf_field()}}
      <label for="id">Product Name</label>
      <select name="id" class="form-control" id="pid">
      @foreach($producttable as $product)
        <option value="{{ $product->id}}">
          {{ $product->pname}}
        </option>
        @endforeach
      </select>
          </div> 
    <div class="col-sm-2">
      <label for="quantity">Enter quantity </label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>


</body>
</html>
