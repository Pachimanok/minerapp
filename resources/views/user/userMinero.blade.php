<!-- Navbar links -->
<ul class="navbar-nav align-items-center  ml-md-auto ">
    <li class="nav-item">
        <a href="/home"><img src="{{ asset('/assets/img/android-icon-36x36.png') }}"></a>
    </li>
    <li class="nav-item d-sm-none">
        <a class="nav-link" style="color:white;" href="#" data-action="search-show"
            data-target="#navbar-search-main">
            <i class="ni ni-zoom-split-in"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:white;" href="" data-action="search-show"
            data-target="#navbar-search-main">
            <i class="ni ni-briefcase-24"></i>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" style="color:#13538a;" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
            <!-- Dropdown header -->
            <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Tenes <strong class="text-primary">{{ $qnot }}</strong>
                    notificationes.</h6>
            </div>
            <!-- List group -->
            <div class="list-group list-group-flush">
                @foreach ($not as $notificacion)
                    <a href="{{ $notificacion->link }}" class="list-group-item list-group-item-action" style="padding: 0.2rem 1rem 0.5rem 1rem;">
                        <div class="d-flex align-items-center">
                            <div class="col-auto pr-0 pl-0">
                                <!-- Avatar -->
                                <p class="text-center mb-0"><span
                                        class="position-absolute p-1 align-middle @if ($notificacion->estado == 'no leido')bg-success @endif rounded-circle" style="margin-top: 40%;"></span><i class="@if ($notificacion->tipo == 'educacion')ni ni-book-bookmark @elseif ($notificacion->tipo == 'desafio') ni ni-lock-circle-open @elseif($notificacion->tipo == 'alianza') far fa-handshake @elseif($notificacion->tipo == 'ranking') ni ni-trophy @else ni ni-notification-70 @endif p-3"></i></p>
                            </div>
                            <div class="col ml-2 pl-0" style="width: 80%;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-0 text-truncate">{{ $notificacion->titulo }}</h5>
                                    </div>
                                    <div class="text-right text-muted"
                                        style="width: -webkit-fill-available;font-size: small;">
                                        <small>{{ $notificacion->created_at }}</small>
                                    </div>
                                </div>
                                <div class="text-truncate mb-0" style="font-size:smaller;" >
                                  {{$notificacion->descripcion}}
                                </div>
                            </div>
                        </div>
                        
                    </a>
                @endforeach
            </div>
            <!-- View all -->
            <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" style="color:#13538a;" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-ungroup"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-primary  dropdown-menu-right ">
            <div class="row shortcuts px-4">
                <a href="" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-app"></i>
                    </span>
                    <small class="text-white">MinnerApp</small>
                </a>
                <a href="minerapp" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-basket"></i>
                    </span>
                    <small class="text-white">Alianzas</small>
                </a>
                <a href="alianzas" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-trophy"></i>
                    </span>
                    <small class="text-white">Desafios</small>
                </a>
                <a href="#!" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-money-coins"></i>
                    </span>
                    <small class="text-white">Billetera</small>
                </a>
                <a href="#!" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-book-bookmark"></i>
                    </span>
                    <small class="text-white">Educación</small>
                </a>
                <a href="#!" class="col-4 shortcut-item text-center">
                    <span class="shortcut-media avatar bg-white text-primary rounded-circle">
                        <i class="ni ni-shop"></i>
                    </span>
                    <small class="text-white">Minas</small>
                </a>
            </div>
        </div>
    </li>
</ul>

<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
    <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                    <img src="{{ asset('img/avatar/' . $mineros->avatar) }}" class="rounded-circle">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ $mineros->user_name }} </span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu  dropdown-menu-right ">
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bienevenido!</h6>
            </div>
            <a href="/minero/{{ $mineros->id }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mis Datos</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Configuraciones</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Soporte</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>
