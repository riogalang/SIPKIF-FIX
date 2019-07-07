@extends('layouts.applogin')

@section('content-dash')
<div id="overview">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Overview</li>
	</ol>

	<!-- Icon Cards-->
	<div class="row">
		<div class="col-xl-4 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="mr-5">
					<img style="padding: 0 130px" src="{{asset('img/icon/lapor.png')}}">
					<h5 style="padding: 20px 0">Lapor Kerusakan Infrastruktur</h5>
				</div>
				</div>
				<a id="cardlapor" class="card-footer text-white clearfix small z-1" href="{{route('laporan')}}">
				<span class="float-left">Lanjut</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
		</div>
		<div class="col-xl-4 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="mr-5">
					<img style="padding: 0 130px" src="{{asset('img/icon/cekLaporan.png')}}">
					<h5 style="padding: 20px 0">Cek Laporan</h5>
				</div>
				</div>
				<a id="cardlaporan" class="card-footer text-white clearfix small z-1" href="{{route('cek-laporan')}}">
				<span class="float-left">Lanjut</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
		</div>
		<div class="col-xl-4 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="mr-5">
					<img style="padding: 0 110px" src="{{asset('img/icon/bpbd2.png')}}">
					<h5 style="padding: 20px 0">Informasi tentang BPBD</h5>
				</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="https://bnpb.go.id/bpbd-provinsi">
					<span class="float-left">Lanjut</span>
					<span class="float-right">
						<i class="fas fa-angle-right"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
