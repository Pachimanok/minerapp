<!-- Navbar links -->
<h2>Hola, Pachiman</h2>   
<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
    
    <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
        <div class="px-3 py-3">
            <h6 class="text-sm text-muted m-0">Tenes <strong class="text-primary">{{ $qnot }}</strong>
                notificationes.</h6>
        </div>
        <div class="list-group list-group-flush">
            @foreach ($not as $notificacion)
                <a href="{{ $notificacion->link }}" class="list-group-item list-group-item-action"
                    style="padding: 0.2rem 1rem 0.5rem 1rem;">
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
                            <div class="text-truncate mb-0" style="font-size:smaller;">
                                {{ $notificacion->descripcion }}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
    </div>
    <li class="nav-item dropdown">
        <a class="nav-link pr-0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle position-relative">
                    <img src="{{ asset('img/avatar/' . $mineros->avatar) }}" class="rounded-circle">
                    <span
                        class="position-absolute top-100 start-0 translate-middle badge rounded-pill bg-success">{{ $qnot }}</span>
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

