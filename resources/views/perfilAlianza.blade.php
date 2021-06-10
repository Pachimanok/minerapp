@include('layouts.headerAlianza')

<body>
    @include('layouts.user')
    <div class="card card-profile">
        <img src="{{ asset('img/fondo/fondo.png') }}" alt="Image placeholder" class="card-img-top" style="max-height: 250px; object-fit: cover;
            object-position: center;">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{ asset('img/avatar/' . $alianza->avatar) }}" class="rounded-circle"
                            style="height: 13rem; width:13rem;     max-width: none;">
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
                {{ $alianza->medios_pago }}
            </div>
            <br>
            <div>
                <a href="{{ $alianza->link_saber_mas }}" class="btn btn-outline-primary">Conocer más</a>
                <a href="{{ $alianza->pagina_web }}" class="btn btn-outline-primary">Pagina Web</a>
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
                    <h1 class="text-center text-primary">Editar perfil de {{ $alianza->nombre_fantasia }}!</h1>
                    <form action="/alianza/{{ $alianza->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card card-profile">
                            <img src="{{ asset('img/fondo/fondo.png') }}" alt="Image placeholder"
                                class="card-img-top" style="max-height: 250px; object-fit: cover;
                                object-position: center;">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="{{ asset('img/avatar/' . $alianza->avatar) }}"
                                                class="rounded-circle"
                                                style="height: 13rem; width:13rem;     max-width: none;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row mt-5 pt-5">
                                <div class="col-sm-5 mx-auto">
                                    <div class="form-group">
                                        <label class="form-control-label text-center" for="input-address">Imagen
                                            Perfil:</label>
                                        <input id="file-upload" type="file" value="{{ $alianza->avatar }}"
                                            name="avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Razon Social:</label>
                                        <input type="localidad" name="razonSocial" class="form-control"
                                            placeholder="Empresa SAS" value="{{ $alianza->razonSocial }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">CUIT</label>
                                        <input type="number" class="form-control" name="cuit"
                                            value="{{ $alianza->cuit }}" placeholder="3089998870" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Shipping:</label>
                                        <input type="text" name="shipping" value="{{ $alianza->shipping }}"
                                            class="form-control" placeholder="Gran Mendoza" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Medios de Pago:</label>
                                        <input type="text" name="medios_pago" value="{{ $alianza->medios_pago }}"
                                            class="form-control" placeholder="Transferencia, efectivo, Mercado Pago"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4 text-center">Configuracion Botones:</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-address">Saber más:</label>
                                            <input type="text" class="form-control" name="link_saber_mas"
                                                value="{{ $alianza->link_saber_mas }}"
                                                placeholder="https://empresa.com/quienes_somos" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">CHome Web</label>
                                            <input type="text" class="form-control" name="pagina_web"
                                                value="{{ $alianza->pagina_web }}" placeholder="https://empresa.com"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Description -->
                            <h6 class="heading-small text-center text-muted mb-4">Acerca de la Alianza:</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Descripcion
                                                Corta:</label>
                                            <input type="text" class="form-control"
                                                value="{{ $alianza->descripcion }}" name="descripcion"
                                                placeholder="Nos gusta el arte, por eso vendemos cuadros.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Rubro:</label>
                                            <input type="text" class="form-control" name="rubro"
                                                value="{{ $alianza->rubro }}"
                                                placeholder="Articulos de Libreria">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Link Video:</label>
                                        <input type="text" class="form-control" value="{{ $alianza->video }}"
                                            name="video" placeholder="https://empresa.com/video.mp4">
                                    </div>
                                </div>
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
