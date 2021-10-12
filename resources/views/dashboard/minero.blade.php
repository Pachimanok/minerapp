@if($user->role == 'admin')

@extends('dashboard.homeAdmin')

@section('contenido')
<div class="bg-info">
    <div class="container pb-5 pt-5">
        <h1 class="text-center text-dark  mb-5">Listado de mineros</h1>
        <div class="row">
            <div class="table-responsive">
                <table class="table align-items-center table-dark table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" class="sort" data-sort="name">Nombre de Usuario</th>
                            <th scope="col" class="sort">Celular</th>
                            <th scope="col" class="sort">CBU</th>
                            <th scope="col" class="sort">Localizacion</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($mineros as $minero)
                        <tr>
                            <th scope="row">{{ $minero->id }}</th>
                            <td>
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{ $minero->user_name }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $minero->celular }}
                            </td>
                            <td>
                                {{ $minero->cbu}}
                            </td>
                            <td>
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{ $minero->localizacion}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="/dashboard/minero/{{ $minero->id }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a href="/dashboard/minero/{{ $minero->id }}" class="btn btn-primary"><i
                                            class="far fa-eye"></i></a>
                                    <a href="/dashboard/minero/{{ $minero->id }}/edit" class="btn btn-success"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <button href="/dashboard/minero/{{ $minero->id }}"
                                        onclick="return confirm('¿Quieres eliminar este minero?')"
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
@endsection

@else

@include('home')

@endif