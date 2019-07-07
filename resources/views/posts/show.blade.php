@extends('layouts.applogin')

@section('content-dash')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Laporan</li>
	<li class="breadcrumb-item active">{{$post->jenis_infrastruktur}}</li>
</ol>

<!-- DataTables Example -->
<div id="show" class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		Detail Laporan <br>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<!-- Laporan -->
			<div class="containerLaporan">
				<ul>
					<li>
						<div class="col-xl-5 col-sm-6 mb-3">
							<div class="containerKiri">
								<h3>{{$post->jenis_infrastruktur}}</h3>
							<img src="/storage/cover_images/{{$post->cover_image}}" width="250px" height="250px">
								<h6>Keterangan Tambahan :</h6>
								<div>
									<p>{{$post->keterangan}}</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="col-xl-3 col-sm-6 mb-3">
							<div class="containerKanan">
							<table>
								<tr>
									<td>Tingkat Kerusakan</td>
									<td>:</td>
									<td>{{$post->tingkat_kerusakan}}</td>
								</tr>
								<tr>
									<td>Tanggal</td>
									<td>:</td>
									<td>{{$post->created_at}}</td>
								</tr>
								<tr>
									<td>Lokasi</td>
									<td>:</td>
									<td>{{$post->lokasi}}</td>
								</tr>
								<tr>
									<td>Rekomendasi</td>
									<td>:</td>
									<td>{{$post->Ztotal}}</td>
								</tr>
							</table>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
