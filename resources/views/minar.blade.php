
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row mt-1"> 
            @foreach ($minerales as $mineral)
            <li class="list-group-item">
              <div class="row align-items-center">
                  <div class="col-auto text-center ml-2 pl-0" style="width: 25%;">
                      
                      <img alt="Image placeholder"
                          src="{{ asset('/img/avatar/' . $mineral->avatar) }}"
                          class="img-fluid" style="border-radius:20px; min-height: 3.5rem;">
                  </div>
                  <div class="col-auto" style="width: 50%;">
                              <h4 class="mb-0 text-sm pb-0">{{ $mineral->nombre_fantasia }} <small></small></h4>
                              <p class="text-sm mt-0 mb-0" style="line-height: 10px;"><small>{{ $mineral->rubro}}</small></p>
                              <a href="{{-- alianza/{{ $mineral->id}} --}}" ><span class="badge badge-primary" disabled>saber +</span></a>
                              <a href="{{ $mineral->link_catalogo }}" target="{{$mineral->pagblank}}"><span class="badge badge-primary">catalogo</span></a>
                  </div>
                  <div class="col-auto" style="width: 20%;">
                    <a href="{{ $mineral->link_minar }}" class="btn btn-sm btn-default float-right"><i class="ni ni-diamond"></i></a>
                </div>
              </div>
          </li>
            @endforeach

<div class="row text-center mt-5">
  <div class="col-sm-5 mx-auto">
    <a href="" class="btn btn-primary" style="border-radius: 50px;">Recomendar Alianza</a>
  </div></div>

        </div>
      </div>
    </div>

      <!-- Footer -->
     
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