@include('layouts.header')
<body>
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
              <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                  <h3 class="text-white text-center mb-0">Validacion</h3>
                </div>
                @foreach ($educacion as $educacion)
                <h2 class="text-white text-center"> {{ $educacion->titulo }}</h2>
                <p class="text-white text-center">{{ $educacion->descripcion }}</p>
               <div class="col-sm-3 text-center mx-auto">
                    <a class="btn btn-primary mx-auto" href="{{ $educacion->link }}" target="_blank">Desbloquear {{ $educacion->premio }}</a>
                </div>
                @endforeach
                <div class="card-body">
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