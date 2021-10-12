@include('layouts.headerAlianza')
<div class="bg-info">
<div class="container pb-5">
    <h1 class="text-dark">Formulario editar alianza</h1>

    <div class="row">
        <form action="/dashboard/alianza/{{ $alianza->id }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            {{ method_field('PATCH') }}

            <label for="validationDefault03" class="form-label">Nombre fantasia: </label>
            <input type="text" name="nombrefantasia" class="form-control" id="validationDefault03" value="{{ $alianza->nombre_fantasia }}">

            <label for="validationDefault03" class="form-label">Avatar: </label>
            <input type="file" name="avatar" class="form-control" value="{{ $alianza->avatar }} id="validationDefault03">

            <label for="validationDefault03" class="form-label">Alianza fondo: </label>
            <input type="file" name="alianzafondo" value="{{ $alianza->fondo }}"class="form-control" id="validationDefault03">

            <label for="validationDefault03" class="form-label">Cuit: </label>
            <input type="number" name="cuit" class="form-control" id="validationDefault03" value="{{ $alianza->cuit }}"required>

            <label for="validationDefault03" class="form-label">Razon Social: </label>
            <input type="text" name="razonsocial" class="form-control" id="validationDefault03" value="{{ $alianza->razonSocial }}">

            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $alianza->email }}" required>
            
            <label for="validationDefault03" class="form-label">Celular: </label>
            <input type="number" name="celular" class="form-control" id="validationDefault03" value="{{ $alianza->celular }}"required>
            
            <label for="validationDefault03" class="form-label">Comision: </label>
            <input type="number" name="comision" class="form-control" id="validationDefault03" value="{{ $alianza->comision }}">

            <label for="validationDefault03" class="form-label">Shipping: </label>
            <input type="text" name="shipping" class="form-control" id="validationDefault03" value="{{ $alianza->shipping }}">

            <label for="validationDefault03" class="form-label">Medios de pago: </label>
            <input type="text" name="mediosdepago" class="form-control" id="validationDefault03" value="{{ $alianza->medios_pago }}">

            <label for="validationDefault03" class="form-label">Link saber mas: </label>
            <input type="text" name="linksabermas" class="form-control" id="validationDefault03" value="{{ $alianza->link_saber_mas }}">

            <label for="validationDefault03" class="form-label">Hashtag: </label>
            <input type="text" name="hash" class="form-control" id="validationDefault03" value="{{ $alianza->hash }}">

            <label for="validationDefault03" class="form-label">Link cat: </label>
            <input type="text" name="linkcat" class="form-control" id="validationDefault03" value="{{ $alianza->link_cat }}" required>

            <label for="validationDefault03" class="form-label">Link promo: </label>
            <input type="text" name="linkpromo" class="form-control" id="validationDefault03" value="{{ $alianza->link_promo }}" required>
   
            <label for="validationTextarea" class="form-label">Descripcion: </label>
            <textarea name="descripcion" class="form-control" id="validationTextarea">{{ $alianza->descripcion }}</textarea>

            <label for="validationDefault03" class="form-label">Rubro: </label>
            <input type="text" name="rubro" class="form-control" id="validationDefault03" value="{{ $alianza->rubro }}" required>

            <label for="validationTextarea" class="form-label">que hacer: </label>
            <textarea name="qhacer" class="form-control" id="validationTextarea">{{ $alianza->q_hacer }}</textarea>
            
            <label for="validationTextarea" class="form-label">Terminos: </label>
            <textarea name="terminos" class="form-control" id="validationTextarea">{{ $alianza->terminos }}</textarea>
            
            <div class="col">
            <button class="btn btn-primary" type="submit">Modificar</button>
            <a href="/dashboardalianza" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>
    </div> 