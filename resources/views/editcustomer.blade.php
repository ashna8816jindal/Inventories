<!DOCTYPE html>
<html>
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
      <li class="active"><a href="{{ url('/')}}">Customer</a></li>
      <li><a href="{{ url('product')}}">Product</a></li>
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
  <form action="{{ url('/editcustomer')}}" method="post">
    <div class="form-group">
      {{csrf_field()}}
      <label for="cname">Enter your name: </label>
      <input type="text" value="{{ $data->cname}}" class="form-control" id="cname" placeholder="Enter your name" name="cname">
    </div>
    <div class="form-group">
      <label for="cphnno">Enter your phn no: </label>
      <input type="number" value="{{ $data->cphnno}}" class="form-control" id="cphnno" placeholder="Enter your phn no." name="cphnno">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>