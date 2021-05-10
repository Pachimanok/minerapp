
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="card bg-primary" style="border-none">
          <div class="card-body text-center">
                    <h3 class="text-white text-center">Minar Auto</h3>
                    <h6 class="text-center" style="color: #119da4">User:{{ $mineros->name }}</h6>
                    <br>
                    <form class="mb-5"action="/autos" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="col-sm-3 mx-auto">
                                <div>
                                    <label class="dropimage">
                                        <input id="perfil-upload" title="Drop image or click me" name="photo"
                                            type="file">
                                    </label>
                                    <small class="text-white">subir tarjeta verde</small>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                          [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
                            img.onchange = function(e){
                              var inputfile = this, reader = new FileReader();
                              reader.onloadend = function(){
                                inputfile.style['background-image'] = 'url('+reader.result+')';
                              }
                              reader.readAsDataURL(e.target.files[0]);
                            }
                          });
                        });
                          </script>
                        <div class="row mt-3">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Año</label>
                            </div>
                            <div class="col-sm-5 mx-auto">
                                <input type="name" class="form-control mx-auto" name="ano" placeholder="2021">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Ciudad</label>
                            </div>
                            <div class="col-sm-5 mx-auto">
                                <input type="name" class="form-control mx-auto" name="ciudad" placeholder="Mendoza">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Nombre:</label>
                            </div>
                            <div class="col-sm-5 mx-auto text-light">
                                <input type="name" class="form-control mx-auto" name="nombre" placeholder="Juan Díaz">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text">Documento:</label>
                            </div>
                            <div class="col-sm-5 mx-auto">
                                <input type="number" class="form-control mx-auto" name="dni"  placeholder="28987453">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text" >WhatsApp:</label>
                            </div>
                            <div class="col-sm-5 mx-auto">
                                <input type="number" class="form-control mx-auto" name="phone"  placeholder="5492612128105">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text" >E-mail:</label>
                            </div>
                            <div class="col-sm-5 mx-auto">
                                <input type="email" class="form-control mx-auto" name="email"  placeholder="nombre@miner.app">
                                <input hidden class="form-control mx-auto" name="user"  value="{{ $mineros->name }}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-5 mx-auto" style="text-align: center;">
                                <button type="submit" class="btn btn-primary mx-auto"><i class="pe-7s-diamond mr-2"></i>Minar</button>
                            </div>
                        </div>                             
                    </form>
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