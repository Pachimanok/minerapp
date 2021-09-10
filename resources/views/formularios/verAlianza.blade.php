@include('layouts.header')

<body>
   
    <div class="header pb-6">
        <div class="card-header" style="background: #F5F5F5; text-align: center; padding: 1.5rem 1rem 1rem;">
            <div class="row">
                <a href="/minado" class="text-left" style="font-size: large; z-index: 5;"><i class="fas fa-chevron-left"></i></a>
                <h3 class="card-title text-center mb-0" style="margin-top: -2.3rem;">{{ $mineral->nombre_fantasia }}</h3>
            </div>
        </div>
        <div class="container-fluid" style="height: 5rem;
      overflow: hidden;
      position: relative;">
            <img src="{{ asset('assets/img/theme/vino.jpg') }}" alt=""
                style=" position:absolute;left: -100%;right: -100%;top: -100%;bottom: -100%;margin: auto;min-height: 100%;min-width: 100%;">
        </div>
        <div class="container">
            <p class="text-center" style="font-size: smaller;
        margin: 2rem 1rem;
        line-height: initial;
        color: #3c3c43b3;">{{ $mineral->descripcion }}</p>
            <div class="d-flex">
                <div class="col-sm-2" style="max-width: 15%;
                text-align: center;
                margin: 0rem 0rem 0rem 1rem; color: #13538a;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-sm-8">
                    <h5 class="pt-0">{{ $mineral->shipping }}</h5>

                </div>
            </div>
            <hr style="margin: 8px;
            height: 0px;
            color: #9fa2a5;">
            <div class="d-flex mt-4">
                <div class="col-sm-2" style="max-width: 15%;
              text-align: center;
              margin: 0rem 0rem 0rem 1rem;  color: #13538a;">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="col-sm-8">
                    <h5 class="pt-0">{{ $mineral->medios_pago }}</h5>

                </div>
            </div>
            <hr style="margin: 8px 8px 0 8px; height: 0px; color: #9fa2a5;">

            <div class="accordion-1">
                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <button class="accordion-button collapsed mt-0 mb-0" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="col-sm-2" style="max-width: 15%; text-align: center; color: #13538a;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="col-sm-8">
                                <h5 class="pt-0 pb-0" style="margin-left: 0.2rem;">Contacto</h5>
                            </div>
                        </button>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text-center"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">WhatsApp: <a
                                    target="_blank"
                                    href="https://api.whatsapp.com/send?phone=54{{ $mineral->celular }}&text=hola,%20soy%20{{ $mineros->user_name }}%20de%20MinerApp">{{ $mineral->celular }}</a>
                            </p>
                            <p class="text-center"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">e-mail: <a
                                    target="_blank"
                                    href="mailto:{{ $mineral->email }}?Subject=Consulta%20{{ $mineros->user_name }}%20MinerApp">{{ $mineral->email }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr style="margin: 8px 8px 0 8px; height: 0px; color: #9fa2a5;">
                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <button class="accordion-button collapsed mt-0 mb-0" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <div class="col-sm-2" style="max-width: 15%; text-align: center; color: #13538a;">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <div class="col-sm-8">
                                <h5 class="pt-0 pb-0" style="margin-left: 0.2rem;">¿Qué hago despues de comprar?
                                </h5>
                            </div>
                        </button>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text-left mt-3"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">
                                {{ $mineral->q_hacer }}</p>

                        </div>
                    </div>
                </div>
                <hr style="margin: 8px 8px 0 8px; height: 0px; color: #9fa2a5;">
                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <button class="accordion-button collapsed mt-0 mb-0" type="button" data-toggle="collapse"
                            data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                            <div class="col-sm-2" style="max-width: 15%; text-align: center; color: #13538a;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="col-sm-8">
                                <h5 class="pt-0 pb-0" style="margin-left: 0.2rem;">Terminos y Condiciones</h5>
                            </div>
                        </button>
                    </div>
                    <div id="collapseTree" class="collapse" aria-labelledby="headingTree"
                        data-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text-left mt-3"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Id voluptates rem, atque aut eveniet ipsum
                                reprehenderit quos laborum fuga, sunt deserunt. Facilis ducimus similique quas? Minus
                                deserunt ipsam praesentium necessitatibus!</p>
                            <p class="text-left mt-3"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Id voluptates rem, atque aut eveniet ipsum
                                reprehenderit quos laborum fuga, sunt deserunt. Facilis ducimus similique quas? Minus
                                deserunt ipsam praesentium necessitatibus!</p>
                            <p class="text-left mt-3"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Id voluptates rem, atque aut eveniet ipsum
                                reprehenderit quos laborum fuga, sunt deserunt. Facilis ducimus similique quas? Minus
                                deserunt ipsam praesentium necessitatibus!</p>
                            <p class="text-left mt-3"
                                style="font-size: smaller; line-height: initial; color: #3c3c43b3;">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Id voluptates rem, atque aut eveniet ipsum
                                reprehenderit quos laborum fuga, sunt deserunt. Facilis ducimus similique quas? Minus
                                deserunt ipsam praesentium necessitatibus!</p>
                        </div>
                    </div>
                </div>
                <div class="custom-control custom-checkbox mt-5 ml-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1" style=" color: #3c3c43b3;">Acepto los <Strong
                            style="color: #13538a;">Términos y condiciones</Strong></label>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" onclick="modal_catalogo()"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#catalogo"
                        class="btn btn-primary mt-3 text-white" style="border-radius: 10px;
            background: #13538a;">Ver Catálogo</a>

                </div>

                <div class="modal fade" id="catalogo" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 style="text-align: center !important;">Catálogo</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            
                            <div class="modal-body p-1">
                               
                                <div class="d-flex">
                                    <div class="col-sm-6 mx-auto d-flex">
                                        <div class="col-sm-6">
                                            <a href="{{ $mineral->link_cat }}"class="btn btn-secondary btn-lg"
                                                style="border-radius: 50%; box-shadow:none !important; color:#13538a;"><i
                                                    class="far fa-paper-plane p-2" style="font-size:1.5rem;"></i></a>
                                            <p><small>Visitar Sitio</small></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <a   href="https://api.whatsapp.com/send?text={{ $mineral->link_cat }}" class="btn btn-secondary btn-lg"
                                                style="border-radius: 50%; box-shadow:none !important; color:#13538a;"><i
                                                    class="fas fa-share-alt p-2" style="font-size:1.5rem;"></i></a>
                                            <p><small>Compartir</small></p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h6 class="text-center">Copiar enlase</h6>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

                                    <!-- Objetivo -->
                                    <div class="input-group mb-3">
                                        <input id="foo" value="{{ $mineral->link_cat }}" class="form-control ml-5 text-center" disabled>
                                        <button class="btn btn-outline-secondary" data-clipboard-target="#foo" ><i class="fas fa-copy"></i></button>
                                      </div>
                                    
                                    
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            
            <script>

                function modal_catalogo(){
                    $("#catalogo").modal('show');
                });
            </script>

            
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
                        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
                        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
            </script>
            <!-- Argon Scripts -->
            <!-- Core -->
            <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
            <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
            <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
            <!-- Optional JS -->
            <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
            <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
            <!-- Argon JS -->
            <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
