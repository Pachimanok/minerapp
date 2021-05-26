<script>
  $()['jquery'];
  console.log($().jquery);
  </script>
@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="row pt-5">
      <form action="/detpedlim" method="POST">
      @csrf
        @foreach ($rubros as $rubro)
        <p>
          <button class="btn btn-primary btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample{{$rubro->id}}" aria-expanded="false" aria-controls="multiCollapseExample{{$rubro->id}}">{{$rubro->rubro}}</button>
          <div class="collapse multi-collapse" id="multiCollapseExample{{$rubro->id}}">
            <div class="card card-body">
              <ul class="list-group list-group-flush">
                @foreach ($articulos as $articulo)

                @if($articulo->rubro == $rubro->rubro)
                  <li class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto ">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="{{ asset('img/limpieza/' . $articulo->foto) }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">{{$articulo->titulo}}</h4>
                          </div>
                        </div>
                        <p class="text-sm mt-0 mb-0">{{$articulo->description}}</p>
                        <p class="text-sm mt-0 mb-0">${{$articulo->preciouni}}</p>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="col-sm-5 text-center mx-auto">
                          <div class="form-group mt-2   mb-0">
                            <label class="custom-toggle">
                              <input type="checkbox" name="articulo[]" value="{{$articulo->id}}">
                              <span class="custom-toggle-slider rounded-circle" ></span>
                            </label>
                        </div>
                      </div>
                    </div>
                  </div>
                    </li>
                    @endif
                @endforeach
              </ul>
            </div>
          </div>
          @endforeach
        </p>
        
        <input type="hidden" name="pedido" value="{{ $pedido->id }}" >
        <div class="row">
          <div class="col-sm-3 mx-auto text-center">
            <button class="btn btn-primary btn-block mt-3 bg-white text-dark">Hacer Pedido</button>
          </div>
        </div>
    </form>
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

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
</body>

</html>
