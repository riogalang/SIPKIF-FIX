@extends('layouts.applogin')
@section('content-dash')

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Lapor</li>
	</ol>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">Buat Laporan</h3>
					</div>
					<div class="card-body">
						{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true]) !!}
						{{Form::hidden('status','NULL')}}
						<div class="form-group row">
							{{Form::label('nama', 'Nama', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Namaa'])}}
							</div>
						</div>
						
						<div class="form-group row">
							{{Form::label('nik', 'NIK', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::text('nik', '', ['class' => 'form-control', 'placeholder' => 'NIK'])}}
							</div>
						</div>
						<div class="form-group row">
							{{Form::label('notelponn', 'No.Telpon', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::text('notelponn', '', ['class' => 'form-control', 'placeholder' => 'No.Telpon'])}}
							</div>
						</div>
						<div class="form-group row">
							{{Form::label('email', 'Email', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
							</div>
						</div>
							<div class="form-group row">
								{{Form::label('jenis_infrastruktur', 'Jenis Infrastruktur', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::text('jenis_infrastruktur', '', ['class' => 'form-control', 'placeholder' => 'Jenis Infrastruktur'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('upload', 'Bukti Kerusakan', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::file('upload', ['class' => 'form-control-file'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('lokasi', 'Lokasi', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::text('lokasi', '', ['class' => 'form-control', 'placeholder' => 'Lokasi'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('tingakat_kerusakan', 'Tingkat Kerusakan', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::select('tingkat_kerusakan', ['Ringan' => 'Ringan', 'Sedang' => 'Sedang', 'Berat' => 'Berat'], null, ['placeholder' => '--Tingkat Kerusakan--'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('keterangan', 'Keterangan', ['class' => 'col-sm-3'])}}
								<div class="col-md-8">
									{{Form::textarea('keterangan', '', ['class' => 'form-control', 'placeholder' => 'Keterangan'])}}
								</div>
							</div>
							<div align=right>
								{{Form::submit('Laporkan', ['class' => 'btn btn-primary'])}}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
