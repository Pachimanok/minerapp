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
            <br>
            <h5 class="text-light text-center text-secondary"> {{$tarea->asunto}}</h5>
            <P class="text-center">{{ $tarea->mensaje }}</P>
            <hr>
            <form class="mb-5" action="/status/{{ $tarea->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        <p style="color: white;">Status:</p>
                        <select name="status_send[]" id="status_send[]" class="form-control">
                        <option value="{{ $tarea->status_send }}">{{ $tarea->status_send }}</option>
                        <option value="Sin Leer">Sin Leer</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Respondido">Respondido</option>
                    </select>                    
                    </div>
                </div>
                @endforeach
                <div class="row mt-3 mx-auto">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit" class="btn btn-primary mx-auto"></i>Cambiar</button>
                    </div>
                </div>                             
            </form>
        </div>
    </div> 
</div>
@endsection
@include('layouts.navbar')



