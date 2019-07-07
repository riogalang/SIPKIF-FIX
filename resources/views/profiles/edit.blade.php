@extends('layouts.applogin')

@section('content-dash')
<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/dashboard">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Profile</li>
		<li class="breadcrumb-item active">Edit</li>
	</ol>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h3>Ubah Profile</h3>
					</div>
					<div class="card-body ">
						{!! Form::open(['action' => ['ProfilController@update', $user->id], 'method' => 'POST', 'files' => true, 'enctype'=> 'multipart/form-data'] ) !!}
							<div class="form-group row">
								<img src="{{url('img/icon/editprofil.png')}}" alt="">
							</div>
							<div class="form-group row">
								{{Form::label('name', 'Nama', ['class' => 'col-sm-2'])}}
								<div class="col-md-6">
									{{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nama'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('email', 'Email', ['class' => 'col-sm-2'])}}
								<div class="col-md-6">
									{{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('notelpon', 'No Telpon', ['class' => 'col-sm-2'])}}
								<div class="col-md-6">
									{{Form::text('notelpon', $user->notelpon, ['class' => 'form-control', 'placeholder' => 'No Telpon'])}}
								</div>
							</div>
							{{-- <div class="form-group row">
								{{Form::label('foto', 'Foto', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									<div id="gambar">
											<img src="{{url('images/'.$user->original)}}">
											<button type="button" onclick="hapus()">Ganti</button>
									</div>
									<div id="tambah">

									</div>

									<input type="hidden" value="{{$user->original}}" name="old">
								</div>
							</div> --}}
							<div class="form-group row">
								{{Form::label('pekerjaan', 'Pekerjaan', ['class' => 'col-sm-2'])}}
								<div class="col-md-6">
									{{Form::text('pekerjaan', $user->pekerjaan, ['class' => 'form-control', 'placeholder' => 'Pekerjaan'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('alamat', 'Alamat', ['class' => 'col-sm-2'])}}
								<div class="col-md-8">
									{{Form::textarea('alamat', $user->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat'])}}
								</div>
							</div>
							<div align=right>
								{{Form::hidden('_method', 'PUT')}}
								{{Form::submit('Ubah', ['class' => 'btn btn-primary'])}}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
