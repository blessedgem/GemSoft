<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GemSoft | {{$title}}</title>
	
  	<link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
  	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

  	<script src="{{ asset('/js/jquery.js') }}" rel="stylesheet"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}" rel="stylesheet"></script>
	<script src="{{ asset('/js/masonry.pkgd.min.js') }}" rel="stylesheet"></script>
	<script src="{{ asset('/js/dash.js') }}" rel="stylesheet"></script>


</head>
<body>

	<header id = "main-header">

		<div id = "inner-header">
		
			<div id = "logo-container">
				<img src = "/images/gemsoft_logo.png" />
			</div>

			<div id = "name-container">
				{{ Auth::user()->name }}
			</div>

			<div class = "clear-both"></div>
		</div>
		
	</header>

</body>

</html>
