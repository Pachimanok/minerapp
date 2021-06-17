@include('layouts.header')
<body>
@include('layouts.user')
<div class="header mt-7">
  <div class="container-fluid">
    <div class="card-header mt-5 pt-6 pb-0">
      @foreach ($mina as $mina)
      <h3 class="text-center mt-3 pb-0">Armar un pedido para:</h3>   
      <h2 class="text-center pt-1">{{$mina->titulo}} </h2>   
      <p class="text-center mb-0" >Direccion: {{$mina->calle}} {{$mina->numero}} @if($mina->calle == 'si') piso: {{$mina->piso}} - Dpto: {{$mina->dpto}}  @endif <br>{{$mina->localidad}} </p>
      <p class="text-center ">Contacto: {{$mina->contacto}} Celular: {{$mina->telefono}}</p>
    </div>
    @endforeach
    <div class="row pb-3">
      <div class="col-sm-3 mx-auto text-center">
        <a  class="btn btn-primary btn-block" style="border-radius:50px;"href="/detpedodoliva/create">Hacer Pedido</a>
        <p class="text-success text-center">2 | 5</p>
      </div>
    </div>
  </div>
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
