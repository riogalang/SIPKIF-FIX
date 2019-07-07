@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:6%">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
					<div class="card-header">
						<h3 class="text-center">{{ __('Daftar') }}</h3>
					</div>

					<div class="card-body">
						@if($errors->any())
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
						@endif

						<form method="POST" action="{{ route('register') }}">
							@csrf

							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

								<div class="col-md-6">
									<input id="name" type="text" placeholder="Nama Lengkap"
									class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" placeholder="E-mail"
									class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" placeholder="Password"
									class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" placeholder="Konfirmasi Password"
									class="form-control" name="password_confirmation" required>
								</div>
							</div>

							<div class="form-group row">
								<label for="notelpon" class="col-md-4 col-form-label text-md-right">{{ __('No Telpon') }}</label>

								<div class="col-md-6">
										<input id="notelpon" type="tel" class="form-control"
										name="notelpon" value="{{ old('notelpon') }}" placeholder="No Telpon" required autofocus>

										@if ($errors->has('notelpon'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('notelpon') }}</strong>
											</span>
										@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

								<div class="col-md-6">
										<input id="pekerjaan" type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}"
										name="pekerjaan" value="{{ old('pekerjaan') }}" placeholder="Pekerjaan" required autofocus>

										@if ($errors->has('pekerjaan'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('pekerjaan') }}</strong>
											</span>
										@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

								<div class="col-md-6">
										<textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"
											name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required autofocus></textarea>

										@if ($errors->has('alamat'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('alamat') }}</strong>
											</span>
										@endif
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Register') }}
									</button>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
