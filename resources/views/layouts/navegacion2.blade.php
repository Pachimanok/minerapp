<style>
    div.sticky {
        position: sticky;
        bottom: 0;
        position: fixed;
        width: inherit;

    }

</style>
<div class="sticky">
    <ul class="list-group list-group-horizontal text-center bg-white" style="border-width: 2px;
      border-style: solid;
      border-bottom: none;
      border-left: none;
      border-right: none;
      border-color: beige;">
        <li class="list-group-item ml-1" style="width:20%; 
            border:none; 
           ">
            <a href="/home" style="color:#80808080 !important;">
                <i class="fas fa-home" style="font-size: x-large;color:#80808080 !important; margin:0;"></i><br>
                <small>Inicio</small>
            </a>
        </li>
        <li class="list-group-item" style="width:20%; 
            border:none; 
            padding-left: 0; 
            padding-bottom: 0;
            padding-right: 0;">
            <a href="/billetera" style="color:#80808080 !important;">
                <i class="fas fa-wallet" style="font-size: x-large;color:#80808080 !important; margin:0;"></i><br>
                <small>Billetera</small>
            </a>
        </li>
        <li class="list-group-item" style="padding: 0; border:none;"><a href="/minado" class="btn btn-primary btn-lg"
                style="border-radius: 50%;
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
            <a href="/minar">
                <i class="far fa-handshake" style="font-size: x-large;  margin:0;"></i><br>
                <small>Alianzas</small></a>
        </li>
        <li class="list-group-item mr-1"style="width:20%; border:none;padding-bottom: 0;">
            <button type="button" data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"  style="color:#80808080 !important;     background: transparent;
            margin-top: 0;
            padding-right: 1rem;
            padding-left: 0;
            padding-top: 0;"><i style="font-size: x-large; color:#80808080 !important; margin:0;" class="far fa-bell"></i><br>
            <small>Desafíos</small></button>
          </li>
        </ul>
      </div>
      <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height: auto;">
        <div class="offcanvas-header">
          <h6 class="text-sm text-muted m-0">Tenes <strong class="text-primary">{{ $qnot }}</strong>
            notificationes.</h6>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
      </div>