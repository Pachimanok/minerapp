<script>
  $()['jquery'];
  console.log($().jquery);
  </script>
@include('layouts.headerAlianza')

<body>
@include('layouts.user')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="row">
      
      @foreach ($limpieza as $limpieza)
      <div class="col-sm-4 order-sm-2">
        <div class="card card-profile" style="border-radius: 50px;">
          <div class="col-sm-1  mx-auto text-center mt-2">
            <img src="../img/limpieza/{{ $limpieza->foto }}" style="border-radius: 50px; max-height: 150px; max-width: 150px;" alt="Image placeholder"
            class="" >
          </div>
          <div class="card-body ">
            <div class="row" >
              <h3 class="text-center mb-0">{{ $limpieza->titulo }}</h3>
            </div>
            <div class="row mb-0">
              <p class="text-center">{{ $limpieza->description }}</p>
            </div>
            <div class="row mb-0">
              <h1 class="text-center">$ {{ $limpieza->preciouni }} <small style="color: gray;">/ {{ $limpieza->unidad }}</small></p>
            </div>
            <div class="row mb-0">
              <p class="text-center mb-0">Rubro: {{ $limpieza->rubro }}</p>
            </div>
            <div class="row">
              <span class="badge badge-dot mr-4">
                <i class="bg-success"></i>
                <span class="text-success">En Stock</span>
              </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
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
