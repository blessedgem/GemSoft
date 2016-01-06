<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GemSoft | Register</title>

	<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

  </script>

</head>

	<body>

		<div id = "login-box">

			<h1> <i class="fa fa-check-square"></i> Register</h1>

			@include('errors.error_list')

			<form method="POST" action="{{ url('/auth/register') }}">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">

				<br/>

				<input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

				<br/>

				<input type="password" class="form-control" name="password" placeholder="Password">

				<br/>

				<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

				<br/>

				<button class = "btn btn-primary" type="submit"><i class="fa fa-check"></i> Register</button>

			</form>

			<br/>

			<span>Go to <a href = "/auth/login" >Login Page</a></span>

		</div>

	</body>

</html>
