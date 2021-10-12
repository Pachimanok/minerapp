@if($user->role == 'admin')

@extends('dashboard.homeAdmin')

@section('contenido')
<div class="bg-secondary">
    <div class="container pb-5">
        <h1 class="text-dark">Edición de Minero  </h1>

        <div class="row">
            <form action="/dashboard/minero/{{ $minero->id }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                {{ method_field('PATCH') }}

                <label for="validationDefault03" class="form-label">Nombre de Usuario: </label>
                <input type="text" name="user_name" class="form-control" id="validationDefault03" value="{{ $minero->user_name }}" required>

                <label for="validationDefault03" class="form-label">Nombre: </label>
                <input type="text" name="name" class="form-control" id="validationDefault03" value="{{ $minero->name }}" required>

                <label for="validationDefault03" class="form-label">Apellido: </label>
                <input type="text" name="lastName" class="form-control" id="validationDefault03" value="{{ $minero->lastName }}">

                <label for="validationDefault03" class="form-label">Celular: </label>
                <input type="number" name="celular" class="form-control" id="validationDefault03" value="{{ $minero->celular }}">
                
                <label for="validationDefault03" class="form-label">CBU: </label>
                <input type="number" name="cbu" class="form-control" id="validationDefault03" value="{{ $minero->cbu }}">
                
                <label for="validationDefault03" class="form-label">Cuit: </label>
                <input type="number" name="cuit" class="form-control" id="validationDefault03" value="{{ $minero->cuit }}">

                <label for="validationDefault03" class="form-label">Subtitulo: </label>
                <input type="text" name="subtitulo" class="form-control" id="validationDefault03" value="{{ $minero->subtitulo }}">

                <label for="validationDefault03" class="form-label">Frase: </label>
                <input type="text" name="frase" class="form-control" id="validationDefault03" value="{{ $minero->frase }}">

                <label for="validationDefault03" class="form-label">Acerca de: </label>
                <input type="text" name="acerca" class="form-control" id="validationDefault03" value="{{ $minero->acerca }}">

                <label for="validationDefault03" class="form-label">Puntos: </label>
                <input type="number" name="pts" class="form-control" id="validationDefault03" value="{{ $minero->pts }}" required>

                <label for="validationDefault03" class="form-label">Edad: </label>
                <input type="number" name="edad" class="form-control" id="validationDefault03" value="{{ $minero->edad }}">

                <label for="validationDefault03" class="form-label">Localización: </label>
                <input type="text" name="localizacion" class="form-control" id="validationDefault03" value="{{ $minero->localizacion }}">

                <label for="validationDefault03" class="form-label">Grado: </label>
                <input type="text" name="grado" class="form-control" id="validationDefault03" value="{{ $minero->grado }}">

                <label for="validationDefault03" class="form-label">Usuario del amigo: </label>
                <input type="text" name="user_amigo" class="form-control" id="validationDefault03" value="{{ $minero->user_amigo }}" >

                <label for="validationDefault03" class="form-label">Avatar: </label>
                <input type="file" name="avatar" class="form-control" id="validationDefault03">

                <label for="validationDefault03" class="form-label">Fondo: </label>
                <input type="file" name="fondo" class="form-control" id="validationDefault03">

                <label for="validationDefault03" class="form-label">Estado: </label>
                <input type="text" name="estado" class="form-control" id="validationDefault03" value="{{ $minero->estado }}" required>
                
                <div class="col">
                <button class="btn btn-primary" type="submit">Modificar</button>
                <a href="/dashboardminero" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div> 
</div>
@endsection

@else

@include('home')

@endif