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

			<h1> <i class="fa fa-lock"></i> Login</h1>

			@include('errors.error_list')

			

			<form method="POST" action="{{ url('/auth/login') }}">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<input type="text" class="form-control" name="email" placeholder="Username" value="{{ old('email') }}">

				<br/>

				<input type="password" class="form-control" name="password" placeholder="Password">

				<br/>

				<button class = "btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Login</button>

			</form>

		</div>

	</body>

</html>
