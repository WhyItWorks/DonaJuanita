@extends('layouts.app') @section('styles')

<link rel="stylesheet" href="{{ asset('css/auth/form-elements.css') }}">
<link rel="stylesheet" href="{{ asset('css/auth/style.css') }}"> @endsection @section('body','login-page sidebar-collapse') @section('content')

<div class="page-header">
	<div class="page-header-image" style="background-image:url( {{ asset('img/login.jpg') }} )"></div>
	<!-- Top content -->
	<div class="py-5 cont">
		<div class="container mt-4">
			<div class="d-flex justify-content-center">
				<div class="row col-8">
					<div class="w-100 form-box">

						<form role="form" method="POST" action="{{ route('register') }}" class="f1">
							{{ csrf_field() }}
							<h3>Unete a nosotros</h3>
							<p>Llena los campos para comenzar a reservar</p>
							<div class="f1-steps">
								<div class="f1-progress">
									<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
								</div>
								<div class="f1-step active">
									<div class="f1-step-icon">
										<i class="fa fa-user"></i>
									</div>
									<p>Personal</p>
								</div>
								<div class="f1-step">
									<div class="f1-step-icon">
										<i class="fa fa-key"></i>
									</div>
									<p>Cuenta</p>
								</div>
								<div class="f1-step">
									<div class="f1-step-icon">
										<i class="fa fa-check"></i>
									</div>

								</div>

							</div>

							<fieldset>
								<h4>Cuentanos sobre ti:</h4>
								<div class="form-group">
									<label class="sr-only" for="name">Nombre</label>
									<input id="name" class="form-control" placeholder="Nombre completo" type="text" name="name" value="{{ old('name') }}" required>

								</div>
								<div class="form-group">
									<label class="sr-only" for="rut">Rut</label>
									<input id="rut" class="form-control" placeholder="Rut" type="text" name="rut" value="{{ old('rut') }}" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="phone">Número</label>
									<input id="phone" class="form-control" placeholder="Número telefónico" type="text" name="phone" value="{{ old('phone') }}"
									 required>
								</div>
								<div class="f1-buttons">
									<button type="button" class="btn btn-next">Continuar</button>
								</div>
							</fieldset>

							<fieldset>
								<h4>Configura tu cuenta:</h4>
								<div class="form-group">
									<label class="sr-only" for="email">Email</label>
									<input id="email" class="form-control" placeholder="Correo" type="text" name="email" value="{{ old('email') }}">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Contraseña</label>
									<input id="password" class="form-control" placeholder="Contraseña" type="password" name="password">
								</div>
								<div class="form-group">
									<label class="sr-only" for="f1-repeat-password">Repetir contraseña</label>
									<input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation"
									 required />
								</div>
								<div class="f1-buttons">
									<button type="button" class="btn btn-previous">Volver</button>
									<button type="submit" class="btn btn-submit">Crear cuenta</button>

								</div>
							</fieldset>



						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection @section('scripts')
<script src="{{ asset('js/auth/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('js/auth/scripts.js') }}"></script>
@endsection