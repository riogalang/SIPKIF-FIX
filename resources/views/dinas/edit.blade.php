@extends('layouts.appdinas')

@section('content-dash')
	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
		<i class="fas fa-table"></i>
		Laporan <br>
		<p>Detail Laporan :</p>
		</div>
		<div class="card-body">
		<div class="table-responsive">
			<!-- Laporan -->
			<div class="containerLaporan">
				{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'files' => true, 'enctype'=> 'multipart/form-data'] ) !!}
			<ul>
				<li>
					<div class="col-xl-5 col-sm-6 mb-3">
						<div class="containerKiri">
						<h3>{{$post->jenis_infrastruktur}}</h3>
						<img src="{{url('images/'.$post->original)}}" width="250ps" height="250px">
						<h6>Keterangan Tambahan :</h6>
						<ol>
							<li>{{$post->keterangan}}</li>
						</ol>
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
								<td>{{$post->tingkat_kerusakan}}/td>
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
								<td>Status</td>
								<td>:</td>
								<td>
									<select class="form-control">
										<option value="belum_valid">Belum Valid</option>
										<option value="valid">Valid</option>
										<option value="tidak_valid">Tidak Valid</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									{{Form::hidden('_method', 'PUT')}}
									{{Form::submit('Ubah', ['class' => 'btn btn-primary'])}}
								</td>
							</tr>
							</table>
						</div>
					</div>
				</li>
			</ul>
			{!! Form::close() !!}
			</div>
		</div>
		</div>
		<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	</div>
@endsection
