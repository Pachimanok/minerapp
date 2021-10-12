@if($user->role == 'admin')

@extends('dashboard.homeAdmin')

@section('contenido')
<div class="bg-info">
    <div class="container pt-5 pb-5">
        <h1 class="text-center text-dark  mb-5">Listado de alianzas</h1>
        <div class="row pb-5">
            <div class="col ">
                <a href="/dashboard/alianza/create" class="btn btn-success">Nueva alianza</a>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">#Id</th>
                                <th scope="col" class="sort" data-sort="nombre">Nombre fantasia</th>
                                <th scope="col" class="sort" data-sort="usuario">Usuario</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ( $alianzas as $alianza)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="id mb-0 text-sm">{{ $alianza->id }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="nombre">{{ $alianza->nombre_fantasia }}</td>
                                <td class="usuario">{{ $alianza->user }}</td>
                                <td>
                                    <form action="/dashboard/alianza/{{ $alianza->id }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a href="/dashboard/alianza/{{ $alianza->id }}" class="btn btn-primary"><i
                                                class="far fa-eye"></i></a>
                                        <a href="/dashboard/alianza/{{ $alianza->id }}/edit" class="btn btn-success"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <button href="/dashboard/alianza/{{ $alianza->id }}"
                                            onclick="return confirm('¿Quieres eliminar esta alianza?')"
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
    </div>
</div>
</div>
@endsection

@else

@include('home')

@endif