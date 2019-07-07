	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SIPKIF</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">

		<!-- Bootstrap core CSS -->
		<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Plugin CSS -->
		<link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="{{asset('css/creative.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/popUp.css')}}">
		<style>
		.footer{
			background-color: #ffff00;
			color: #00004d;
			text-align: center;
			height: 50px;
			padding-top: 11px;
		}
		h3{
			color: #00004d;
			text-decoration: none;
			transition: .6s;
		}
		a h3:hover {
			color: #ffff00;
			text-decoration: none;
			font-size: 25px;
			text-shadow: 0 0 3px #00004d;
		}
		.bis{
			color: white;
			transition: .6s;
		}
		.bis:hover{
			color: #ffff00;
		}
		</style>
	</head>
	<body id="page-top">

		@include('inc.navbar')
		@yield('content')

		<!-- Bootstrap core JavaScript -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Plugin JavaScript -->
		<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

		<!-- Custom scripts for this template -->
		<script src="{{asset('js/creative.min.js')}}"></script>
	</body>
</html>
