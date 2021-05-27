
@include('layouts.headerAlianza')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="card bg-primary" style="border-none">
          <div class="card-body text-center">
                <h3 class="text-white text-center">Editar Articulo</h3>
                <br>
                @foreach ($limpieza as $limpieza)
                <form class="mb-5"action="/catlim/{{$limpieza->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="row mt-3">
                    <div class="col-sm-4 mx-auto">
                        <img src="{{ asset('img/limpieza/'.$limpieza->foto) }}">
                    </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-sm-4 mx-auto">
                        <input type="file" name="foto" class="form-control" value="{{$limpieza->foto}}">
                    </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                            <label class="mx-auto" for="text" >Titulo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto">
                            <input type="text" class="form-control mx-auto" name="titulo"value="{{ $limpieza->titulo}}">
                        </div>
                    </div>
                        <div class="row mt-3">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Descripcion:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto">
                               <textarea name="description" id="" rows="5" class="form-control">{{ $limpieza->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Unidad</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto">
                                <input type="name" class="form-control mx-auto" name="unidad" value="{{ $limpieza->unidad}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                                <label class="mx-auto" for="text" >Precio Unitario:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto text-light">
                                <input type="number" class="form-control mx-auto" name="preciouni" value="{{ $limpieza->preciouni}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text">Rubro:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto text-light text-center">
                            <select name="rubro[]" class="form-control">
                                <option value="{{ $limpieza->rubro}}">{{ $limpieza->rubro}}</option>
                                <option value="Limpieza">Limpieza</option>
                                <option value="Descartables">Descartables</option>
                                <option value="Automovil">Automovil</option>
                                <option value="Baño">Baño</option>
                                <option value="Otros">Otro</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-5 mx-auto text-light text-center">
                                <label class="mx-auto" for="text">Activo:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 mx-auto text-light text-center">
                            <select name="activos[]" class="form-control">
                                    @if($limpieza->activos == 'si')
                                    <option value="si"><i class="bg-success"></i>En Stock</option>
                                    <option value="no"><i class="bg-danger"></i>Sin Stock</option>
                                       @else
                                    <option value="no"><i class="bg-danger"></i>Sin Stock</option>
                                    <option value="si"><i class="bg-success"></i>En Stock</option>
                                   @endif   
                            </select>                             
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-5 mx-auto" style="text-align: center;">
                                <button type="submit" class="btn btn-primary mx-auto"><i class="pe-7s-diamond mr-2"></i>Editar</button>
                            </div>
                        </div>                       
                    </form>
                    @endforeach  
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