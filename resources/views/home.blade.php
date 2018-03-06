@extends('layouts.app') 
@section('title', 'Panel de control')
@section('body', 'bg-silver')

@section('navbar-class','navbar-absolute')
@section('content')	

<div class="wrapper">

	<div class="header header-filter" style="background: url( {{asset('img/header-bg.jpg') }} )"></div>
	<div class="container-fluid">
		<div class="py-5 grey lighten-3 main main-raised">
			<div class="container">				
				<!--  Pills  -->				
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Reservas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Historial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
					</li>

				</ul>

				<!--  Pills content  -->
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
				</div>

			</div>
		</div>
	</div>
</div>



@include('includes.footer')
@endsection

