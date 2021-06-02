@include('layouts.headerAlianza')

<body>    
    @include('layouts.user')
    <div class="card card-profile">
        <img src="{{ asset('img/fondo/' . $alianza->fondo) }}" alt="Image placeholder" class="card-img-top" style="max-height: 250px; object-fit: cover;
            object-position: center;">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{ asset('img/avatar/' . $alianza->avatar) }}" class="rounded-circle" style="height: 13rem; width:13rem;     max-width: none;" >
                    </a>
                </div>
            </div>
        </div>
        
            <div class="text-center" style="margin-top: 7rem;">
                <h5 class="h3 pb-0">
                   {{ $alianza->nombre_fantasia }}, <span class="font-weight-light">
                        <small>{{ $alianza->razonSocial }} </small></span>
                </h5>
                <p class="text-center"><strong> CUIT: </strong>{{ $alianza->cuit }} </p>

                
                <p class="text-center"><strong> Mail: </strong>{{ $alianza->email }} </p>
                <p class="text-center"><strong> Celular: </strong>{{ $alianza->celular }} </p>

                

                  <hr>
                  <div class="h5 font-weight-300">
                    {{ $alianza->descripcion }}
                  </div>
                  <div class="h5 font-weight-300">
                    <strong> Rubro:</strong> 
                    {{ $alianza->shipping }}
                  </div>
                      <div class="h5 font-weight-300">
                        <i class="ni ni-delivery-fast mr-2"></i>
                        {{ $alianza->shipping }}
                      </div>
                      <div class="h5 font-weight-300">
                        <i class="ni ni-credit-card mr-2"></i>
                        {{ $alianza->medios_pago}}
                      </div>
                      <br>
                      <div>
                        <a href="{{ $alianza->link_saber_mas }}" class="btn btn-outline-primary">Conocer más</a>
                        <a href="{{ $alianza->pagina_web}}" class="btn btn-outline-primary">Pagina Web</a>
                    </div>
                    <hr>
                    </div>
                 
           
                <div class="col-sm-4 mx-auto mt-3 text-center">
                    <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal"
                        data-bs-target="#editarPerfil">Editar perfil</button>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>

    {{-- modal usuario --}}
    <div id="editarPerfil" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content border-warning mt-5 mb-5">
                <div class="modal-body text-center">
                    <h1 class="text-center text-primary">Editar perfil de {{-- {{ $mineros->user_name }} --}}!</h1>
                    <form action="/editarPerfil/{{-- {{ $mineros->id }} --}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card card-profile">
                            <img src="{{-- {{ asset('img/fondo/' . /* $mineros->fondo */) }} --}}" alt="Image placeholder"
                                class="card-img-top" style="max-height: 250px; object-fit: cover;
                                object-position: center;">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <label for="file-upload" accept="image/*" capture="camera">
                                            <img src="{{-- {{ asset('img/avatar/' . /* $mineros->avatar */) }} --}}"
                                                class="rounded-circle img-fluid">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Imagen Fondo:</label>
                                    <input id="file-upload" type="file" value="{{-- {{ $mineros->fondo }} --}}" name="fondo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Imagen Perfil:</label>
                                    <input id="file-upload" type="file" value="{{-- {{ $mineros->avatar }} --}}" name="avatar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Localización:</label>
                                    <input type="localidad" name="localizacion" id="input-email" class="form-control"
                                        placeholder="Mendoza, Argentina" value="{{-- {{ $mineros->localizacion }} --}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Celular</label>
                                    <input type="number" class="form-control" name="celular"
                                        value="{{-- {{ $mineros->celular }} --}}" placeholder="2610000000" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Nombre</label>
                                    <input type="text" id="input-first-name" name="nombre" value="{{-- {{ $mineros->name }} --}}"
                                        class="form-control" placeholder="Juan" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Apellido</label>
                                    <input type="text" id="input-last-name" name="apellido"
                                        value="{{-- {{ $mineros->lastName }} --}}" class="form-control" placeholder="Perez"
                                        required>
                                </div>
                            </div>
                        </div>
                    
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Información Administrativa</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">CVU/CBU</label>
                                <input type="number" class="form-control" name="cbu" value="{{-- {{ $mineros->cbu }} --}}"
                                    placeholder="0000000000000000000" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">CUIT/DNI</label>
                                <input type="number" class="form-control" name="cuit" value="{{-- {{ $mineros->cuit }} --}}"
                                    placeholder="00000000000" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Acerca de mi:</h6>
                <div class="pl-lg-4">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Descripcion Corta:</label>
                                    <input type="text" class="form-control" value="{{-- {{ $mineros->subtitulo }} --}}"
                                        name="subtitulo" placeholder="Jugador de Tejo - Jovi: Correr descalzo">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Mi frase:</label>
                                    <input type="text" class="form-control" name="frase"
                                        value="{{-- {{ $mineros->frase }} --}}" placeholder=" la pelota no se mancha">
                                </div>
                            </div>
                        </div>
                        <label class="form-control-label">Acerca de mi:</label>
                        <textarea rows="4" name="acerca" class="form-control">{{-- {{ $mineros->acerca }} --}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
 



    </div>
    </div>
    </div>

    <!-- Footer -->
    
    </div>
    </div>
    {{-- bootstrap script --}}

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
