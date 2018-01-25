<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!--           STYLES           -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
	<!-- toast alerts -->
	<link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
	<!-- Bootstrap social gh -->
	<link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/base.css') }}" rel="stylesheet" />
	<!-- If you need more -->
	@yield('styles')
</head>
<body class="  @yield('body') ">
	@yield('header')
	<!--Navbar-->
	<nav class="principal_nav navbar navbar-expand-lg scrolling-navbar sticky-top @yield('navbar-color','bg-cinder navbar-dark')">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
					<img src="../Img/leftHorn.png" class="d-inline-block align-top nav__logo" alt="Imagen referencial al logo de la empresa">  {{ config('app.name') }}
					<img src="../Img/rightHorn.png" class="d-inline-block align-top nav__logo" alt="Imagen referencial al logo de la empresa">
				</a>
			<button class="principal-navbar-button navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto text-center">
					<li class="nav-item active">
						<a class="nav-link waves-effect waves-light" href="#">Inicio
								<span class="sr-only">(current)</span>
							</a>
					</li>
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light" href="#">Sobre nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light" href="#">Contactanos</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto  text-center">
					@guest
					<li class="nav-item">
						<a type="button" class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modalLogin">Iniciar sesión</a>
					</li>
					{{--
					<li id="login-md" class="nav-item ">
						<a href="{{ route( 'login') }} " class="nav-link waves-effect waves-light ">Iniciar sesión</a>
					</li> --}}
					<li class="nav-item ">
						<a href="{{ route( 'register') }} " class="nav-link waves-effect waves-light">Registro</a>
					</li>
					@else
					<li class="nav-item btn-group mr-auto ml-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button " aria-expanded="false"
						 aria-haspopup="true">
								{{ Auth::user()->name }}
								<span class="caret "></span>
							</a>
						<div class="dropdown-menu dropdown-primary " aria-labelledby="navbarDropdownMenuLink">
							<a href="{{ route( 'logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
									Cerrar sesión
								</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!--/.Navbar-->
	<!--Login Modal-->
	<div class="modal fade bg-lochmara" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog cascading-modal modal-sm" role="document">
			<div class="modal-content">
				<!--Body-->
				<div class="modal-body text-center mb-1">
					<h2 class="mt-1 mb-2">Inicia sesión</h2>
					<br>
					<form id="login-form" role="form" method="post" action="{{ route( 'login') }} ">
						{{ csrf_field() }}
						<div class="md-form ">
							<input id="email" type="email" class="form-control ml-0 text-center" type="text" name="email" required>
							<label for="email" class="ml-0">Correo</label>
						</div>
						<div class="md-form ">
							<input id="password" type="password" class="form-control ml-0 text-center" type="text" name="password" required>
							<label for="password" class="ml-0">Contraseña</label>
						</div>
						<div class="text-center ">
							<button type="submit" class="btn bg-tenne waves-effect waves-light">Ingresar
								<i class="fa fa-sign-in ml-1 "></i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--/.Login Modal-->
	@yield('content')

	


	<!--           SCRIPTS           -->
	<!-- JQuery -->
	<script type="text/javascript " src="js/jquery-3.2.1.min.js "></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript " src="js/popper.min.js "></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript " src="js/bootstrap.min.js "></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript " src="js/mdb.min.js "></script>
	<!-- Jquery toast -->
	<script type="text/javascript " src="js/jquery.toast.js "></script>
	<!-- Custom JS -->
	<script src="{{ asset( 'js/base.js') }} " type="text/javascript "></script> 
	<!-- If you need more -->
	@yield('scripts')
</body>
</html>