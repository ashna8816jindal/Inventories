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
      <li class="active"><a href="{{ url('product')}}">Product</a></li>
      <li><a href="{{ url('purchase')}}">Purchase</a></li>
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
  <form action="{{ url('/productdetails')}}" method="post">
    <div class="form-group">
      {{csrf_field()}}
      <label for="pname">Enter product name: </label>
      <input type="text" class="form-control" id="pname" placeholder="Enter product name" name="pname">
    </div>
    <div class="form-group">
      <label for="pcost">Enter cost </label>
      <input type="number" class="form-control" id="pcost" placeholder="Enter cost" name="pcost">
    </div>
      <div class="form-group">
      <label for="quantity">Enter quantity </label>
      <input type="number" class="form-control" id="pquant" placeholder="Enter quantity" name="pquant">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>


</body>
</html>
