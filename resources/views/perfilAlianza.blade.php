@include('layouts.header')

<body>
    {{-- @include('layouts.nav') --}}
    @include('layouts.user')
    <div class="card card-profile">
        <img src="{{ asset('img/fondo/' . $alianza->fondo) }}" alt="Image placeholder" class="card-img-top" style="max-height: 250px; object-fit: cover;
            object-position: center;">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{ asset('img/avatar/' . $mineros->avatar) }}" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Celular</a>
                <a href="#" class="btn btn-sm btn-default float-right">Mensaje</a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                            <span class="heading">{{ $mineros->pts }}</span>
                            <span class="description">puntos</span>
                        </div>
                        <div>
                            <span class="heading">5°</span>
                            <span class="description">Ranking</span>
                        </div>
                        <div>
                            <span class="heading">{{ $mineros->grado }}°</span>
                            <span class="description">Grado Miner</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h5 class="h3">
                    {{ $mineros->name }} {{ $mineros->lastName }}<span class="font-weight-light">,
                        {{ $mineros->edad }}</span>
                </h5>
                <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i>{{ $mineros->localizacion }}
                </div>
                <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>{{ $mineros->subtitulo }}
                </div>
                <div>
                    <i class="ni education_hat mr-2"></i>"{{ $mineros->frase }}"
                </div>
                <div class="col-sm-3 mx-auto mt-3">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#editarPerfil">Editar perfil</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal usuario --}}
    <div id="editarPerfil" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content border-warning mt-5 mb-5">
                <div class="modal-body text-center">
                    <h1 class="text-center text-primary">Editar perfil de {{ $mineros->user_name }}!</h1>
                    <form action="/editarPerfil/{{ $mineros->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card card-profile">
                            <img src="{{ asset('img/fondo/' . $mineros->fondo) }}" alt="Image placeholder"
                                class="card-img-top" style="max-height: 250px; object-fit: cover;
                                object-position: center;">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <label for="file-upload" accept="image/*" capture="camera">
                                            <img src="{{ asset('img/avatar/' . $mineros->avatar) }}"
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
                                    <input id="file-upload" type="file" value="{{ $mineros->fondo }}" name="fondo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Imagen Perfil:</label>
                                    <input id="file-upload" type="file" value="{{ $mineros->avatar }}" name="avatar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Localización:</label>
                                    <input type="localidad" name="localizacion" id="input-email" class="form-control"
                                        placeholder="Mendoza, Argentina" value="{{ $mineros->localizacion }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address">Celular</label>
                                    <input type="number" class="form-control" name="celular"
                                        value="{{ $mineros->celular }}" placeholder="2610000000" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Nombre</label>
                                    <input type="text" id="input-first-name" name="nombre" value="{{ $mineros->name }}"
                                        class="form-control" placeholder="Juan" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Apellido</label>
                                    <input type="text" id="input-last-name" name="apellido"
                                        value="{{ $mineros->lastName }}" class="form-control" placeholder="Perez"
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
                                <input type="number" class="form-control" name="cbu" value="{{ $mineros->cbu }}"
                                    placeholder="0000000000000000000" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">CUIT/DNI</label>
                                <input type="number" class="form-control" name="cuit" value="{{ $mineros->cuit }}"
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
                                    <input type="text" class="form-control" value="{{ $mineros->subtitulo }}"
                                        name="subtitulo" placeholder="Jugador de Tejo - Jovi: Correr descalzo">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Mi frase:</label>
                                    <input type="text" class="form-control" name="frase"
                                        value="{{ $mineros->frase }}"" placeholder=" la pelota no se mancha">
                                </div>
                            </div>
                        </div>
                        <label class="form-control-label">Acerca de mi:</label>
                        <textarea rows="4" name="acerca" class="form-control">{{ $mineros->acerca }}</textarea>
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
    <footer class="footer  bg-dark ">
        <h5 class="text-light text-center">MinerApp :: un minero en cada casa</h5>
    </footer>
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
