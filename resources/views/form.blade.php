<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script
		  src="http://code.jquery.com/jquery-3.3.1.min.js"
		  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		  crossorigin="anonymous">
	</script>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	<div id="app">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-4 col-lg-4">
					<br>

					@if(count($errors) > 0 )
						@foreach($errors->all() as $error)
							<p class="alert alert-danger">{{$error}}</p>
						@endforeach
					@endif

					<form action="" method="post" id="form">
						{{csrf_field()}}
						
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="{{__('my.name',['example' => ' '])}}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="{{__('my.email',['example' => ''])}}">
						</div>
						{{-- @captcha --}}
						<input type="submit" class="btn btn-success">

					</form>
				</div>

				
			</div>
		</div>
					<example-component></example-component>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
				//console.log('hi');
				//$('#form').submit();
		})
	</script>
	<script src="{{asset('js/app.js')}}"></script>
	
</body>
</html>