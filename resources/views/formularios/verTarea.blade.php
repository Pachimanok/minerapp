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
            @foreach ($tarea as $tarea).
            <h4 class="text-light text-center">Tarea:</h4>
            <h5 class="text-light text-center"> {{$tarea->asunto}}</h5>
            <hr>
            
            <div class="row">
                <div class="col-sm-5 mx-auto text-light text-center">
                    <p style="color: white;">Mensaje:</p>
                    <P style="color: white;">{{ $tarea->mensaje }}</P>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-5 mx-auto text-light text-center">
                    <a href="{{ asset('adjunto_send/'.$tarea->adjunto_send) }}" target="_blank" class="btn btn-outline-info"><i class="pe-7s-paperclip"></i> Ver Adjunto</a>
                </div>
            </div>
            
            <form class="mb-5" action="/tareas/{{ $tarea->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
           
            <h4 class="text-light text-center mt-3">Responder:</h4>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto">
                        <textarea class="form-control mx-auto" rows="9" name="respuesta" placeholder="comentario"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 text-light mx-auto">
                        <input type="file" class="custom-file-input mx-auto" name="adjunto_respuesta" id="customFile"><br>
                        <label class="custom-file-label mx-auto" style="max-width:90%;"for="customFile">Adjunto</label>
                    </div>
                </div>
                {{-- </div>
                <input type="hidden" name="user_send" value="{{ Auth::user()->name }}">
                <input type="hidden" name="user_r" value="{{ $objeto->user }}">
                <input type="hidden" name="id_{{ $tipo }}" value="{{ $objeto->id }}">
                <input type="hidden" name="status_send" value="Sin leer"> --}}
                @endforeach
                <div class="row mt-3 text-center">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit"  class="btn btn-primary"></i>Responder</button>
                    </div>
                </div>                             
            </form>
        </div>
    </div> 
</div>



@endsection
@include('layouts.navbar')



