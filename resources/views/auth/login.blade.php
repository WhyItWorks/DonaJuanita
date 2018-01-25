@extends('layouts.app') @section('body','login-page sidebar-collapse') @section('content')

<div class="page-header">
	<div class="page-header-image" style="background-image:url( {{ asset('img/login.jpg') }} )"></div>
	<div class="container">

		<div class="col-md-4 content-center">
			<div class="card card-login card-plain">
				<form class="form-horizontal" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					<div class="content">
						<div class="input-group form-group-no-border input-lg">
							<span class="input-group-addon">
								<i class="now-ui-icons ui-1_email-85"></i>
							</span>
							<input id="email" class="form-control" placeholder="Email" type="email" name="email" required>
						</div>
						<div class="input-group form-group-no-border input-lg">
							<span class="input-group-addon">
								<i class="now-ui-icons ui-1_lock-circle-open"></i>
							</span>
							<input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
						</div>
					</div>
					<div class="pull-right ">
						<h6>
							<input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Recuérdame
						</h6>
					</div>
					<div class="footer text-center">
						<button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
							Iniciar sesión
						</button>
					</div>
					<div class="pull-left">
						<h6>
							<a href="{{ route('register') }}" class="link">Crear nueva cuenta</a>
						</h6>
					</div>
				</form>
			</div>
		</div>


	</div>
</div>

@endsection