@include('layouts.header')

<body>
    @include('layouts.user')
    <div class="header bg-white pb-6">
        <div class="container-fluid">
            <div class="header-body">

                <div class="row mt-3">
                    <div class="col-sm-4 pl-3 pr-0" style="    max-width: 25%;">
                        <div class="card text-center" style="height: 3rem; background: #e2f4f5; border-style: revert;">
                            <small class="mt-1" style="font-size: smaller;
                           font-weight: 100;
                           "> {{ $mineros->pts }} pts</small>
                            <small style="font-size: small;">Ranking</small>
                        </div>
                    </div>
                    <div class="col-sm-4 pl-1 pr-0" style="    max-width: 25%;">
                        <a href="/mina">
                        <div class="card text-center" style="height: 3rem; background: #e2f4f5; border-style: revert;">
                            <small class="mt-1" style="font-size: smaller;
                          font-weight: 100;
                          "> {{$qminas}}</small>
                            <small style="font-size: small;">Minas</small>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-4 pl-1 pr-0" style="    max-width: 25%;">
                        <div class="card text-center" style="height: 3rem; background: #e2f4f5; border-style: revert;">
                            <small class="mt-1" style="font-size: smaller;
                        font-weight: 100;
                        "> {{ $cant_ed }}</small>
                            <small style="font-size: small;">Temas</small>
                        </div>
                    </div>
                    <div class="col-sm-4 pl-1 pr-3" style="    max-width: 25%;">
                        <a href="/billetera">
                            <div class="card text-center"
                                style="height: 3rem; background: #e2f4f5; border-style: revert;">
                                <small class="mt-1" style="font-size: smaller;
                        font-weight: 100;
                        "> ${{ $recaudado }}</small>
                                <small style="font-size: small;">Recaudado</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href='/minado' class="btn btn-primary col-sm mx-auto  m-3"
                            style="border-radius: 50px; ">MINAR</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href='/minar' class="btn btn-primary col-sm mx-auto  m-3"
                            style="border-radius: 50px; ">ALIANZAS</a>
                    </div>
                </div>
                <div class="card-body" style="
                -webkit-box-shadow: 2px 3px 17px -1px rgb(194 194 194 / 58%);
                -moz-box-shadow: 4px 5px 0px -1px rgba(194,194,194,0.58);
                border-radius: 6%;">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase mb-0">MENSAJES</h5>
                            <span class="h2 text-primary font-weight-bold mb-0">{{ $cant_msj }}</span>
                            <small class="text-primary">sin leer</small>
                        </div>
                    </div>
                    @foreach ($mensaje as $mensaje)
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-white mr-2">{{ $mensaje->created_at }}</span>
                            <span class="text-nowrap"><strong>de:
                                    {{ $mensaje->de }}</strong></span><br>
                            {{ $mensaje->titulo }}
                        </p>
                        <hr class="pl-5 pr-5 m-3">
                    @endforeach
                    <a href="/mensajes" class="btn btn-primary col-sm mx-auto  mt-3" style="border-radius: 50px; "> LEER
                        MAS</a>
                </div>


                <div class="card-body" style="
                                -webkit-box-shadow: 2px 3px 17px -1px rgb(194 194 194 / 58%);
                                -moz-box-shadow: 4px 5px 0px -1px rgba(194,194,194,0.58);
                                border-radius: 6%;">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase mb-0">Educación</h5>
                            <span class="h2 font-weight-bold text-primary mb-0">{{ $cant_ed }}</span>
                            <small class="text-primary">temas desbloqueados</small>
                        </div>
                    </div>
                    @foreach ($educacion as $educacion)
                        <p class="mt-3 mb-0 text-sm text-black">
                            {{ $educacion->titulo }}
                            @if ($educacion->estado == 'activo')
                                <i class="fas fa-lock-open" style="color: rgb(26, 223, 26);"></i>
                                <h5 class="p-0" style="color: #00c2cb;">{{ $educacion->premio }}</h5>
                            @else
                                <i class="fas fa-lock-open" style="color:gray;"></i>
                                <h5 class="p-0" style="color: #00c2cb;">{{ $educacion->premio }}</h5>
                            @endif
                        </p>
                    @endforeach

                    <a href="/educacion" class="btn btn-primary col-sm mx-auto mt-3" style="border-radius: 50px;">+
                        CONTENIDOS</a>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
