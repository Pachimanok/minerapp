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
      <form action="/limpieza" method="POST">
      @csrf
      <div class="col-sm-5 mx-auto text-center">
        <select type="text" name="mina" class="form-control mb-4">
          <option value="">Elgir Mina</option>
          <option value="1">Casa Mama</option>
          <option value="2">Casa Papa</option>
          <option value="3">Casa Abuela</option>
        </select>
        <button  style="color: white">agregar mina</button>
      </div>
    </div>
 
    <div class="row">
      <div class="col-sm-3 mx-auto text-center">
        <button type="submit" class="btn btn-primary btn-block mt-3">Selccionar</button>
      </div>
    </div>
    </div>
  </form>
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
