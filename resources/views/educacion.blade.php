
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5 mx-auto">
            @foreach ($educacion as $educacion)
            <div class="card">
              @if($educacion->estado== 'activo')
                <h1 class="text-center text-success pt-4"><i class="fas fa-unlock-alt" style="font-size: 4rem;"></i></h1>
              @else 
                <h1 class="text-center text-success pt-4"><i class="fas fa-lock" style="font-size: 4rem; color:gray;"></i></h1>
              @endif
              <h2 class="text-center" >{{ $educacion->titulo }}</h2>
              {{-- <p class="text-center"> {{ $educacion->descripcion }}</p> --}}
              <h5 class="text-center mb-0">Premio:</h5> 
              <h5 class="text-center">{{ $educacion->premio }}</h5>
              <form action="validar" method="POST">
                @csrf
                <input type="hidden" name="id_educacion" value="{{ $educacion->id }}">
                <div class="row">
                  <div class="col-sm-3 mx-auto text-center mb-4">
                                      @if($educacion->estado== 'activo')
                  
                    <button class="btn btn-primary mx-auto" href="#">Validar</button>
                  
                  @else 
                  <button class="btn btn-primary mx-auto"  href="#" disabled>Validar</button>
                  @endif
                </div>
                </div>
            </form>
            </div>
                @endforeach  

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