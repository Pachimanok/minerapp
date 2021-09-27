<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MinerApp</title>

    <meta name="author" content="Creative Tim">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <script src="https://kit.fontawesome.com/d3b4aaf86f.js" crossorigin="anonymous"></script>
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body style="font-family: 'Ubuntu', sans-serif;">
<div class="container pt-5 pb-5">
    <h1 class="text-center text-dark  mb-5">Listado de notificaciones</h1>
    <div class="row pb-5">
        <div class="col ">
        <a href="/notificaciones/create" class="btn btn-success">Nueva notificacion</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">destinatario</th>
                    <th scope="col">titulo</th>
                    <th scope="col">estado</th>
                    <th scope="col">tipo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $notificaciones as $notificacion)
                    <tr>
                        <td class="align-middle">{{ $notificacion->id }}</td>
                        <td class="align-middle">{{ $notificacion->destinatario }}</td>
                        <td class="align-middle">{{ $notificacion->titulo }}</td>
                        <td class="align-middle">{{ $notificacion->estado }}</td>
                        <td class="align-middle">{{ $notificacion->tipo }}</td>
                        <td>
                            <form action="/notificaciones/{{ $notificacion->id }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a href="/notificaciones/{{ $notificacion->id }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                            <button href="/notificaciones/{{ $notificacion->id }}" onclick="return confirm('¿Quieres eliminar esta alianza?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>