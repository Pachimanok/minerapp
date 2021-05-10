@extends('layouts.header')

{{-- Traigo el Usuario que está entrando --}}
@php               
    $role = Auth::user()->role;
    $user = Auth::user()->name;

@endphp

{{-- Si es Administrador Agrego al Yield --}}

@if ($role == 'admin')

@section('content')

@include('layouts.left')
@include('partialsViews.principaAdmin')

{{-- Si es Minero Agrego al Yield --}}

@elseif ($role == 'minero')

@section('content')

@include('layouts.navbar')

<div class="container mt-2" >
    <div class="card" style="background: #365d88;">
        <div class="card-body" >
            <h4 class="text-light text-center">Minar Casa</h4>
            <h6 class="text-center" style="color: #119da4">User:{{ Auth::user()->name }}</h6>
            <br>
            <form class="mb-5"action="/casas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        <label class="mx-auto" for="text" >Mtros Cubiertos</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="name" class="form-control mx-auto" name="mts" placeholder="350">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Barrio o Zona</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="name" class="form-control mx-auto" name="zona" placeholder="Palmares">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Departamento </label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="name" class="form-control mx-auto" name="ciudad" placeholder="Godoy Cruz">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Propietario</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <select name="propietario[]" class="form-control">
                            <option value="">-</option>
                            <option value="si">Si</option>
                            <option value="no">Alquila</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center" style="text-align:center;">
                        <label class="mx-auto" for="text" >Nombre:</label>
                    </div>
                    <div class="col-sm-5 mx-auto text-light">
                        <input type="name" class="form-control mx-auto" name="nombre" placeholder="Juan Díaz">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        <label class="mx-auto" for="text">Documento:</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="number" class="form-control mx-auto" name="dni"  placeholder="28987453">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        <label class="mx-auto" for="text" >WhatsApp:</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="number" class="form-control mx-auto" name="phone"  placeholder="5492612128105">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-5 mx-auto text-light text-center">
                        <label class="mx-auto" for="text" >E-mail:</label>
                    </div>
                    <div class="col-sm-5 mx-auto">
                        <input type="email" class="form-control mx-auto" name="email"  placeholder="nombre@miner.app">
                        <input hidden class="form-control mx-auto" name="user"  value="<?php echo $user ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5 mx-auto" style="text-align: center;">
                        <button type="submit" class="btn btn-primary mx-auto"><i class="pe-7s-diamond mr-2"></i>Minar</button>
                    </div>
                </div>                             
            </form>
        </div>
    </div> 
</div>

@endif

@endsection




