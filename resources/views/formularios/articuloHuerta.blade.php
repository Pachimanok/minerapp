
@if($user->role == 'minero')
@include('layouts.header')      
<body>
@include('layouts.user') 
<div class="header pb-6" >
@else
@include('layouts.headerAlianza')    
<body>
@include('layouts.user') 
<div class="header pb-6" >

@endif
      <div class="container-fluid">
        <div class="card bg-white" style="border:none">
          <div class="card-body text-center">
            @foreach ($articulo as $articulo)
                <h1 class="text-primary text-center">{{$articulo->titulo}}</h1>
                    <div class="pl-lg-4">
                        <div class="col-sm-3 mx-auto">
                            <div>
                                <img src="../img/huerta/{{ $articulo->foto}}" alt="error en foto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <h4 class="text-center">{{ $articulo->description}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                            <h1 class="text-center text-dark">$ {{ $articulo->preciouni}} <small style="color: gray;">/{{ $articulo->unidad}}</small></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                            <h3 class="text-center" style="color: gray;">Rubro: {{ $articulo->rubro}}</h3>
                        </div>
                    </div>
                    <div class="row">
                             @if($articulo->activos == 'si')
                                <span class="badge badge-dot">
                                  <i class="bg-success"></i>
                                  <span class="status text-success">En Stock</span>
                                </span>
                                @else
                                <span class="badge badge-dot">
                                  <i class="bg-warning"></i>
                                  <span class="status text-warning">Sin Stock</span>
                                </span>
                            @endif
                    </div>
                    @endforeach
                </div>
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