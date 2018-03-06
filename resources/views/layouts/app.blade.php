<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }}">
<head>
	<meta charset="utf-8"> {{--
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
	<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!--           STYLES           -->
	<!-- Font Awesome -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
	<!-- toast alerts -->
	<link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/base.css') }}" rel="stylesheet" />
	<!-- If you need more -->
	@yield('styles')
</head>
<body class="@yield('body')">
	@yield('header')
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark @yield('navbar-class')">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
					<img src="../Img/leftHorn.png" class="d-inline-block align-top nav-logo" alt="Imagen referencial al logo de la empresa">  {{ config('app.name') }}
					<img src="../Img/rightHorn.png" class="d-inline-block align-top nav-logo" alt="Imagen referencial al logo de la empresa">
				</a>
			<button class="navbar-toggler collapsed lead" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					@auth        
					<div class="d-none d-sm-inline-block">Hola, {{ Auth::user()->first_name }}.</div>
					@endauth        
					<i class="fas fa-angle-double-down"></i>   
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav text-center ml-auto">
					@guest
					<li class="nav-item">
						<a href="{{ route( 'login') }}" class="nav-link waves-effect waves-light">Iniciar sesión</a>
					</li>
					<li class="nav-item">
						<a href="{{ route( 'register') }}" class="nav-link waves-effect waves-light">Registro</a>
					</li>
					@else
					<li class="nav-item d-none d-lg-block text-white">
						<div class="btn-group">
							<a class="dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Hola, {{ Auth::user()->first_name }}.
									<i class="fas fa-angle-double-down ml-2"></i>                                    
								</a>
							<div class="dropdown-menu dropdown-menu-right mt-4 text-center">
								<a class="dropdown-item" href="#">Perfil</a>
								<a class="dropdown-item" href="{{ route('home') }}">Panel de control</a>
								<div class="dropdown-divider"></div>
								<a href="{{ route( 'logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
											Cerrar sesión
									</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</div>
						</div>
					</li>
					<!-- Navbar Collapse items -->
					<div class="d-lg-none">
						<li class="nav-item btn-group mb-2 d-block d-sm-none white-text">
							¡Hola, {{ Auth::user()->first_name }}!
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Perfil</a>
						</li>
						<li class="nav-item btn-group mx-auto">
							<a href="{{ route( 'logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
								Cerrar sesión
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</a>
						</li>
					</div>
					<!-- /.Navbar Collapse items -->
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!--/.Navbar-->
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
	<script src="{{ asset('js/base.js') }} " type="text/javascript "></script>
	<!-- If you need more -->
	@yield('scripts')
</body>
</html>