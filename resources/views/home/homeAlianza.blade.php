@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Nuevos Pedidos</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">12-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">Pachiman</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $1600,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">13-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">RataDePuerto</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Bombal, Godoy Cruz
                              </td>
                              
                              <td class="budget">
                                $500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status">10-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">SotoBoche</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $3500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Pedidos para entregar</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">12-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">Pachiman</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $1600,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">13-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">RataDePuerto</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Bombal, Godoy Cruz
                              </td>
                              
                              <td class="budget">
                                $500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status">10-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">SotoBoche</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $3500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Historial</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">12-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">Pachiman</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $1600,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-success"></i>
                                  <span class="status">13-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">RataDePuerto</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Bombal, Godoy Cruz
                              </td>
                              
                              <td class="budget">
                                $500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i>
                                  <span class="status">10-4-2021</span>
                                </span>
                              </td>
                              <th scope="row">
                                <div class="media align-items-center">
                                  <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                  </a>
                                  <div class="media-body">
                                    <span class="name mb-0 text-sm">SotoBoche</span>
                                  </div>
                                </div>
                              </th>
                              <td class="budget">
                                Chacras de Coria, Lujan
                              </td>
                              
                              <td class="budget">
                                $3500,00
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
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
    