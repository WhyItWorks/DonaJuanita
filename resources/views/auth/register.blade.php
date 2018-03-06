@extends('layouts.app') 
@section('title', 'Registro - '.config('app.name'))
@section('body','bg-login')
@section('content')	
	<div class="container">
		<div class="row pt-lg-3">

			<div class="mx-auto py-5 border-primary col-md-8 col-lg-4 grey lighten-3 box-shadow">				
				<form role="form" id="register-form" class="login-register-form ajax-form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<h1 class=" text-center mb-5">Registrate</h1>
					
					<div class="md-form form-sm">
						<i class="fa fa-user prefix"></i>
						<input id="name" name="name" type="text" value="{{ old('name', $name) }}" class="form-control" data-toggle="tooltip" data-placement="right" required>
						<label for="name">Nombre</label>
					</div>				
					<div class="md-form form-sm ">
						<i class="fa fa-phone prefix"></i>
						<input id="phone" name="phone" type="text" value="{{ old('phone', $phone ) }}" class="form-control" data-toggle="tooltip" data-placement="right" required>
						<label for="phone">Teléfono<label>
					</div>  																			
					<div class="md-form form-sm">							
						<i class="fa fa-envelope prefix"></i>
						<input id="email" name="email" type="email" value="{{ old('email', $email ) }}" class="form-control" data-toggle="tooltip" data-placement="right" required>
						<label for="email">Correo</label>
					</div>
					<div class="md-form form-sm">
						<i class="fa fa-key prefix"></i>
						<input id="password" name="password" type="password" class="form-control" data-toggle="tooltip" data-placement="right" required>
						<label for="password">Contraseña</label>
					</div>
					<div class="md-form form-sm">
						<i class="fa fa-lock prefix"></i>
						<input id="password-confirm" name="password_confirmation" type="password" class="form-control" data-toggle="tooltip" data-placement="right" required>
						<label for="password-confirm">Confirmar contraseña</label>
					</div>
					<div class="text-center">
						<button type="submit" class="btn teal darken-3">Registrarse</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>

	
	
@endsection
