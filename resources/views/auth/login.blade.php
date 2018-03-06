@extends('layouts.app') 
@section('title', 'Iniciar sesión - '.config('app.name'))
@section('body','bg-login')
@section('content')	
	<div class="container">
		<div class="row pt-5">
			<div class="mx-auto py-5 border-primary col-12 col-md-8 col-lg-4 grey lighten-3 box-shadow">
				<form id="login-form" class="login-register-form ajax-form" role="form" method="post" action="{{ route( 'login') }} ">
					{{ csrf_field() }}
					<h1 class=" text-center mb-5">Inicia sesión</h1>
					<div class="md-form form-sm">							
						<i class="fa fa-envelope prefix" aria-hidden="true"></i>
						<input id="email" name="email" type="email" class="form-control" required>
						<label for="email">Correo</label>
					</div>
					<div class="md-form form-sm">
						<i class="fa fa-key prefix" aria-hidden="true"></i>
						<input id="password" name="password" type="password" class="form-control" required>
						<label for="password">Contraseña</label>
					</div>
					<div class="text-center">
						<button type="submit" class="btn teal darken-3">Igresar</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
@endsection
