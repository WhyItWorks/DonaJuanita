<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
	/>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/now-ui-kit.css?v=1.1.0') }}" rel="stylesheet" />

	<!-- If you need it -->
	@yield('styles')
	<!-- Base -->
	<link href="{{ asset('css/base.css') }}" rel="stylesheet" />

</head>

<body class=" @yield('body') ">

	<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="400">
		<div class="container">

			<div class="navbar-translate">

				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ asset('img/leftHorn.png') }}" class="d-inline-block align-top nav__logo"> {{ config('app.name', 'Laravel') }}
					<img src="{{ asset('img/rightHorn.png') }}" class="d-inline-block align-top nav__logo">
				</a>


				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="">
				<ul class="navbar-nav">
					@guest
					<li class="dropdown nav-item">
						<a class="dropdown-toggle nav-link" data-toggle="dropdown">Iniciar sesión
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
							<li>
								<div class="row">
									<div class="col-md-12">
										<form class="form" role="form" method="post" action="{{ route('login') }}" id="login-nav">
											{{ csrf_field() }}
											<div class="form-group">
												<label class="sr-only " for="emailInput ">Correo</label>
												<input type="email" class="form-control " id="email" name="email" placeholder="Correo" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="password">Contraseña</label>
												<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
											</div>
											<div class="checkbox">
												<input id="remember" type="checkbox">
												<label for="remember">
													No cerrar sesión
												</label>
											</div>

											<div class="form-group ">
												<button type="submit" class="btn btn-success w-100">Iniciar sesión</button>
											</div>

										</form>

									</div>
								</div>
							</li>
						</ul>
					</li>

					<li class="nav-item ">
						<a href="{{ route( 'register') }} " class="nav-link ">Registro</a>
					</li>
					@else

					<li class="nav-item dropdown">
						<a class="dropdown-toggle nav-link " data-toggle="dropdown" role="button " aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }}
							<span class="caret "></span>
						</a>


						<ul class="dropdown-menu ">
							<li class="text-center ">
								<a href="{{ route( 'logout') }}" class="nav-link bg-success " onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
									Cerrar sesión
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endguest
					<li class="nav-item ">
						<a class="nav-link " rel="tooltip " title="Danos like en Facebook " data-placement="bottom " href="# " target="_blank ">
							<i class="fa fa-facebook-square "></i>
							<p class="d-lg-none d-xl-none ">Facebook</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " rel="tooltip " title="Siguenos en Instragram " data-placement="bottom " href="# " target="_blank ">
							<i class="fa fa-instagram "></i>
							<p class="d-lg-none d-xl-none ">Instagram</p>
						</a>
					</li>
				</ul>
			</div>
		</div>

	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset( 'js/core/jquery.3.2.1.min.js') }} " type="text/javascript "></script>
	<script src="{{ asset( 'js/core/popper.min.js') }} " type="text/javascript "></script>
	<script src="{{ asset( 'js/core/bootstrap.min.js') }} " type="text/javascript "></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="{{ asset( 'js/plugins/bootstrap-switch.js') }} "></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ asset( 'js/plugins/nouislider.min.js') }} " type="text/javascript "></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="{{ asset( 'js/plugins/bootstrap-datepicker.js') }} " type="text/javascript "></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset( 'js/now-ui-kit.js?v=1.1.0') }} " type="text/javascript "></script>
	<!-- If you need it -->
	@yield('scripts')
	<!-- Base -->
	<script src="{{ asset( 'js/base.js') }} " type="text/javascript "></script>

</body>

</html>