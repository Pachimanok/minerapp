@include('layouts.header')

<body>
    <div class="header d-flex" style="background: #F5F5F5;">

        <div class="text-right" style="width:5%;">
            <a href="/home"><i class="fas fa-chevron-left" style="margin-top: 2rem;"></i></a></div>
        <div class="card-header" style="background: #F5F5F5;
            text-align: center;
            width:90%">
            <h3 class="card-title mb-0">Tu Perfil</h3>
        </div>
        <div class="text-left" style="width:5%;"></div>
    </div>

    <div class="card card-profile mt-5 ml-1" style="border:none;">
        <div class="d-flex">
            <div class="col-sm-1 text-left pr-0 text-center">
                <a href="#">
                    <img src="{{ asset('img/avatar/' . $mineros->avatar) }}" style="width: 8rem;"
                        class="rounded-circle img-fluid">
                </a>
            </div>
            <div class="col-sm-10 pl-0">
                <h3 class="text-left pb-0 mt-3">{{ $mineros->name }}</h3>
                <p class="text-left pt-0 m-0" style="height: 1.3rem;"><small>{{ $mineros->email }}</small></p>
                <a href="" style="color:gray"><small> Editar Perfil</small></a>

            </div>
        </div>
        <h2 class="text-left ml-2">Datos de la Cuenta</h2>

        <div class="card" style="border:none; border-radius:10px;">
            <div class="card-body p-2 ml-1 mr-1 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:90%;">
                    <h4 class="ml-2">Alias</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-3"></i>
                </div>
            </div>
            <div class="card-body p-2 ml-1 mr-1 mt-2 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:90%;">
                    <h4 class="ml-2">E-mail</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-3"></i>
                </div>
            </div>
            <div class="card-body p-2 ml-1 mr-1 mt-2 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:90%;">
                    <h4 class="ml-2">Teléfono</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-3"></i>
                </div>
            </div>
            <div class="card-body p-2 ml-1 mr-1 mt-2 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:50%;">
                    <h4 class="ml-2">Contaseña</h4>
                </div>
                <div class="text-right" style="min-width:40%;">
                    <p class="ml-2 mt-1">Restablecer</p>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-2"></i>
                </div>
            </div>
            <h2 class="text-left ml-2 mt-5">Soporte</h2>
            <div class="card-body p-2 ml-1 mr-1 mt-2 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:90%;">
                    <h4 class="ml-2">Privacidad</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-3"></i>
                </div>
            </div>
            <div class="card-body p-2 ml-1 mr-1 mt-2 d-flex " style="background: #F8F8F8;">
                <div class="text-left" style="min-width:90%;">
                    <h4 class="ml-2">Términos y condiciones</h4>
                </div>
                <div class="col-sm-1">
                    <i class="fas fa-chevron-right mt-3"></i>
                </div>
            </div>

        </div>
    </div>
    </div>
    {{-- modal usuario --}}
    <div id="editarPerfil" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content border-warning mt-5 mb-5">
                <div class="modal-body text-center">
                    <h1 class="text-center" style="color: #13538a;">Editar perfil de {{ $mineros->user_name }}!
                    </h1>
                    <form action="/editarPerfil/{{ $mineros->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="pl-lg-4">
                            <div class="col-sm-3 mx-auto">
                                <div>
                                    <!-- this div just for demo display -->
                                    <label class="dropimage"
                                        style="border-radius: 50%;margin: 0 auto;width: 60%;padding-bottom: 60%">
                                        <input id="perfil-upload" title="Drop image or click me" name="avatar"
                                            type="file" value="{{ $mineros->avatar }}">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                [].forEach.call(document.querySelectorAll('.dropimage'), function(img) {
                                    img.onchange = function(e) {
                                        var inputfile = this,
                                            reader = new FileReader();
                                        reader.onloadend = function() {
                                            inputfile.style['background-image'] = 'url(' + reader.result + ')';
                                        }
                                        reader.readAsDataURL(e.target.files[0]);
                                    }
                                });
                            });
                        </script>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Localización:</label>
                                    <input type="localidad" name="localizacion" id="input-email" class="form-control"
                                        placeholder="Mendoza, Argentina" value="{{ $mineros->localizacion }}"
                                        required>
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
                                    <input type="text" id="input-first-name" name="nombre"
                                        value="{{ $mineros->name }}" class="form-control" placeholder="Juan"
                                        required>
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
                                        <input type="number" class="form-control" name="cbu"
                                            value="{{ $mineros->cbu }}" placeholder="0000000000000000000" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">CUIT/DNI</label>
                                        <input type="number" class="form-control" name="cuit"
                                            value="{{ $mineros->cuit }}" placeholder="00000000000" required>
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
                                            <label class="form-control-label" for="input-city">Descripcion
                                                Corta:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $mineros->subtitulo }}" name="subtitulo"
                                                placeholder="Jugador de Tejo - Jovi: Correr descalzo">
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
                                <textarea rows="4" name="acerca"
                                    class="form-control">{{ $mineros->acerca }}</textarea>
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
