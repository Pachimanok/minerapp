@include('layouts.header')
<body>
@include('layouts.user')
<div class="header bg-primary ">
  <div class="container-fluid">
  <div class="card">
    <div class="card-header">
      @foreach ($mina as $mina)
      <h1 class="text-center">Armar un pedido para: {{$mina->titulo}} </h1>
    </div>
    <div class="card-body pb-5">
      <h3 class="text-center">Direccion: {{$mina->calle}} {{$mina->numero}} @if($mina->calle == 'si') piso: {{$mina->piso}} - Dpto: {{$mina->dpto}}  @endif {{$mina->localidad}} </h3>
      <h3 class="text-center">Contacto: {{$mina->contacto}} Celular: {{$mina->telefono}}</h3>
    </div>
    @endforeach
    <div class="row pb-3">
      <div class="col-sm-3 mx-auto text-center">
        <a  class="btn btn-primary" href="/detpedlim/create">Hacer Pedido</a>
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
