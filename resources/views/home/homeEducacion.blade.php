@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Temas de Educacion:</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Estado</th>
                              <th scope="col" class="sort" data-sort="budget">Titulo</th>
                              <th scope="col" class="sort" data-sort="status">descripcion</th>
                              <th scope="col" class="sort" data-sort="status">Tema</th>
                              <th scope="col" class="sort" data-sort="status">Premio</th>
                              <th scope="col" class="sort" data-sort="status">Link</th>
                              <th scope="col" class="sort" data-sort="status">User</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            @foreach ($educacion as $educacion)
                            <tr>
                              <td>
                                @if($educacion->estado == 'activo')

                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">activo</span>
                                </span>
                                @else
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status">pendiente</span>
                                </span>
                            @endif
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <span class="status">{{ $educacion->titulo}}</span>
                                </span>
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <span class="status">{{ $educacion->descripcion}}</span>
                                </span>
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  
                                  <span class="status">{{ $educacion->tema}}</span>
                                </span>
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                 
                                  <span class="status">{{ $educacion->premio}}</span>
                                </span>
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  
                                  <span class="status">{{ $educacion->link}}</span>
                                </span>
                              </td>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">{{ $educacion->user}}</span>
                                </span>
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="educacion/{{$educacion->id}}/edit">Editar</a>
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
          <div class="row">
            <div class="col-sm-5 mx-auto text-center">
              <a href="/educacion/create" class="btn btn-primary" >Agregar Nuevo Tema</a>
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
    