<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-4 col-lg-4">
				<br>

				@if(count($errors) > 0 )
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{$error}}</p>
					@endforeach
				@endif

				<form action="" method="post">
					{{csrf_field()}}
					
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<input type="submit" class="btn btn-success">

				</form>
			</div>
		</div>
	</div>
	
</body>
</html>