
@include('layouts.header')
<body>
@include('layouts.user')
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="card" style="border:none !important">
          <div class="card-body text-center">
                <h2 class="text-darktext-center pb-0">Mis Minas</h2>
                <h6 class="text-center text-dark">User:{{ ($mineros->user_name) }}</h6>

                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <a href="/mina/create" class="btn btn-primary" style="border-radius:50px; width:90%">Agregar Mina</a>
                    </div>
                </div>
                <br>
                <ul class="list-group list-group-flush">
                    @foreach ($minas as $mina)
                            <li class="list-group-item text-left pt-0">
                                <div class="row">
                                    <h3 class="pb-0">{{$mina->titulo}} <a href="/mina/{{$mina->id}}/edit"><span class="badge badge-default">Editar</span></a></h3>
                                    <p class="mt-0" style="font-size: small;">Direccion: {{$mina->calle}} {{$mina->numero}} @if($mina->calle == 'si') piso: {{$mina->piso}} - Dpto: {{$mina->dpto}}  @endif <br>{{$mina->localidad}}</p>
                                    <p class="mt-0" style="font-size: small;">Contacto: {{$mina->contacto}} - {{$mina->telefono}}</p>
                            </li>
                    @endforeach
                </ul>
            </div> 
        </div>
      </div>
    </div>

  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
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