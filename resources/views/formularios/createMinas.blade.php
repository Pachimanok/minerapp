@include('layouts.header')

<body>
    <div class="header pb-6">
        <div class="card-header d-flex" style="background: #F5F5F5;
        padding: 1rem;">
            <div class="col-sm-1 text-left" style="max-width: 1rem; margin-top: 0.5rem; padding-left: 0;">
                <a href="{{ url()->previous() }}"><i style="font-size: x-large;" class="fas fa-chevron-left"></i></a>
            </div>
            <div class="col-sm-10 text-center pl-0">
                <h3 class="card-title mb-0">Añadir Mina</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card" style="border:none !important">
                <div class="card-body text-center">
                    <p class="text-center" style="color: #8E8E93;">¿Qué es una Mina? La casa que comprará bienes y
                        servicios a través tuyo. ¡Podés agragar la cantidad de Minas que quieras!
                    </p>
                    <br>
                    <form class="mb-5" action="/mina" method="POST">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto"
                                    style="border-left:none; border-right:none; border-top:none;" name="titulo"
                                    placeholder="Titulo*" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto"
                                    style="border-left:none; border-right:none; border-top:none;" name="codigo"
                                    placeholder="Codigo Postal*" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                                <select name="localidad[]" class="form-control"
                                    style="border-left:none; border-right:none; border-top:none;" required>
                                    <option value="">-.Elegir Localidad.-</option>
                                    @foreach ($localidades as $localidad)
                                        <option value="{{ $localidad->location }}">{{ $localidad->location }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="d-grid gap-2" style="position: fixed;
                        bottom: 3rem;
                        left: 1rem;
                        right: 1rem;">
                            <button type="submit" class="btn btn-primary mt-3 text-white p-3" style="border-radius: 10px;
                            background: #13538a;position: relative;" type="button">Añadir</a>

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
