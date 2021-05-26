@include('layouts.header')
<body>
@include('layouts.user')
<div class="header bg-white pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats bg-primary">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto mx-auto">
                    <span class="avatar avatar-lg rounded-circle">
                      <img style="    margin: auto; height: 7rem;width: auto;" alt="Image placeholder" src="{{ asset('img/avatar/' . $mineros->avatar) }}">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-auto mx-auto">
                    <h3 class="card-title text-uppercase text-white mb-0">user:{{$mineros->name}} - <small>{{$mineros->pts}} pts </small></h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-auto mx-auto text-center">
                    <h1 class="display-2 mb-0 p-0 " style="color: #00c2cb;font-size: -webkit-xxx-large;
                    font-weight: 500;">${{$recaudado}}</h1>
                    <small class="text-center text-white">recaudado en el mes.</small>
                  </div>
                </div>
                <a href='/minar' class="btn btn-white col-sm mx-auto mt-5" style="border-radius: 50px; color:#13538a">MINAR</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats bg-primary">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-white mb-0">Educación</h5>
                    <span class="h2 font-weight-bold text-white mb-0">{{$cant_ed}}</span>
                    <small class="text-white">temas desbloqueados</small>
                  </div>
                </div>
                @foreach ($educacion as $educacion)
                <p class="mt-3 mb-0 text-sm text-white">
                 {{ $educacion->titulo}}
                 @if($educacion->estado == 'activo')
                 <i class="fas fa-lock-open" style="color: rgb(26, 223, 26);"></i> <h5 style="color: #00c2cb;">{{ $educacion->premio}}</h5>
                 @else
                    <i class="fas fa-lock-open" style="color:gray;"></i>  <h5 style="color: #00c2cb;">{{ $educacion->premio}}</h5>
                  @endif
                </p>
                @endforeach
               
                <a href="/educacion"class="btn btn-white col-sm mx-auto mt-3" style="border-radius: 50px; color:#13538a;">+ CONTENIDOS</a>

              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats bg-primary">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-white mb-0">MENSAJES</h5>
                    <span class="h2 text-white font-weight-bold mb-0">{{$cant_msj}}</span>
                    <small class="text-white">sin leer</small>
                  </div>
                </div>
                @foreach ($mensaje as $mensaje)
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-white mr-2">{{$mensaje->created_at}}</span>
                  <span class="text-nowrap"><strong>de: {{$mensaje->de}}</strong></span><br>
                  {{$mensaje->titulo}}
                </p>
                <hr class="pl-5 pr-5 m-3">
                @endforeach
                <a href="/mensajes" class="btn btn-white col-sm mx-auto  mt-3" style="border-radius: 50px; color:#13538a"> LEER MAS</a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats bg-primary">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-auto">
                    <h5 class="card-title text-uppercase text-white mb-0">billetera</h5>
                    <h2 style="color: #00c2cb;">$ {{ $cob }}  <small style="color:white">a cobrar</small></h2>
                    <h2 style="color: #00c2cb;">$ {{ $des }} <small style="color:white">desbloquear</small></h2>
                  </div>
                </div>
                <a  href="/billetera" class="btn btn-white col-sm mx-auto  mt-3" style="border-radius: 50px; color:#13538a"> ABRIR BILLETERA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    