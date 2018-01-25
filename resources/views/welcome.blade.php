@extends('layouts.app') 
@section('title','Bienvenido a '. config('app.name')) 
@section('styles')
<style rel="stylesheet">
	/* Header background */
	.header-image {
		background: url("{{ asset('img/bg.jpg') }}");
		height: 100vh;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection
 
@section('header')
<!--Header-->
<header class="header-image">
	<div class="header-content ">
		<div class="row py-3 my-4">
			<!--Left-->
			<div class="col-12 col-lg-4 offset-lg-2 pt-5 text-white text-center">
				<!--Logo-->
				<img class="image-fluid h-50" src="{{ asset('img/header-logo.png') }}" alt="Imagen referencial al logo de la empresa" srcset="">
				<!--Text-->
				<h2 class="h2-responsive">Ven y descansa.</h2>
				<p>Vuelve a la naturaleza.</p>
				<a class="btn btn-social-icon btn-facebook">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="btn btn-social-icon btn-instagram">
					<span class="fa fa-instagram"></span>
				</a>
			</div>
			<!--/.Left-->
			<!--Right-->
			<div class="d-none d-lg-block col-4 offset-1 text-white bg-lochmara h-100 py-4 mt-5 px-5 header-register">
				<!--Header-->
				<div class="text-left">
					<h2>Registrate</h2>
					<p>¡Llena los datos y comienza a disfrutar!</p>
				</div>
				<!--Form-->
				<div class="mt-5 text-center">
					<form  action="{{  url('/register') }}" method="get">
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
			<!--/.Right-->
		</div>
	</div>
</header>
<!--/.Header-->
@endsection
 
@section('content')
<!--Content-->
<main class="my-5">
	<div class="container py-3">
		<!--First row-->
		<div class="row mt-5">
			<div class=" col-lg-8 offset-lg-2 text-center ">
				<h1 class="h1-responsive">¿Buscas un lugar para descansar?</h1>
				<p>Insertas en plena naturaleza, cabañas <em> Doña Juanita </em> te ofrece un amplio lugar de esparcimiento donde podrás
					pasar un gran tiempo con tu familia o amigos.
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
				<img class="img-thumbnail image-fluid" src="{{ asset('img/cabin.jpg') }}" alt="Cabaña">
			</div>
			<div class="col-8 offset-2 offset-lg-0 col-lg-4 mt-lg-5 pt-0 pb-3 p-lg-0 ml-lg-2 text-center text-lg-left">
				<p class="h3 h3-responsive">Cabañas full equipadas para hasta 6 personas.</p>
				<p>
					Cada cabaña cuenta con televisión, Internet, piscina, terraza, quincho y estacionamiento.
				</p>
			</div>
			<div class="col-8 offset-2 order-2 col-lg-4 offset-lg-2 order-lg-1 py-4 mt-lg-5 text-center text-lg-right ">
				<p class="h3 h3-responsive">Disfruta de un ambiente completamente privado.</p>
			</div>
			<div class="col-6 offset-3 order-1 offset-lg-0 col-lg-4 order-lg-2 py-4 p-lg-0">
				<img class="img-thumbnail img-fluid" src="{{ asset( 'img/cabin-outside.jpg') }} " alt="Cabaña ">
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
					@for($i = 0; $i<6; $i++) 
						<div class="col-sm-6 col-md-6 col-lg-3">
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
@include('includes.footer')
<!--/.Footer-->
@endsection

 
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
	baguetteBox.run('.tz-gallery');
</script>
@endsection