<script>
    $()['jquery'];
    console.log($().jquery);

</script>
@include('layouts.header')

<body>
    @include('layouts.user')
    <div class="header bg-white mt-6 pb-6 pt-6 mb-6">
        <div class="container-fluid">
            @if ($minas->count() == 0)
            <div class="row text-center p-4" >
              <h3 class="text-primary text-center">Necesitas cargar una Mina para continuar</h3>
              <br>
              <br>
              <a href="/agregarmina/create" class="btn btn-outline-primary" style="border-radius: 50px;">Agregar
                  Mina</a>
                  <br>
                  <p class="text-success text-center mt-3">1 | 5</p>

            </div>
                
            @else
                <div class="row pt-5 ">
                    <form action="/laderas" method="POST">
                        @csrf
                        <div class="col-sm-5 mx-auto text-center">
                            <select type="text" name="mina" class="form-control mb-4">
                                <option value="">-. Elegir mina.-</option>
                                @foreach ($minas as $mina)
                                    <option value="{{ $mina->id }}">{{ $mina->titulo }}</option>
                                @endforeach

                            </select>
                        </div>
                </div>
                <div class="d-grid gap-2 mx-auto">
                    <input type="hidden" name="vista" value="minar">
                    <button type="submit" class="btn btn-primary"
                        style="padding: 10px 30px; border-radius: 50px; background: #1f538a ">Seleccionar</button>

                    </form>
                    <a href="/agregarmina/create" class="btn btn-outline-primary" style="border-radius: 50px;">Agregar
                        Mina</a>
                    <p class="text-success text-center">1 | 5</p>

                </div>


            @endif



        </div>
    </div>

    </div>
    </div>
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
