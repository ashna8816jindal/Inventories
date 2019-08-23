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
  <form action="{{ url('/insertcustomer')}}" method="post">
    <div class="form-group">
      {{csrf_field()}}
      <label for="cname">Enter your name: </label>
      <input type="text" class="form-control" id="cname" placeholder="Enter your name" name="cname">
    </div>
    <div class="form-group">
      <label for="cphnno">Enter your phn no: </label>
      <input type="number" class="form-control" id="cphnno" placeholder="Enter your phn no." name="cphnno">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>


	<div class="container">
		<div class="row">
			<div class="col">
				<h3>Data</h3>
				
			</div>
			<div class="col2">
				<a class="btn btn-success" href="{{ url('/') }}">Create new data</a>
			</div>
			
		</div>
		@if($message = Session::get('success'))
			<div class="alert">
				{{$message}}
			</div>
		@endif
		<table class="table table-striped table-hover">
			<tr>
				<th>Customer id</th>
				<th width=""><b>Customer Name</b></th>
				<th width=""><b>Phn no.</b></th>
				<th width="">Action</th>

			</tr>
			@foreach($customer as $data)
			<tr>
				
			
				<td>{{$data->id}}</td>
				<td>{{$data->cname}}</td>
				<td>{{$data->cphnno}}</td>

				<td>
					<form action="{{ url('biodata.destroy') }}" method="post"> 
					<a class="btn btn-success" href='{{ url("/edit/{$data->id}") }}'>edit</a>
					@csrf
					<a class="btn btn-danger" href='{{ url("/delete/{$data->id}") }}' >Delete</a>
				<!-- 	<button type="submit" class="btn btn-danger">Delete</button> -->
					</form>
					
				</td>
			</tr>
			@endforeach
		</table>


		
	</div>

</body>
</html>
