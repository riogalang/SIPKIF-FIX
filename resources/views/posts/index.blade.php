<!-- DataTables -->
@extends('layouts.applogin')

@section('content-dash')
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Laporan</li>
	</ol>
	<div class="container">
		<h1 style="margin-bottom:3%">Laporan</h1>
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Lokasi</th>
						<th>Kota</th>
						<th>Jumlah Bangunan</th>
						<th>Jenis Bangunan</th>
						<th>Rekomendasi Relawan</th>
						
						<th colspan="2">Status</th>
					</tr>
				</thead>

				@if (count($posts) > 0)
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<th><a href="/posts/{{$post->id}}">{{$post->nama}}</a></th>
							<td>{{$post->lokasi}}</td>
							<td>{{$post->kota}}</td>
							<td>{{$post->jumlahBangunan}}</td>
							<td>{{$post->infrastruktur1}}</td>
							<td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Rekomendasi</a></td>
							<td>
								<p>Selesai</p>
							</td>
							<td>
								<p>Belum Selesai</p>
							</td>
						</tr>
					@endforeach
				</tbody>
				@else
					<p>Laporan tidak ditemukan</p>
				@endif
			</table>
		</div>
	</div>
@endsection
