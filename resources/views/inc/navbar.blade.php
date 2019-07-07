<!-- Navigation -->
<nav style="background-color: #00004d" class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container-fluid">
		<a class="navbar-brand js-scroll-trigger" href="/">SIPKIF</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span style="background-color: #e6e6e6" class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#services">Layanan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
			</li>
			@guest
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger; bis" href="#pilihLogin">Masuk</a>
				</li>
				<li class="nav-item">
					@if (Route::has('register'))
						<a class="nav-link js-scroll-trigger; bis" href="{{ route('register') }}">Daftar</a>
					@endif
				</li>
				@else
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/dashboard">Dashboard</a>
					</li>
			@endguest
			</ul>
		</div>
	</div>
</nav>
<!-- pop up -->

<div class="overlay" id="pilihLogin">
<a href="#" class="close">X close</a>
	<div class="containerPopup">
		<h1 class="text-faded mb-4">Pilih Status</h1>
		<p class="text-faded mb-4">Silahkan pilih status anda :</p>
		<div class="containerPilih">
			<ul class="pilihan">
				<li>
					<a href="{{route('akun.login')}}">
					<img src="img/icon/masyarakat.png">
					<p>Masyarakat</p>
					</a>
				</li>
				<li>
					<a href="{{route('akun.login')}}">
					<img src="img/icon/bpbd2.png">
					<p>BPBD</p>
					</a>
				</li>
				<li>
					<a href="#kode">
					<img src="img/icon/anggota.png">
					<p>Anggota Dinas</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="overlay" id="kode">
<a href="#" class="close">X close</a>
	<div class="containerPopup">
		<h1 class="text-faded mb-4">Kode</h1>
		<p class="text-faded mb-4">Silahkan masukan kode verifikasi</p>
		<div class="containerPilih">
			<form action="" method="post">
				<input class="text-faded mb-4" type="password" name="kode" required autofocus ><br><br>
				<button name="oke">Oke</button>
			</form>
		</div>
	</div>
</div>
