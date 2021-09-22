@include('layouts.header')

<body>
    <style>
        .modal-backdrop.show {
            opacity: 0;
            z-index:-1;
        }

        i {
            color: #1f538a;
            margin-right: 8px;
        }

    </style>
    <div class="offcanvas offcanvas-start mt-5 ml-2" tabindex="-1" style="height:max-content !important;" tabindex="-1"
        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-white">
            <a href="/home" class="dropdown-item">
                <i class="fas fa-home"></i>
                <span>Inicio</span>
            </a>
            <a href="/perfil" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Tu Perfil</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="fas fa-bullhorn"></i>
                <span>Notificaciones</span>
                <span class="badge rounded-pill bg-success algin-end">{{ $qnot }}</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Ayuda</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
                <i class="fas fa-wallet"></i>
                <span>Mi Billetera</span>
            </a>
            <a href="/minar" class="dropdown-item">
                <i class="far fa-handshake"></i>
                <span>Alianzas</span>
            </a>
            <a href="/minado" class="dropdown-item">
                <i class="far fa-gem"></i>
                <span>Minar</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="fas fa-trophy"></i>
                <span>Desadios y Premios</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
                <i class="far fa-question-circle"></i>
                <span>¿Cómo funciona MinerApp?</span>
            </a>
            <a href="#!" class="dropdown-item">
                <i class="far fa-question-circle"></i>
                <span>¿Cómo gestionar y utilizar minas?</span>
            </a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    @include('layouts.user')
    <div class="container-fluid">
        <div class="header bg-white pb-6">
            <div class="header-body">
                <div class="row mt-5 ml-4 mr-4 text-center"
                    style="height: 5rem; border-radius: 10px; background: #e2f4f5;">
                    <div class="col-sm-4 pl-3 pr-0 mt-3" style="max-width: 33%;">
                        <div class="card text-center" style="background: #e2f4f5; border-style: revert;">
                            <h6>Puntos Miner</h6>
                            <h5 class="pt-0"> {{ $mineros->pts }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-4 pl-1 pr-3 mt-3" style="max-width: 34%;">
                        <a href="/billetera">
                            <div class="card text-center"
                                style="height: 3rem; background: #e2f4f5; border-style: revert;">
                                <h6>Total Recaudado</h6>
                                <h5 class="pt-0"> ${{ $recaudado }} </h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 pl-1 pr-3 mt-3" style="max-width: 33%;">
                        <a href="#">
                            <div class="card text-center"
                                style="height: 3rem; background: #e2f4f5; border-style: revert;">
                                <h6>Total Reetirado</h6>
                                <h5 class="pt-0"> ${{ $recaudado }} </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <h3>Mis familiares y amigos.</h3>
                </div>
                <div class="row row-cols-5  ml-2 mr-2">
                    @foreach ($minas as $mina)
                        <div class="col p-1">
                            <div class="card text-white text-wrap text-center"
                                style="height: 5rem; font-size: smaller; padding-top:23%; background: #1f538a; border-radius: 10px; font-weight: 800;     line-height: 1rem;">
                                {{ $mina->titulo }}
                            </div>
                        </div>
                    @endforeach
                    <div class="col p-2">
                        <div class="card bg-white text-center "
                            style="height: 5rem; border-style: dashed; border-radius: 10px;">

                            <span class="pt-3"><i class="fas fa-plus" style="font-size: xx-large;
                                color: slategrey;"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <h2>Mi Proyecto</h2>
            </div>
            <div class="row">
                <div class="card  ml-3 mr-3" style="height: 6rem; border-radius:10px;width: fit-content; border:none;box-shadow: 1px 8px 19px -7px rgba(0,0,0,0.37);
                    -webkit-box-shadow: 1px 8px 19px -7px rgba(0,0,0,0.37);
                    -moz-box-shadow: 1px 8px 19px -7px rgba(0,0,0,0.37);">
                    <div class="d-flex mt-3 mb-3">
                        <div class="col text-center pt-4">
                            <i class="fas fa-trophy" style="font-size: large; color: #1f538a;"></i>
                        </div>
                        <div class="col-10">
                            <p>¡Ganá Puntos! Para avanzar como Minero, tendrás desafios disponibles cada semana.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <h2>Descubrí empresas</h2>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide ml-2 mr-2" style="height: 8rem;"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="100">
                        <div class="row cols-3">
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row cols-3">
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <h1>Miner</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <h2>conoce más</h2>
        <div class="dropdown-divider"></div>
        <a href="#!" class="dropdown-item">
            <i class="far fa-question-circle"></i>
            <span>¿Cómo funciona MinerApp?</span>
        </a>
        <div class="dropdown-divider"></div>

        <a href="#!" class="dropdown-item">
            <i class="far fa-question-circle"></i>
            <span>¿Cómo gestionar y utilizar minas?</span>
        </a>
    </div>
    @include('layouts.navegacion')
