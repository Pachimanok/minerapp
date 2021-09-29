@include('layouts.header')
<body>
    @include('layouts.barralateral')
    @include('layouts.user')
    <div class="container-fluid" style="margin-top: 8rem !important;">
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
                <div class="d-flex mt-3">
                    <div class="col-sm-6">
                        <h2 style="color:black;">Minas</h2>
                    </div>
                    <div class="col-sm-6 text-right  pt-1">
                        <a href="" class="mt-3">
                            <h6 style="
                            font-size: initial;
                        " class="align-middle"></h6>
                        </a>
                    </div>
                </div>
                <div class="row row-cols-5  ml-2 mr-2">
                    @foreach ($minas as $mina)
                        <div class="col p-1">
                            <div class="card text-white text-center bg-success" style="
                                width: 66px;
                                height: 66px;
                                border-radius: 10px;
                                border: none;
                                margin: 0px 3px;">
                                <img src="{{ asset('img/miner-blanco-29.svg') }}" alt="">
                            </div>
                            <p class="text-success" style="font-size: x-small;
                            font-weight: 800;
                            text-align: center;
                            "> {{ $mina->titulo }}</p>
                        </div>
                    @endforeach
                    <div class="col p-1">
                        <a href="/mina/create" class="card text-suceess text-center" style="
                        width: 66px;
                        height: 66px;
                        border-radius: 10px;
                        border-style: dashed;
                        border-color: slategrey !important;
                        border-width: 2px;
                        margin: 0px 3px;
                        padding-top: 25%;">
                            <i class="fas fa-plus" style="font-size: xx-large;
                        color: slategrey; margin-right: 0;"></i>
                        </a>


                    </div>
                </div>
            </div>
            <div class="d-flex mt-3">
                <div class="col-sm-6">
                    <h2 style="color:black;">Mi Proyecto</h2>
                </div>
                <div class="col-sm-6 text-right  pt-1">
                    <a href="" class="mt-3">
                        <h6 style="
                        font-size: initial;
                    " class="align-middle">ver desafíos</h6>
                    </a>
                </div>
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
            <div class="d-flex mt-3">
                <div class="col-sm-8">
                    <h2 style="color:black;">Descubrí empresas</h2>
                </div>
                <div class="col-sm-4 text-right  pt-1" style="width: 35%;">
                    <a href="/minar" class="mt-3">
                        <h6 style="
                        font-size: initial;
                    " class="align-middle">ver todas</h6>
                    </a>
                </div>
            </div>
            <div class="row row-cols-3">
                @foreach ($alianza as $alianza)
                    <div class="col-sm-4">
                        <a href="alianza/{{ $alianza->id }}">
                            <div class="card" style="border:none;">
                                <img src="{{ asset('/img/avatar/' . $alianza->avatar) }}" style="object-fit: cover;  width: 180px;
                                height: 50px;" alt="" class="img-fluid">
                                <h5 style="padding:0; margin-top:5px;">{{ $alianza->nombre_fantasia }}</h5>
                                <h6>{{ $alianza->rubro }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex mt-3">
                <div class="col-sm-8">
                    <h2 style="color:black;">Conocé más</h2>
                </div>
                <div class="col-sm-4 text-right  pt-1" style="width: 35%;">
                    <a href="/minar" class="mt-3">
                        <h6 style="
                        font-size: initial;
                    " class="align-middle"></h6>
                    </a>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
                <i class="far fa-question-circle"></i>
                <span>¿Cómo funciona MinerApp?</span>
            </a>
            <div class="dropdown-divider"></div>

            <a href="#!" class="dropdown-item mb-5">
                <i class="far fa-question-circle"></i>
                <span>¿Cómo gestionar y utilizar minas?</span>
            </a>
        </div>
        @include('layouts.navegacion')
