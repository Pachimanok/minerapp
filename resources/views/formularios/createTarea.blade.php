@extends('layouts.header')

{{-- Traigo el Usuario que está entrando --}}
@php               
    $role = Auth::user()->role;
    $user = Auth::user()->name;

@endphp

{{-- Si es Administrador Agrego al Yield --}}

@section('content')
<div class="container mt-2" >
    <div class="card" style="background: #365d88;">
        <div class="card-body" >
            <h4 class="text-light text-center">Nueva Tarea</h4>
            <h6 class="text-center" style="color: #119da4">User:{{ Auth::user()->name }}</h6>
            <br>
            <form class="mb-5"action="/tareas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        @foreach ($objeto as $objeto)
                        <h4>Enviar nueva tarea a: {{ $objeto->user }}</h4>
                        <h4>Objeto: {{ $tipo }} - {{ $objeto->nombre }}</h4>
                        @endforeach
                        
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Asunto:</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="name" class="form-control mx-auto" name="asunto" placeholder="Inspeccionar">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Descripcion: </label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <textarea class="form-control mx-auto" rows="9" name="mensaje" placeholder="comentario"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Adjunto:</label>
                    </div>
                    <div class="custom-file col-sm-5 mx-auto">
                        <input type="file" class="custom-file-input" name="adjunto_send" id="customFile">
                        <label class="custom-file-label mx-auto" style="max-width:90%;"for="customFile">Adjunto</label>
                      </div>
                </div>
                <input type="hidden" name="user_send" value="{{ Auth::user()->name }}">
                <input type="hidden" name="user_r" value="{{ $objeto->user }}">
                <input type="hidden" name="id_{{ $tipo }}" value="{{ $objeto->id }}">
                <input type="hidden" name="status_send" value="Sin leer">

                <div class="row mt-3">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit"  class="btn btn-primary mx-auto"></i>Enviar</button>
                    </div>
                </div>                             
            </form>
        </div>
    </div> 
</div>



@endsection
@include('layouts.navbar')



