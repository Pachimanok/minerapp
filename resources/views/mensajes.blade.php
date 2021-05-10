
@include('layouts.header')

<body>
{{-- @include('layouts.nav') --}}
@include('layouts.user')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0">Mensaje:</h3>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="sort" data-sort="name">De:</th>
                      
                      <th scope="col" class="sort" data-sort="status">Asunto</th>
                      <th scope="col">fecha</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Rata de Puerto</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        Comprame puchos
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">21/2/2021</span>
                        </span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Leer</a>
                            <a class="dropdown-item" href="#">Marcar como leido</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Rata de Puerto</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        Comprame puchos
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">21/2/2021</span>
                        </span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Leer</a>
                            <a class="dropdown-item" href="#">Marcar como leido</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Rata de Puerto</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        Comprame puchos
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">21/2/2021</span>
                        </span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Leer</a>
                            <a class="dropdown-item" href="#">Marcar como leido</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Rata de Puerto</span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        Comprame puchos
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">21/2/2021</span>
                        </span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Leer</a>
                            <a class="dropdown-item" href="#">Marcar como leido</a>
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