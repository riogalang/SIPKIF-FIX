@extends('layouts.applogin')

@section('content-dash')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="/dashboard">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Laporan</li>
	
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
								<
							</div>
						</div>
					</li>
					<li>
						<div class="col-xl-3 col-sm-6 mb-3">
							<div class="containerKanan">
							<table>
								
									<td>Lokasi</td>
									<td>:</td>
									<td>{{$post->$Ztotal}}</td>
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
