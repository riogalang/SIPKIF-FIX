@extends('layouts.app')

@section('content')
<header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>SIPKIF</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Sistem Informasi Pendataan Kerusakan Infrastruktur dan Fasilitas Publik</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Ketahui Lebih Jauh</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Apa yang bisa anda lakukan dengan SIPKIF ?</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Dengan SIPKIF anda dapat membantu mempermudah kinerja BPBD
              dalam mengelola data kerusakan infrastruktur dan fasilitas publik yang ada pada suatu wilayah
              dengan meminta peran langsung dari masyarakat yaitu dengan cara melaporkan suatu kerusakan
              infrastruktur dan fasilitas publik melalui SIPKIF ini.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">AYO MULAI!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Layanan</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <!-- Breadcrumbs-->


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">Buat Laporan</h3>
					</div>
					<div class="card-body">
						{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true,'enctype' => 'multipart/form-data']) !!}
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
							{{Form::label('jumlahBangunan', 'Jumlah Bangunan', ['class' => 'col-sm-3'])}}
							<div class="col-md-6">
								{{Form::number('jumlahBangunan', '', ['class' => 'form-control', 'placeholder' => 'Jumlah Bangunan', 'min' => '0'])}}
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
									
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Rumah')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur1', 'Rumah', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Rumah Sakit')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur2', 'Rumah Sakit', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Sekolah')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur3', 'Sekolah', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Museum')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur1[]', 'Museum', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Tempat Ibadah')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur1[]', 'Tempat Ibadah', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Jalan Raya')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur6', 'Jalan Raya', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Puskesmas')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur7', 'Puskesmas', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Perpustakaan')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur8', 'Perpustakaan', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Toko')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur9', 'Toko', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::checkbox('infrastruktur1[]', 'Stasiun')}}
								
								<div class="col-md-6">
									{{Form::label('infrastruktur10', 'Stasiun', ['class' => 'col-sm-3'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('upload', 'Bukti Kerusakan', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::file('cover_image', ['class' => 'form-control-file'])}}
								</div>
							</div>
							<div class="form-group row">
								{{Form::label('lokasi', 'Lokasi', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::textarea('lokasi', '', ['class' => 'form-control', 'placeholder' => 'Lokasi'])}}
								</div>
							</div>
							
							<div class="form-group row">
								{{Form::label('kota', 'Kota', ['class' => 'col-sm-3'])}}
								<div class="col-md-6">
									{{Form::select('kota', ['Yogyakarta' => 'Kota Yogyakarta', 'Bantul' => 'Kab. Bantul', 'Gunung Kidul' => 'Kab. Gunung Kidul','Kulon Progo' => 'Kab. Kulon Progo','Sleman' => 'Kab. Sleman'], null, ['placeholder' => '--Kota / Kabupaten--'])}}
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
    </section>


    <section class="bg-dark text-white" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Kontak</h2>
            <hr class="my-4">
            <p class="mb-5">Anda memerlukan bantuan ? Hubungi kami atau kirim email kepada kami dan kami akan menghubungi Anda sesegera mungkin</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>081-234-567-234</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">tayo.corp@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
	 </section>
	 <footer class="footer">
			<p >&copy Tayo 2018</p>
		</footer>
@endsection
