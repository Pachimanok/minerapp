@include('layouts.headerAlianza')    
    <body>
    @include('layouts.user') 
  <div class="header pb-6">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card t shadow">
            <div class="card-header  text-center bg-transparent border-0">
              <h3 class="text-dark mb-0">Nuevos Pedidos</h3>
            </div>
            <div class="table-responsive">
                        <table class="table align-items-center  table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col" class="sort" data-sort="status">Horario Envio</th>
                              <th scope="col" class="sort" data-sort="status">Modo de Pago</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                            @foreach ($pedidos as $pedido)
                            <tbody class="list">
                              @if($pedido->estado == 'confirmado')
                              <tr>
                                <td class="budget">{{$pedido->updated_at}}
                              </td>
                              <td class="budget">{{$pedido->minero}}
                              </td>
                              
                              <td class="budget">
                                {{$pedido->localidad}}
                              </td>
                              <td class="budget">
                                {{$pedido->horario_envio}}
                              </td>
                              <td class="budget">
                                {{$pedido->modo_pago}}
                              </td>
                              
                              <td class="budget">
                                {{$pedido->total}}
                              </td>
                              <td class="text-right">
                                <div class="dropdown">
                                  <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Cambiar Status</a>
                                    <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                  </div>
                                </div>
                              </td> 
                              @endif
                            </tr>
                          </tbody>
                          @endforeach 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card  shadow">
                      <div class="card-header text-center bg-transparent border-0">
                        <h3 class="text-dark mb-0">Pedidos para entregar</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center  table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col" class="sort" data-sort="status">Horario Envio</th>
                              <th scope="col" class="sort" data-sort="status">Modo de Pago</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          @foreach ($pedidos as $pedido)
                          <tbody class="list">
                            @if($pedido->estado == 'para entregar')
                            <tr>
                              <td class="budget">{{$pedido->updated_at}}
                            </td>
                            <td class="budget">{{$pedido->minero}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->localidad}}
                            </td>
                            <td class="budget">
                              {{$pedido->horario_envio}}
                            </td>
                            <td class="budget">
                              {{$pedido->modo_pago}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->total}}
                            </td>
                            <td class="text-right">
                              <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                  <a class="dropdown-item" href="#">Ver</a>
                                  <a class="dropdown-item" href="#">Cambiar Status</a>
                                  <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                </div>
                              </div>
                            </td> 
                            @endif
                          </tr>
                        </tbody>
                        @endforeach 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card  shadow">
                      <div class="card-header text-center bg-transparent border-0">
                        <h3 class="text-dark mb-0">Para FeedBack</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center  table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col" class="sort" data-sort="status">Horario Envio</th>
                              <th scope="col" class="sort" data-sort="status">Modo de Pago</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          @foreach ($pedidos as $pedido)
                          <tbody class="list">
                            @if($pedido->estado == 'entregado')
                            <tr>
                              <td class="budget">{{$pedido->updated_at}}
                            </td>
                            <td class="budget">{{$pedido->minero}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->localidad}}
                            </td>
                            <td class="budget">
                              {{$pedido->horario_envio}}
                            </td>
                            <td class="budget">
                              {{$pedido->modo_pago}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->total}}
                            </td>
                            <td class="text-right">
                              <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                  <a class="dropdown-item" href="#">Ver</a>
                                  <a class="dropdown-item" href="#">Enviar Encuesta</a>
                                  <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                </div>
                              </div>
                            </td> 
                            @endif
                          </tr>
                        </tbody>
                        @endforeach 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="card  shadow">
                      <div class="card-header text-center bg-transparent border-0">
                        <h3 class="text-dark mb-0">A liquidar</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table align-items-center  table-flush">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col" class="sort" data-sort="name">Fecha</th>
                              <th scope="col" class="sort" data-sort="budget">Minero</th>
                              <th scope="col" class="sort" data-sort="status">Localizacion</th>
                              <th scope="col" class="sort" data-sort="status">Horario Envio</th>
                              <th scope="col" class="sort" data-sort="status">Modo de Pago</th>
                              <th scope="col">Total</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          @foreach ($pedidos as $pedido)
                          <tbody class="list">
                            @if($pedido->estado == 'para liquidar')
                            <tr>
                              <td class="budget">{{$pedido->updated_at}}
                            </td>
                            <td class="budget">{{$pedido->minero}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->localidad}}
                            </td>
                            <td class="budget">
                              {{$pedido->horario_envio}}
                            </td>
                            <td class="budget">
                              {{$pedido->modo_pago}}
                            </td>
                            
                            <td class="budget">
                              {{$pedido->total}}
                            </td>
                            <td class="text-right">
                              <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                  <a class="dropdown-item" href="#">Ver</a>
                                  <a class="dropdown-item" href="#">Liquidar</a>
                                  <a class="dropdown-item" href="#">Enviar Mensaje a minero</a>
                                </div>
                              </div>
                            </td> 
                            @endif
                          </tr>
                        </tbody>
                        @endforeach 
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
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
    