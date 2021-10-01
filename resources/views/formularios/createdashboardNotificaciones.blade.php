@include('layouts.headerAlianza')
<div class="bg-info">
<div class="container pb-5">
    <h1 class="text-dark">Formulario nueva alianza</h1>

    <div class="row">
        <form action="/dashboard/notificaciones" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf

            <label for="validationDefault03" class="form-label">Destinatario: </label>
            <select class="form-select"  name="destinatario" aria-label="Default select example">
                <option selected value="0">Todos</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->name }}">{{ $usuario->name }}</option>
                @endforeach
            </select>

            <label for="validationDefault04" class="form-label">Titulo: </label>
            <input type="text" name="titulo" class="form-control" id="validationDefault04" required>

            <label for="validationDefault03" class="form-label">Descripcion: </label>
            <input type="text" name="descripcion" class="form-control" id="validationDefault03" required>

            <label for="validationDefault03" class="form-label">Link: </label>
            <input type="text" name="link" class="form-control" id="validationDefault03" required>

            <label for="validationDefault03" class="form-label">Estado: </label>
            <input type="text" name="estado" class="form-control" id="validationDefault03" required>

            <label for="validationDefault03" class="form-label">Tipo: </label>
            <input type="text" name="tipo" class="form-control" id="validationDefault03" required>

            <label for="validationDefault03" class="form-label">Imagen: </label>
            <input type="file" name="imagen" class="form-control" id="validationDefault03">

            <div class="col">
            <button class="btn btn-primary" type="submit">Crear</button>
            <a href="/dashboard/notificaciones" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
    </div> 