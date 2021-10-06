@include('layouts.header')
<body>
<div class="header pb-3">
  <div class="container mt-6">
    <br>
    <div class="card mt-2" style="border:none;">
      <div class="card-body" >
        <h1 class="text-center text-success p-0" style="font-size: -webkit-xxx-large;"><i class="ni ni-check-bold"></i></h1>
        <h2 class="text-success text-center p-0">¡{{$mineros->user_name}} el auto ha sido mindado correctamente!</h2>
        <p class="text-center pb-0 mb-0">Un representante de MIC Brokers se pondrá en contacto con: <strong>{{$auto->nombre }}</strong> para terminar de completar la operacion.</p>      
        <p class="text-center mt-2">Cuándo se cierre podras disfrutar de tu premio!</h6>
        <br>
        <br><div class="row">
            <div class="col-sm-5 mx-auto">
              <a href="/home" class="btn btn-success btn-block" style="border-radius: 50px;">Terminar</a>
              <a class="btn btn-outline-success btn-block" style="border-radius: 50px;" href="/autos/create" target="_blank">Minar otro Auto</a>
            </div>
          </div>
        </div>
        </form>
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