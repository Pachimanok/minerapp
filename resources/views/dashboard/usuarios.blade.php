@include('layouts.headerAlianza')

<!-- Sidebar -->
<div class="container">
    <h1>Administrador</h1>
</div>

<div class="table-responsive">
    <div>
        <table class="table align-items-center table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Nombre</th>
                    <th scope="col" class="sort">Email</th>
                    <th scope="col" class="sort">Role</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($users as $user)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="name mb-0 text-sm">$name</span>
                            </div>
                        </div>
                    </th>
                    <td>
                        $email
                    </td>
                    <td>
                        $role
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Editar</a>
                                <a class="dropdown-item" href="#">Ver</a>
                                <a class="dropdown-item" href="#">Eliminar</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>

    <!-- Scripts -->
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
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
</body>

</html>