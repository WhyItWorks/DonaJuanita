<footer class="container-fluid blue-grey lighten-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1 pt-2 pt-lg-5 mb-5 mb-lg-0">
                    <div class="col-12 mt-lg-5">
                        <h2 class="h2-responsive">Siguenos en nuestras redes sociales.</h2>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-social-icon btn-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a class="btn btn-social-icon btn-instagram">
                            <span class="fa fa-instagram"></span>
                        </a>                        
                    </div>
                    <div class="col-12 mt-5">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
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
                            <button type="submit" class="btn green waves-effect waves-light">Enviar<i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>	
        </div>
        <div class="row pt-3 bg-dark white-text text-center">
                <div class="col-12">				
                    <img src="../Img/leftHorn.png" class="d-inline-block align-top nav__logo" alt="Imagen referencial al logo de la empresa">  {{ config('app.name') }}
                    <img src="../Img/rightHorn.png" class="d-inline-block align-top nav__logo" alt="Imagen referencial al logo de la empresa">				
                </div>
                <p class="ml-auto my-4 pr-3">
                    <i class="fa fa-copyright" aria-hidden="true"></i> - Doña Juanita 2017
                </p>
            </div>
    </footer>