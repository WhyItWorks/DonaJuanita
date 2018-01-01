@extends('layouts.app') @section('body','login-page sidebar-collapse') @section('content')

<div class="page-header" filter-color="black">
	<div class="page-header-image" style="background-image:url( {{ asset('img/login.jpg') }} )"></div>
	<div class="container">
		<div class="col-md-4 content-center">
			<div class="card card-login card-plain pb-3">
				<form class="form-horizontal mt-5" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}

					<div class="content">
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons users_circle-08"></i>
							</span>
							<input id="name" type="text " class="form-control " value="{{ old('name','') }}" name="name" placeholder="Nombre " required>
						</div>
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons ui-1_email-85"></i>
							</span>
							<input id="email" class="form-control " placeholder="Email " type="email" name="email" value="{{ old( 'email','') }}" required>
						</div>
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons tech_mobile"></i>
							</span>
							<input id="phone" class="form-control " placeholder="Número telefónico" type="phone" name="phone" value="{{ old( 'phone','') }}"
							 required>
						</div>
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons text_caps-small"></i>
							</span>
							<input id="rut" class="form-control " placeholder="Rut" type="text" name="rut" value="{{ old( 'rut','') }}" required>
						</div>
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons ui-1_lock-circle-open "></i>
							</span>
							<input id="password" type="password" class="form-control " placeholder="Contraseña " name="password" required>

						</div>
						<div class="input-group form-group-no-border input-lg ">
							<span class="input-group-addon ">
								<i class="now-ui-icons ui-1_lock-circle-open "></i>
							</span>
							<input id="password-confirm" type="password" class="form-control " placeholder="Confirmar contraseña " name="password_confirmation"
							 required>

						</div>
					</div>
					<div class="footer text-center ">
						<button type="submit" class="btn btn-primary btn-round btn-lg btn-block ">
							Crear nueva cuenta
						</button>
					</div>
					<div class="pull-left ">
						<h6>

							<a href="{{ route( 'login') }} " class="link ">iniciar sesión</a>
						</h6>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection