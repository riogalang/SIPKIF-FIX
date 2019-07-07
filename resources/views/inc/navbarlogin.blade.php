<nav style="background-color: #00004d" class="navbar navbar-expand navbar-dark static-top">
	<a class="navbar-brand mr-1" href="/">Sipkif</a>

	<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
		<i class="fas fa-bars"></i>
	</button>

	<!-- Navbar akun -->
	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		<div class="navbar-brand mr-1">
			{{ Auth::user()->name }} <span class="caret"></span>
		</div>
	</form>

	<!-- Navbar Kanan-->
	<ul class="navbar-nav ml-auto ml-md-3">
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-user-circle fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="{{route('profile', auth()->user()->id)}}">Akun</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="{{ route('akun.logout') }}" >{{ __('Keluar') }}</a>

			{{-- <form id="logout-form" action="{{ route('akun.logout') }}" style="display: none;">
				@csrf
			</form> --}}
			</div>
		</li>
	</ul>
</nav>
