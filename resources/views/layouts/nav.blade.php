<div class="container-fluid"
    style="box-shadow: 12px -8px 29px 4px rgb(35 35 35 / 32%);  position: fixed; top: 0; opacity: 1; background: white; z-index: 5;">
    <div class="d-flex bg-white">
        <div class="col-sm-10 text-center">
            <h1>Alianzas</h1>
        </div>
        <div class="col-sm-2 text-right align-center">
            <li class="nav-item dropdown" style="margin-top: 10%;">
                <a class="nav-link" href="#" style="color:#13538a; margin-top: 30%; margin-botton:30%;"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="sticky-sm-button">
            <ul class="list-group list-group-horizontal text-center bg-white">
                <li class="list-group-item ml-1" style="width:20%; border:none;">
                    <a href="/home" style="color:#80808080 !important;">
                        <i class="fas fa-home" style="font-size: x-large; margin:0;"></i><br>
                        <small>Inicio</small>
                    </a>
                </li>
                <li class="list-group-item" style="width:20%; 
                  border:none; 
                  padding-left: 0; 
                  padding-bottom: 0;
                  padding-right: 0;">
                    <a href="" style="">
                        <i class="fas fa-wallet" style="font-size: x-large;"></i><br>
                        <small>Billetera</small>
                    </a>
                </li>
                <li class="list-group-item" style="padding: 0; border:none;"><a href="/minado"
                        class="btn btn-primary btn-lg" style="border-radius: 50%;
                padding: 10% ;
                z-index: 2;
                border-style: solid;
                border-width: 6px;
                border-color: rgba(255, 255, 255, 0);
                margin-top: -33px;
                font-size: xx-large;
                background: #264b8f;"><img src="{{ asset('img/miner-blanco-29.svg') }}"
                            style="width: 3.5rem; max-width:3.5rem;" alt=""></a>
                </li>
                <li class="list-group-item" style="width:20%; 
                  border:none; 
                  padding-right: 0 !important ;
                  padding-bottom: 0;">
                    <a href="/minar" style="color:#80808080 !important;">
                        <i class="far fa-handshake"
                            style="font-size: x-large; color:#80808080 !important; margin:0;"></i><br>
                        <small>Alianzas</small></a>
                </li>
                <li class="list-group-item mr-1" style="width:20%; border:none;padding-bottom: 0;"><a href=""
                        style="color:#80808080 !important;"><i
                            style="font-size: x-large; color:#80808080 !important; margin:0;"
                            class="far fa-bell"></i><br>
                        <small>Avisos</small></a></li>
            </ul>
        </div>
    </div>
</div>
