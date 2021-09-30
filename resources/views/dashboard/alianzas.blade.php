@include('layouts.headerAlianza')
<div class="bg-info">
    <div class="container pt-5 pb-5">
        <h1 class="text-center text-dark  mb-5">Listado de alianzas</h1>
        <div class="row pb-5">
            <div class="col ">
                <a href="/alianzas/create" class="btn btn-success">Nueva alianza</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre fantasia</th>
                        <th scope="col">User</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $alianzas as $alianza)
                    <tr>
                        <td class="align-middle">{{ $alianza->id }}</td>
                        <td class="align-middle">{{ $alianza->nombre_fantasia }}</td>
                        <td class="align-middle">{{ $alianza->user }}</td>
                        <td>
                            <form action="/alianzas/{{ $alianza->id }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a href="/alianzas/{{ $alianza->id }}" class="btn btn-primary"><i
                                        class="far fa-eye"></i></a>
                                <a href="/alianzas/{{ $alianza->id }}/edit" class="btn btn-success"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <button href="/alianzas/{{ $alianza->id }}"
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
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>