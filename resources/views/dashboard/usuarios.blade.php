@if($usuario->role == 'admin')

@include('layouts.headerAlianza')

<div class="container pb-5 pt-5">
    <h1 class="text-center text-dark  mb-5">Listado de usuarios</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table align-items-center table-dark table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="sort" data-sort="name">Nombre</th>
                        <th scope="col" class="sort">Email</th>
                        <th scope="col" class="sort">Rol</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $user->name }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $user->email }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $user->role }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                                <form action="/dashboard/usuarios/{{ $user->id }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a href="/dashboard/usuarios/{{ $user->id }}/edit" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                <button href="/dashboard/usuarios/{{ $user->id }}" onclick="return confirm('¿Quieres eliminar este usuario {{ $user->id }}?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

@include('layouts.sidebar')

@else

@include('home')

@endif