@extends('layouts.applogin')

@section('content-dash')
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Profil</li>
	</ol>
	<div class="card mb-3">
		<div class="card-body">
			<div class="table-responsive">
				<center>
				<h5>Akun</h5>
					<img style=" border-radius: 50%;margin: auto;" src="{{asset('img/icon/masyarakat.png')}}">
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>{{$user->name}}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>{{$user->email}}</td>
						</tr>
						<tr>
							<td>No Telpon</td>
							<td>:</td>
							<td>{{$user->notelpon}}</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td>{{$user->pekerjaan}}</td>
							</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td>{{$user->alamat}}</td>
						</tr>
					</table><br>
					<a href="{{route('edit-profile', $user->id)}}"><button class="btn btn-primary js-scroll-trigger">Ubah</button></a>
					<a class="d-block small mt-3" href="">Ganti Kata Sandi</a>
				</center>
			</div>
		</div>
	</div>
@endsection
