@include('layouts.header');
<div class="container pt-5 pb-5">
    <h1 class="text-dark">Formulario nueva alianza</h1>

    <div class="row">
        <form action="/alianza" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf

            <label for="validationDefault01" class="form-label ">Titulo: </label>
            <input type="text" name="nombrefantasia" class="form-control" id="validationDefault01" value="" required>


            <label for="validationTextarea" class="form-label">Descripcion: </label>
            <textarea name="descripcion" class="form-control" id="validationTextarea"
                required></textarea>



            <label for="validationDefault03" class="form-label">Horario: </label>
            <input type="text" name="horario" class="form-control" id="validationDefault03">


            <label for="validationDefault03" class="form-label">Tecnologia: </label>
            <input type="text" name="tecnologia" class="form-control" id="validationDefault03" required>


            <label for="validationDefault03" class="form-label">Precio: </label>
            <input type="number" name="precio" class="form-control" id="validationDefault03" required>


            <label class="form-label" for="flexCheckChecked">¿Esta activo? </label>
            <input class="form-check-input" type="checkbox" name="activo" value="si" id="flexCheckChecked" checked>



            <label for="validationDefault03" class="form-label">Imagen: </label>
            <input type="file" name="imagen" class="form-control" id="validationDefault03">

            <div class="col">
            <button class="btn btn-primary" type="submit">Crear</button>
            <a href="/cursos" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
  