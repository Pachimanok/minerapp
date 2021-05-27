<script>
  $()['jquery'];
  console.log($().jquery);
  </script>
@include('layouts.header')
<body>
@include('layouts.user')
<div class="header bg-white mt-6 pb-6 pt-6 mb-6">
  <div class="container-fluid">
    <div class="row pt-5">
      <form action="/limpieza" method="POST">
      @csrf
      <div class="col-sm-5 mx-auto text-center">
        <select  type="text" name="mina" class="form-control mb-4">
          <option value="">Elgir Mina</option>
          <option value="1">Casa Mama</option>
          <option value="2">Casa Papa</option>
          <option value="3">Casa Abuela</option>
        </select>
      </div>
    </div>
    <div class="d-grid gap-2 mx-auto">
      <button type="submit" class="btn btn-primary" style="padding: 10px 30px; border-radius: 50px; background: #1f538a ">Seleccionar</button>
      <a class="btn btn-outline-primary" style="border-radius: 50px;">Agregar Mina</a>
      <p class="text-success text-center">1 | 5</p>

    </div>
    
  </form>
  </div>
</div>
                    
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
