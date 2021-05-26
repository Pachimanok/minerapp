
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
            @foreach ($minerales as $mineral)
            <div class="col-xl-4 order-xl-2">
              <div class="card card-profile">
                <img src="../img/avatar/{{ $mineral->avatar }}" alt="Image placeholder" class="card-img-top">
                <div class="card-header text-center border-0 pt-4 pt-md-4 pb-0 pb-md-4">
                  <div class="d-flex justify-content-between">
                    <a href="{{ $mineral->link_catalogo }}" target="_blank" class="btn btn-sm btn-info  mr-4 ">Cátalogo</a>
                    <a href="{{ $mineral->link_minar }}" class="btn btn-sm btn-default float-right">Minar</a>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                          <span class="heading">{{ $mineral->comision }}%</span>
                          <span class="description">Comisión</span>
                        </div>
                        <div>
                          <span class="heading">{{ $mineral->rubro }}</span>
                          <span class="description">Rubro</span>
                        </div>
                        <div>
                          <span class="heading">3</span>
                          <span class="description">Desafios</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="h3">
                       {{ $mineral->nombre_fantasia }}<span class="font-weight-light">,{{ $mineral->subrubro}}</span>
                    </h5>
                    <div class="h5 font-weight-300">
                      <i class="ni ni-delivery-fast mr-2"></i>
                      {{ $mineral->shipping }}
                    </div>
                    <div class="h5 font-weight-300">
                      <i class="ni ni-credit-card mr-2"></i>
                      {{ $mineral->medios_pago}}
                    </div>
                    <div class="h5 mt-4 mb-3">
                      <i class="ni ni-cart mr-2"></i>{{ $mineral->datos_pedir }}
                    </div>
                    <div>
                      <a href="{{ $mineral->link_saber_mas }}" class="btn btn-outline-primary"><i class="ni education_hat mr-2"></i>Saber mas de nuestra aliaza</a>
                    </div>
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
  {{-- bootstrap script --}}

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