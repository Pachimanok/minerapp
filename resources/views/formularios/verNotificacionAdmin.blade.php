@include('layouts.headerAlianza');
<div class="container pt-5 pb-5">
    <h1 class="text-center pb-5">Informacion sobre Notificacion {{ $notificacion->titulo }}</h1>
    <div class="row">
        
        <p class="fs-3 fw-bold">Titulo: {{ $notificacion->titulo }}</p>
        <p class="fs-3 fw-bold">Destinatario: {{ $notificacion->destinatario }}</p>
        <p class="fs-3 fw-bold">descripcion: {{ $notificacion->descripcion }}</p>
        <p class="fs-3 fw-bold">link: {{ $notificacion->link }}</p>
        <p class="fs-3 fw-bold">estado: {{ $notificacion->estado }}</p>
        <p class="fs-3 fw-bold">tipo: {{ $notificacion->tipo }}</p>
        <p class="fs-3 fw-bold">imagen: {{ $notificacion->imagen }}</p>

        <div class="col mt-3">
        <a href="/notificaciones" class="btn btn-primary">Volver</a>
        </div>
    </div>