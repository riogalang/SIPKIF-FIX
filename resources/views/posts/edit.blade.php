@extends('layouts.applogin')

@section('content-dash')


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Rekomendasi Relawan</h3>
				</div>
				<div class="card-body">
					{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','enctype'=>'multipart/form-data'] ) !!}

					{{Form::hidden('nama',$post->nama)}}
					{{Form::hidden('nik',$post->nik)}}
					{{Form::hidden('notelponn',$post->notelponn)}}
					{{Form::hidden('email',$post->email)}}
					{{Form::hidden('cover_image',$post->cover_image)}}
					{{Form::hidden('kota',$post->kota)}}
					{{Form::hidden('lokasi',$post->lokasi)}}
					{{Form::hidden('keterangan',$post->keterangan)}}
				

         
						{{-- <input type="hidden" name="_method" value="PATCH"> --}}
						<div class="form-group row">
							{{Form::label('jumlahBangunan', 'Jumlah Bangunan', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::number('jumlahBangunan', $post->jumlahBangunan, ['class' => 'form-control', 'placeholder' => 'Jenis Infrastruktur'])}}
							</div>
						</div>	
						<div class="form-group row">
							{{Form::label('jumlahInfrastruktur', 'Jumlah Infrastruktur', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::number('jumlahInfrastruktur', $post->jumlahInfrastruktur, ['class' => 'form-control', 'placeholder' => 'Lokasi'])}}
							</div>
						</div>


						<div class="row form-group">
							<div class="col col-md-3">
							  <label>Nama</label>
							</div>
					  <div class="col-12 col-md-9">
							<p>{{$post->nama}}</p>
							</div>
						 </div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>NIK</label>
					  </div>
					  <div class="col-12 col-md-9">
						 <p>{{$post->nik}}</p>
					  </div>
					</div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>notelponn</label>
					  </div>
					  <div class="col-12 col-md-9">
						 <p>{{$post->notelponn}}</p>
					  </div>
					</div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>Email</label>
					  </div>
					  <div class="col-12 col-md-9">
						 <p>{{$post->email}}</p>
					  </div>
					</div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>Gambar</label>
					  </div>
					  <div class="col-12 col-md-9">
						<img src="/storage/cover_images/{{$post->cover_image}}" width="250px" height="250px">
					  </div>
					</div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>Lokasi</label>
					  </div>
					  <div class="col-12 col-md-9">
						 <p>{{$post->lokasi}}</p>
					  </div>
					</div>
					<div class="row form-group">
					  <div class="col col-md-3">
						 <label>Kota</label>
					  </div>
					  <div class="col-12 col-md-9">
                  <p>{{$post->kota}}</p>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-3">
                  <label>Keterangan</label>
                </div>
                <div class="col-12 col-md-9">
                  <p>{{$post->keterangan}}</p>
                </div>
              </div>
						
						
						<div align=right>
							{{Form::hidden('_method', 'PUT')}}
							{{Form::submit('Hitung', ['class' => 'btn btn-primary'])}}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
