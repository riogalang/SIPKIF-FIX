@extends('layouts.appbpbd')

@section('content-dash')
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="indexDinas.html">Beranda</a>
		</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
		<i class="fas fa-table"></i>
		Data Tabel <br>
		<p>Daftar laporan kerusakan infrastruktur</p>
		</div>
		<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				<tr>
					<th>Gambar</th>
					<th>Nama</th>
					<th>Laporan</th>
					<th>Status</th>
					<th colspan="2">Aksi</th>
				</tr>
				</thead>
				@php
					 $banyakPost = count($posts);
					 $banyakUser = count($users);
					 if($banyakUser>$banyakPost) {
						 $patokan = $banyakUser;
					 } else {
						 $patokan = $banyakPost;
					 }

				@endphp
				@for($i=0; $i<$patokan; $i++)
				<tbody>
					@if(isset($posts[$i]))
						<tr>
							<td><img src="{{url('images/'.$posts[$i]->original)}}" alt="{{$posts[$i]->original}}" width="50px" height="50px"></td>
							@if(isset($users[$i]))
								<td><a href="{{route('profile', auth()->user()->id)}}">{{$users[$i]->name}}</a></td>
							@endif
							<td>{{$posts[$i]->jenis_infrastruktur}}</td>
							<th></th>
							@if(isset($users[$i]))
								<td width='10%'><a href="/dinas/{{$posts[$i]->id}}/edit" class="btn btn-primary">Ubah</a></td>
							@endif
						</tr>
					@endif
				</tbody>
				@endfor
			</table>
		</div>
		</div>
		<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	</div>

	<!-- Area Chart Example-->
	<div class="row">
		<div class="col-lg-8">
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-chart-bar"></i>
				Diagram Batang <br>
				<p>Laporan kerusakan infrastruktur dalam bentuk tabel batang</p>
			</div>
			<div class="card-body">
				<canvas id="myBarChart" width="100%" height="50"></canvas>
			</div>
			<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
		</div>
		</div>
@endsection
