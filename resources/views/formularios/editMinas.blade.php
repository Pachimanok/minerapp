@include('layouts.header')
<body>
@include('layouts.user')
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="card" style="border:none !important">
                <div class="card-body text-center">
                    <h3 class="text-darktext-center">Crear Nueva Mina</h3>
                    <h6 class="text-center text-dark">User:{{ $mineros->user_name }}</h6>
                    <br>
                    <form class="mb-5" action="/mina/{{ $mina->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto" name="titulo"
                                    value="{{ $mina->titulo }}" required>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto" name="calle"
                                    value="{{ $mina->calle }}" required>
                            </div>
                        </div>
                        <div class="row text-center mb-1">
                            <input type="text"
                                style="width: 25%; padding:2%; margin-right: 0px !important;margin-left: 6% !important;"
                                class="form-control mx-auto" name="nro" value="{{ $mina->numero }}" required>
                            <input type="text"
                                style="width: 25%; padding:2%;  margin-right: 0px !important;margin-left: 6% !important;"
                            class="form-control mx-auto" name="piso" @if ($mina->piso == null) placeholder="Piso" @else value="{{ $mina->piso }}@endif " >
                            <input type="text" style="width: 25%; padding:2%; margin-right: 0px !important; margin-left: 6% !important;" class="form-control mx-auto" name="dpto" 
                              @if ($mina->dpto==null) placeholder="Dpto"
                        @else
                            value="{{ $mina->dpto }}"@endif  >

                            </div>
                            <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                            <input type="text" class="form-control mx-auto"
                            name="referencia" value="{{ $mina->referencia }}" >
                            </div>
                            </div>
                            <div class="row mb-1">
                            <div class="col-sm-5 mx-auto">
                            <select name="localidad[]" class="form-control">
                            <option
                            value="{{ $mina->localidad }}">{{ $mina->localidad }}</option>
                            @foreach ($localidades as $localidad)
                                <option
                                value="{{ $localidad->location }}">{{ $localidad->location }}</option> 
                            @endforeach
                                </select>

                        </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-5 mx-auto">
                        <input type="text" class="form-control mx-auto" name="contacto"
                            value="{{ $mina->contacto }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-5 mx-auto">
                        <input type="number" class="form-control mx-auto" name="telefono"
                            value="{{ $mina->telefono }}">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-5 mx-auto">
                        <input type="email" class="form-control mx-auto" name="mail" value="{{ $mina->mail }}">
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-sm-5 mx-auto">
                        <textarea name="description" id="" rows="5" class="form-control"
                            placeholder="Algún comentario">{{ $mina->observaciones }}"</textarea>
                    </div>
                </div>

                <br>
                <div class="row mb-1">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit" class="btn btn-primary mx-auto"></i>Editar</button>
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