@if($user->role == 'admin')

@extends('dashboard.homeAdmin')

@section('contenido')
<div class="container pt-5 pb-5">
    <h1 class="text-center pb-5">Informacion sobre el Minero {{ $minero->user_name }}</h1>
    <div class="row">
        
        <p class="fs-3 fw-bold">Nombre de Usuario: {{ $minero->user_name }}</p>
        <p class="fs-3 fw-bold">Nombre: {{ $minero->name }}</p>
        <p class="fs-3 fw-bold">Apellido: {{ $minero->lastName }}</p>
        <p class="fs-3 fw-bold">Celular: {{ $minero->celular }}</p>
        <p class="fs-3 fw-bold">CBU: {{ $minero->cbu }}</p>
        <p class="fs-3 fw-bold">Cuit: {{ $minero->cuit }}</p>
        <p class="fs-3 fw-bold">Subtitulo: {{ $minero->subtitulo }}</p>
        <p class="fs-3 fw-bold">Frase: {{ $minero->frase }}</p>
        <p class="fs-3 fw-bold">Acerca de: {{ $minero->acerca }}</p>
        <p class="fs-3 fw-bold">Puntos: {{ $minero->pts }}</p>
        <p class="fs-3 fw-bold">Edad: {{ $minero->edad }}</p>
        <p class="fs-3 fw-bold">Localización: {{ $minero->localizacion }}</p>
        <p class="fs-3 fw-bold">Grado: {{ $minero->grado }}</p>
        <p class="fs-3 fw-bold">Nombre de Usuario del Amigo: {{ $minero->user_amigo }}</p>
        <p class="fs-3 fw-bold">Avatar: {{ $minero->avatar }}</p>
        <p class="fs-3 fw-bold">Fondo: {{ $minero->fondo }}</p>
        <p class="fs-3 fw-bold">Estado: {{ $minero->estado }}</p>
        
        <div class="col mt-3">
        <a href="/dashboard/minero" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection

@else

@include('home')

@endif