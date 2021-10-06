
@include('layouts.header')
<body>
    
    <div class="header pb-6">
        <div class="card-header d-flex fixed-top" style="background: #F5F5F5;
        padding: 1rem;">
            <div class="col-sm-1 text-left" style="max-width: 1rem; margin-top: 0.5rem; padding-left: 0;">
                <a href="{{ url()->previous() }}"><i style="font-size: x-large;" class="fas fa-chevron-left"></i></a>
            </div>
            <div class="col-sm-10 text-center pl-0">
                <h3 class="card-title mb-0">Minar Auto</h3>
            </div>
        </div>
    <div class="header pb-2">
      <div class="container-fluid">
        <div class="card mt-5" style="border:none">
          <div class="card-body text-center mt-5">
                    <form action="/autos" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pl-lg-4"> 
                            <div class="col-sm-3 mx-auto">
                                <div>
                                    <label class="dropimage">
                                        <input id="perfil-upload" title="Drop image or click me" name="photo"
                                        type="file" required>
                                    </label>
                                    <small class="text-dark">subir tarjeta verde</small>
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
                        <input type="number" name="ano" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="año [2021] * " required>
                        <input type="text" name="ciudad" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="Ciudad* " required>
                        <input type="text" name="nombre" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="Nombre y Apellido* " required>
                        <input type="number" name="dni" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="DNI* " required>
                        <input type="phone" name="phone" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="WhatsApp* " required>
                        <input type="email" name="email" style="padding-left: 1.4rem; border-left:none; border-top:none; border-right:none;"class="form-control" placeholder="e-mail* " required>
                        <input hidden class="form-control mx-auto" name="user"  value="{{ $mineros->name }}">

                        <div class="row mt-5">
                            <div class="col-sm-5 mx-auto" style="text-align: center;">
                                <button type="submit" class="btn btn-primary mx-auto pt-2 pb-2" style="width: 90%; border-radius: 50px; background: #13538a;"><i class="ni ni-diamond mr-2"></i>Minar</button>
                            </div>
                        </div>                             
                    </form>
                </div>
            </div> 
        </div>
      </div>
    </div>

      <!-- Footer -->
     
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