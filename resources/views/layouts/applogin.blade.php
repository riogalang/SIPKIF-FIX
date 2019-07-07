<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>SIPKIF - Masyarakat</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Bootstrap core CSS-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
	<script>
		function hapus(){
			$('#gambar').remove();
			$('#tambah').append("<input type='file' name='upload' id='upload'>");
		}
	</script>

	{{-- Navbar --}}
	@include('inc.navbarlogin')

	<div id="wrapper">
		<!-- Sidebar -->
		@include('inc.sidebarlogin')

		<div id="content-wrapper">
			<div class="container-fluid">
				{{-- @yield('content-dashboard') --}}
				@yield('content-dash')
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Core plugin JavaScript-->
	<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

	<!-- Page level plugin JavaScript-->
	<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

	<!-- Custom scripts for all pages-->
	<script src="{{asset('js/sb-admin.min.js')}}"></script>
</body>
</html>
