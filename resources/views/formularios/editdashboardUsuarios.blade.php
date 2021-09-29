@include('layouts.headerAlianza');

<div class="bg-secondary">
    <div class="container pb-5">
        <h1 class="text-dark">Formulario nueva alianza</h1>

        <div class="row">
            <form action="/dashboard/usuarios/{{ $usuario->id }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                {{ method_field('PATCH') }}

                <label for="validationDefault03" class="form-label">Nombre: </label>
                <input type="text" name="name" class="form-control" id="validationDefault03" value="{{ $user->name }}" required>

                <label for="validationDefault03" class="form-label">Email: </label>
                <input type="text" name="email" class="form-control" id="validationDefault03" value="{{ $user->email }}" required>

                <label for="validationDefault03" class="form-label">Rol: </label>
                <input type="text" name="role" class="form-control" id="validationDefault03" value="{{ $user->role }}" required>

                <div class="col">
                <button class="btn btn-primary" type="submit">Modificar</button>
                <a href="/dashboard/usuarios" class="btn btn-primary">Cancelar</a>
                </div>
            </form>
        </div>
    </div> 
</div>