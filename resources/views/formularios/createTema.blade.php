
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="card bg-primary" style="border-none">
          <div class="card-body text-center">
                <h3 class="text-white text-center">Crear Tema</h3>
                    
                <form class="mb-5" action="/educacion" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="row mt-3">
                            <div class="col-sm-2 mx-auto" >
                                <select name="estado[]"  class="form-control" id="">
                                    <option value="">-.Elegir Estado.-</option>
                                    <option value="activo">Activo</option>
                                    <option value="pendiente">Pendiente</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Título</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto">
                                <input type="name" class="form-control mx-auto" name="titulo" placeholder="Responsabilidad, tu compromiso con la Sociedad">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Descripcion:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light">
                                <textarea name="descripcion" rows="5" class="form-control" placeholder="Pequeña descripción o Introduccion del tema que se tocará"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text">Tema:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto" name="tema"  placeholder="Responsabilidad">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text" >Link:</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto">
                                <input type="text" class="form-control mx-auto" name="link"  placeholder="https://classroom.google.com/u/0/c/Mjg4NjYwNzEwNjQ">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-5 mx-auto" style="text-align: center;">
                                <button type="submit" class="btn btn-primary btn-lg mx-auto">Cargar</button>
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