@extends('layouts.app') 
@section('content')
<div class="bg-red py-5 ">
	<div class="container ">
		<div class="row">
			<div class="col-6 d-none d-lg-block">	
				@if($errors->any())					
					@foreach($errors->all() as $error)
					{{$error}}
					@endforeach
				@endif</div>
			<div class="col-12 col-lg-6">
				<div class="mx-auto border-primary col-8 bg-white">
					
					<form role="form" id="registerForm" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}
						<p class="h5 text-center mb-4">Registro</p>
						<div class="md-form">
							<i class="fa fa-user prefix grey-text"></i>
							<input id="name" name="name" type="text" value="{{ old('name', $name) }}" class="form-control">
							<label for="name">Nombre</label>
						</div>
						<div class="md-form">
							<i class="fa fa-user prefix grey-text"></i>
							<input id="rut" name="rut" type="text" value="{{ old('rut') }}" class="form-control">
							<label for="rut">Rut</label>
						</div>
						<div class="md-form">
							<i class="fa fa-user prefix grey-text"></i>
							<input id="phone" name="phone" type="text" value="{{ old('phone', $phone ) }}" class="form-control">
							<label for="phone">Teléfono<label>
						</div>
						<div class="md-form">
							<i class="fa fa-envelope prefix grey-text"></i>
							<input id="email-register" name="email" type="email" value="{{ old('email', $email ) }}" class="form-control">
							<label for="email-register">Correo</label>
						</div>
						<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input id="password-register" name="password" type="password" class="form-control">
							<label for="password-register">Contraseña</label>
						</div>
						<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input id="password-confirm" name="password_confirmation" type="password" class="form-control">
							<label for="password-confirm">Confirmar contraseña</label>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-deep-orange">Registrarse</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
