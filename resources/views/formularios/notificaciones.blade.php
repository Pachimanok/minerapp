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
                                    <h3 class="text-primary mb-0">Detalles de notificaciones</h3>
                                </div>
                                <div class="col-sm-5  text-center mb-2">
                                    <a href="/notificacion/create" class="col-sm-5 btn btn-primary">Crear
                                        notificacion</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center  table-flush">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col" class="sort" data-sort="name">ID</th>
                                            <th scope="col" class="sort" data-sort="name">Destinatario</th>
                                            <th scope="col" class="sort" data-sort="status">Titulo</th>
                                            <th scope="col" class="sort" data-sort="status">Descripcion</th>
                                            <th scope="col" class="sort" data-sort="status">Estado</th>
                                            <th scope="col" class="sort" data-sort="status">Link</th>
                                            <th scope="col" class="sort" data-sort="status">Tipo</th>
                                            <th scope="col" class="sort" data-sort="status">Creado</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list text-center">

                                        @foreach ($notificaciones as $notificacion)
                                            <tr>
                                                <td>
                                                    <span class="badge text-primary badge-dot mr-4">
                                                        <span class="status">{{ $notificacion->id }}</span>
                                                    </span>
                                                </td>
                                                <td class="budget text-left">
                                                    {{ $notificacion->destinatario }}
                                                </td>
                                                <td class="budget text-left">
                                                    {{ $notificacion->titulo }}
                                                </td>
                                                <td class="budget text-left">
                                                    {{ $notificacion->descripcion }}
                                                </td>
                                                <td class="budget">
                                                    @if ($notificacion->estado == 'leido')
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-success"></i>
                                                            <span class="status text-dark">Leido</span>
                                                        </span>
                                                    @else
                                                        <span class="badge badge-dot mr-4">
                                                            <i class="bg-warning"></i>
                                                            <span class="status text-dark">No leido</span>
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="budget">
                                                    {{ $notificacion->link }}
                                                </td>

                                                <td class="budget">
                                                    {{ $notificacion->tipo }}
                                                </td>
                                                <td class="budget">
                                                  {{ $notificacion->created_at }}
                                              </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-dark" href="#"
                                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item"
                                                                href="notificacion/{{ $notificacion->id }}">Ver</a>
                                                            <a class="dropdown-item"
                                                                href="notificacion{{ $notificacion->id }}/edit">Editar</a>
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
