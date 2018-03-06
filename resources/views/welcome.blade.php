@extends('layouts.app') 
@section('title','Bienvenido a '. config('app.name'))
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection
@section('header')
<!--Header-->
<header class="full-bg-img" style="background: url( {{ asset('img/bg.jpg') }} )">
	<div class="header-content">
		<div class="row py-3 my-4">
			<!--Left-->
			<div class="col-12 @guest col-lg-4 offset-lg-2 @endguest pt-5 text-white text-center">
				<!--Logo-->
				<img class="image-fluid h-50" src="{{ asset('img/header-logo.png') }}" alt="Imagen referencial al logo de la empresa" srcset="">
				<!--Text-->
				<h2 class="h2-responsive">Ven y descansa.</h2>
				<p>Vuelve a la naturaleza.</p>
				<a href="#" class="text-white">
					<i class="fab fa-facebook-square fa-3x mr-2"></i>
				</a>
				<a href="#" class="text-white">
					<i class="fab fa-instagram fa-3x"></i>
				</a>
			</div>
			<!--/.Left-->
			<!--Right-->
			@guest
			<div class="col-4 offset-1 d-none d-lg-block h-100 py-4 mt-5 px-5 text-white bg-royalBlue box-shadow">
				<!--Header-->
				<div class="text-left">
					<h2>Registrate</h2>
					<p>¡Llena los datos y comienza a disfrutar!</p>
				</div>
				<!--Form-->
				<div class="mt-5 text-center">
					<form action="{{ url('/register') }}" method="get">
						<div class="md-form form-sm ">
							<input id="email-register" name="email" type="email" class="form-control text-right">
							<label for="email-register">Correo</label>
						</div>
						<div class="md-form form-sm ">
							<input id="name" name="name" type="text" class="form-control text-right">
							<label for="name">Nombre</label>
						</div>
						<div class="md-form form-sm ">
							<input id="phone" name="phone" type="text" class="form-control text-right">
							<label for="phone">Número teléfonico</label>
						</div>
						<button type="submit" class="btn bg-tenne waves-effect">Únete a nosotros</button>
					</form>
				</div>
			</div>
			@endguest
			<!--/.Right-->
		</div>
	</div>
</header>
<!--/.Header-->
<!--Navbar-->
@section('navbar-class','scrolling-navbar sticky-top bg-codGrey')
<!--/.Navbar-->
@endsection @section('content')
<!--Content-->
<main class="my-5">
	<div class="container py-3">
		<!--First row-->
		<div class="row mt-5">
			<div class=" col-lg-8 offset-lg-2 text-center ">
				<h1 class="h1-responsive">¿Buscas un lugar para descansar?</h1>
				<p>Insertas en plena naturaleza, cabañas
					<em> Doña Juanita </em> te ofrece un amplio lugar de esparcimiento donde podrás pasar un gran tiempo con tu familia o amigos.
				</p>
			</div>
		</div>
		<!--/.First row-->
		<div class="col-2 offset-5 py-3">
			<hr class="purple">
		</div>
		<!--Second row-->
		<div class="row my-5">
			<!--row header-->
			<div class="col-12 text-center">
				<h2 class="h2-responsive">Respira profundo y descansa.</h2>
			</div>
			<!--row content-->
			<div class="col-6 offset-3 col-lg-4 offset-lg-2 py-4">
				<img class="img-thumbnail image-fluid box-shadow" src="{{ asset('img/cabin.jpg') }}" alt="Cabaña">
			</div>
			<div class="col-8 offset-2 offset-lg-0 col-lg-4 mt-lg-5 pt-0 pb-3 p-lg-0 ml-lg-2 text-center text-lg-left">
				<p class="h3 h3-responsive">Cabañas completamente equipadas para 6 personas.</p>
				<p>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, eius!
				</p>
			</div>
			<div class="col-8 offset-2 order-2 col-lg-4 offset-lg-2 order-lg-1 py-4 mt-lg-5 text-center text-lg-right ">
				<p class="h3 h3-responsive">Disfruta de un ambiente completamente privado.</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eaque commodi deleniti, dicta nesciunt esse.
				</p>
			</div>
			<div class="col-6 offset-3 order-1 offset-lg-0 col-lg-4 order-lg-2 py-4 p-lg-0">
				<img class="img-thumbnail img-fluid box-shadow" src="{{ asset( 'img/cabin-outside.jpg') }} " alt="Cabaña ">
			</div>
		</div>
		<!--/.Second row-->
		<div class="col-2 offset-5 my-5">
			<hr class="orange ">
		</div>
		<!--Third row-->
		<div class="container gallery-container text-center mt-5">
			<h1>Galería</h1>
			<p>Da un pequeño vistazo</p>
			<div class="tz-gallery">
				<div class="row">
					@for($i = 0; $i
					<6; $i++) <div class="col-sm-6 col-md-6 col-lg-3">
						<a class="lightbox" href="{{ asset('img/default.gif') }}">
							<img class="img-fluid" src="{{ asset('img/default.gif') }}" alt="Park">
						</a>
				</div>
				@endfor
			</div>
		</div>
	</div>
	<!--/.Third row-->
	</div>
</main>
<!--/.Content-->
<!--Footer-->
<div class="container-fluid blue-grey lighten-5 px-5">
	<div class="row text-center">
		<div class="col-12 col-lg-6 order-2 order-lg-1 pt-2 pt-lg-5 mb-5 mb-lg-0">
			<div class="col-12 mt-lg-5">
				<h2 class="h2-responsive">Siguenos en nuestras redes sociales.</h2>
			</div>
			<div class="col-12">
				<a href="#" class="black-text">
					<i class="fab fa-facebook-square fa-3x mr-2"></i>
				</a>
				<a href="#" class="black-text">
					<i class="fab fa-instagram fa-3x"></i>
				</a>
			</div>
			<div class="col-12 mt-5">
				<i class="fas fa-map-marker-alt fa-2x"></i>
				<p>
					Calle 21 de mayo #2795 Olmué, Valparaiso, Chile
				</p>
			</div>
			<div class="col-12 mt-5">
				<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
				<p>
					+56 9 8310 2470
				</p>
			</div>

		</div>
		<div class="col-12 col-lg-6 order-1 order-lg-2 border border-dark rounded my-5 py-2">
			<h2 class="h2-responsive">Contactanos</h2>
			<p>¿Tienes dudas o deseas hablar con nosotros?</p>
			<form id="email-form" role="form" method="post" action="{{ route('home') }} ">
				{{ csrf_field() }}
				<div class="md-form ">
					<input id="email-2" type="email" class="form-control ml-0 text-center" name="email" required>
					<label for="email-2" class="ml-0">Correo</label>
				</div>
				<div class="md-form ">
					<input id="subjet" type="text" class="form-control ml-0 text-center" name="subjet" required>
					<label for="subjet" class="ml-0">Asunto</label>
				</div>
				<div class="md-form ">
					<textarea id="emailBody" type="text" class="form-control md-textarea" name="emailBody" required></textarea>
					<label for="emailBody" class="ml-0">Mensaje</label>
				</div>
				<div class="text-center">
					<button type="submit" class="btn green waves-effect waves-light">Enviar
						<i class="far fa-paper-plane ml-1"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@include('includes.footer')
<!--/.Footer-->
@endsection 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
	baguetteBox.run('.tz-gallery');
</script>
@endsection
