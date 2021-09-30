@include('layouts.headerAlianza')
<div class="bg-default">
<div class="container bg-info pt-5 pb-5">
    <h1 class="text-center pb-5 text-decoration-underline">Informacion sobre Notificacion {{ $notificacion->titulo }}</h1>
    <div class="row">
        
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">Titulo: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->titulo }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">Destinatario: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->destinatario }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">descripcion: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->descripcion }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">link: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->link }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">estado: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->estado }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">tipo: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->tipo }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">imagen: </p>
        <p class="fs-4 fw-normal">{{ $notificacion->imagen }}</p>

        <div class="col mt-3">
        <a href="/notificaciones" class="btn btn-success">Volver</a>
        </div>
    </div>
    </div>