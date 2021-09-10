<div class="container-fluid fixed-top " style="box-shadow: 12px -8px 29px 4px rgb(35 35 35 / 32%);">
    <div class="d-flex">
        <div class="col-sm-10 text-center">
            <h1>Alianzas</h1>
        </div>
        <div class="col-sm-2 text-right align-center">
            <li class="nav-item dropdown" style="margin-top: 10%;">
                <a class="nav-link" href="#" style="color:#13538a; margin-top: 30%; margin-botton:30%;" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                        <h6 class="text-sm text-muted m-0">Tenes <strong
                                class="text-primary">{{ $qnot }}</strong> notificationes.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                        @foreach ($not as $notificacion)
                            <a href="{{ $notificacion->link }}" class="list-group-item list-group-item-action">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <img alt="Image placeholder"
                                            src="../assets/img/theme/{{ $notificacion->imagen }}"
                                            class="avatar rounded-circle">
                                    </div>
                                    <div class="col ml-2">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="mb-0 text-sm">{{ $notificacion->titulo }}</h4>
                                            </div>
                                            <div class="text-right text-muted">
                                                <small>{{ $notificacion->created_at }}</small>
                                            </div>
                                        </div>
                                        <p class="text-sm mb-0">{{ $notificacion->descripcion }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                </div>
            </li>
        </div>
    </div>
</div>
