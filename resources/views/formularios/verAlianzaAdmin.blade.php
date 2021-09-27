@include('layouts.headerAlianza');
<div class="container pt-5 pb-5">
    <h1 class="text-center pb-5">Informacion sobre Alianza {{ $alianza->nombre_fantasia }}</h1>
    <div class="row">
        
        <p class="fs-3 fw-bold">Nombre fantasia: {{ $alianza->nombre_fantasia }}</p>
        <p class="fs-3 fw-bold">User: {{ $alianza->user }}</p>
        <p class="fs-3 fw-bold">avatar: {{ $alianza->avatar }}</p>
        <p class="fs-3 fw-bold">fondo: {{ $alianza->fondo }}</p>
        <p class="fs-3 fw-bold">cuit: {{ $alianza->cuit }}</p>
        <p class="fs-3 fw-bold">razon social: {{ $alianza->razonSocial }}</p>
        <p class="fs-3 fw-bold">email: {{ $alianza->email }}</p>
        <p class="fs-3 fw-bold">celular: {{ $alianza->celular }}</p>
        <p class="fs-3 fw-bold">comision: {{ $alianza->comision }}</p>
        <p class="fs-3 fw-bold">shipping: {{ $alianza->shipping }}</p>
        <p class="fs-3 fw-bold">medios de pago: {{ $alianza->medios_pago }}</p>
        <p class="fs-3 fw-bold">link saber mas: {{ $alianza->link_saber_mas }}</p>
        <p class="fs-3 fw-bold">hashtags: {{ $alianza->hash }}</p>
        <p class="fs-3 fw-bold">link cat: {{ $alianza->link_cat }}</p>
        <p class="fs-3 fw-bold">link promo: {{ $alianza->link_promo }}</p>
        <p class="fs-3 fw-bold">Descripcion: {{ $alianza->descripcion }}</p>
        <p class="fs-3 fw-bold">rubro: {{ $alianza->rubro }}</p>
        <p class="fs-3 fw-bold">q hacer: {{ $alianza->q_hacer }}</p>
        <p class="fs-3 fw-bold">terminos: {{ $alianza->terminos }}</p>

        <div class="col mt-3">
        <a href="/alianzas" class="btn btn-primary">Volver</a>
        </div>
    </div>