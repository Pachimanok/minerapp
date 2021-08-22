@include('layouts.headerAlianza')

<body>
    {{-- @include('layouts.nav') --}}
    @include('layouts.user')
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="card" style="border-none">
                <div class="card-body text-center">
                    <h3 class="text-darktext-center">Crear notificacion:</h3>
                    <br>
                    <form class="mb-5" action="/notificacion" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-5 mx-auto">
                            <div class="row mt-3">
                                <div class="col-sm-5 text-dark text-left" style="text-align:center;">
                                    <label class="text-left" for="text">Destinatario</label>
                                    <input type="text" class="form-control" name="destinatario"
                                        placeholder="zorro78" required>
                                </div>
                                <div class="col-sm-5 text-light text-center">
                                    <label class="text-dark text-left" for="text">Tipo:</label>
                                    <select name="tipo[]" class="form-control" style="height: 3rem;" required>
                                        <option value="">Elegir tipo</option>
                                        <option value="Educación">Educación</option>
                                        <option value="Desafio">Desafio</option>
                                        <option value="Aviso">Aviso</option>
                                        <option value="Alianzas">Alianzas</option>
                                        <option value="Comunidad">Comunidad</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-sm-5 mx-auto text-light text-left" style="text-align:center;">
                                <label class="mx-auto text-dark" for="text">Titulo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto" name="titulo"
                                    placeholder="Compren puchos no sean ratas!" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-5 mx-auto text-light text-left" style="text-align:center;">
                                <label class="mx-auto text-dark" for="text">Descripcion:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto">
                                <textarea name="description" id="" rows="5" class="form-control"
                                    placeholder="Para lavar el piso o desteñirse el pantalon" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-left" style="text-align:center;">
                                <label class="mx-auto text-dark text-left" for="text">Link</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto">
                                <input type="name" class="form-control mx-auto" name="link"
                                    placeholder="https://alianza.com.ar/promoMineral" required>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>



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
