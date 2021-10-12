@if($user->role == 'admin')

@extends('dashboard.homeAdmin')

@section('contenido')
<div class="bg-info w-100 h-100">
    <div class="container pt-5 pb-5">
        <h1 class="text-center text-dark  mb-5">Listado de notificaciones</h1>
        <div class="row pb-5">
            <div class="col ">
                <a href="/dashboard/notificaciones/create" class="btn btn-success">Nueva notificacion</a>
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
                            <form action="/dashboard/notificaciones/{{ $notificacion->id }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a href="/dashboard/notificaciones/{{ $notificacion->id }}"
                                    class="btn btn-primary"><i class="far fa-eye"></i></a>
                                <button href="/dashboard/notificaciones/{{ $notificacion->id }}"
                                    onclick="return confirm('¿Quieres eliminar esta notificacion?')"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@else

@include('home')

@endif