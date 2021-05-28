@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header pb-6">
    <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="card shadow">
                      <div class="card-header bg-transparent border-0">
                        <div class="row">
                          <div class="col-sm-5 text-center">
                        <h3 class="text-primary mb-0">Detalles de Productos</h3>
                        </div>
                        <div class="col-sm-5  text-center mb-2">
                            <a href="/catlim/create" class="col-sm-5 btn btn-primary">Agregar Producto</a>
                            <a href="/limpieza" class="col-sm-5 btn btn-primary">Ver Catalogo</a>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center  table-flush">
                          <thead class="thead-dark">
                            <tr class="text-center"> 
                              <th scope="col" class="sort" data-sort="name">ID</th>
                              <th scope="col" class="sort" data-sort="name">Producto</th>
                              <th scope="col" class="sort" data-sort="status">Descripcion</th>
                              <th scope="col" class="sort" data-sort="status">Unidad</th>
                              <th scope="col" class="sort" data-sort="status">Precio Unidad</th>
                              <th scope="col" class="sort" data-sort="status">Rubro</th>
                              <th scope="col" class="sort" data-sort="status">Estado</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="list text-center">
                            
                            @foreach ($limpieza as $limpieza)
                            <tr>
                              <td>
                                <span class="badge text-primary badge-dot mr-4">
                                  <span class="status">{{ $limpieza->id }}</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../img/limpieza/{{ $limpieza->foto}}">
                                  </a>
                                <div class="media-body">
                                  <span class="name text-dark mb-0 text-sm">{{ $limpieza->titulo}}</span>
                                </div>
                              </th>
                              <td class="budget text-left">
                                {{ $limpieza->description}}
                              </td>
                              
                              <td class="budget">
                                {{ $limpieza->unidad}}
                              </td>
                              <td class="budget">
                               $ {{ $limpieza->preciouni}}
                              </td>
                              <td class="budget">
                                {{ $limpieza->rubro}}
                              </td>
                              <td class="budget">
                                @if($limpieza->activos == 'si')
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status text-dark">En Stock</span>
                                </span>
                                @else
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status text-dark">Sin Stock</span>
                                </span>
                            @endif
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="catlim/{{$limpieza->id}}">Ver</a>
                                    <a class="dropdown-item" href="catlim/{{$limpieza->id}}/edit">Editar</a>
                                    <a class="dropdown-item" href="catlim/{{$limpieza->id}}/destroy">Eliminar</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        
                      </div>
                     
                    </div>
                    
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
    