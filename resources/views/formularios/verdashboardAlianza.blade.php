@include('layouts.headerAlianza')
<div class="bg-default">
<div class="container bg-info pt-5 pb-5">
    <h1 class="text-center pb-5 text-decoration-underline">Informacion sobre Alianza {{ $alianza->nombre_fantasia }}</h1>
    <div class="row">
        
    <p class="fs-3 fw-bold pb-3 text-decoration-underline">Nombre fantasia: </p>
        <p class="fs-4 fw-normal">{{ $alianza->nombre_fantasia }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">User: </p>
        <p class="fs-4 fw-normal">{{ $alianza->user }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">avatar: </p>
        <div class="col-sm-5 pb-3">
        <img src="../../img/avatar/{{ $alianza->avatar }}" alt="" >
        </div>
        <p class="fs-4 fw-normal">{{ $alianza->avatar }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">fondo: </p>
        <img src="../../img/fondo/{{ $alianza->fondo }}" alt="">
        <p class="fs-4 fw-normal pt-3">{{ $alianza->fondo }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">cuit: </p>
        <p class="fs-4 fw-normal">{{ $alianza->cuit }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">razon social: </p>
        <p class="fs-4 fw-normal">{{ $alianza->razonSocial }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">email: </p>
        <p class="fs-4 fw-normal">{{ $alianza->email }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">celular: </p>
        <p class="fs-4 fw-normal">{{ $alianza->celular }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">comision: </p>
        <p class="fs-4 fw-normal">{{ $alianza->comision }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">shipping: </p>
        <p class="fs-4 fw-normal">{{ $alianza->shipping }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">medios de pago: </p>
        <p class="fs-4 fw-normal">{{ $alianza->medios_pago }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">link saber mas: </p>
        <p class="fs-4 fw-normal">{{ $alianza->link_saber_mas }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">hashtags: </p>
        <p class="fs-4 fw-normal">{{ $alianza->hash }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">link cat: </p>
        <p class="fs-4 fw-normal">{{ $alianza->link_cat }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">link promo: </p>
        <p class="fs-4 fw-normal">{{ $alianza->link_promo }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">Descripcion: </p>
        <p class="fs-4 fw-normal">{{ $alianza->descripcion }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">rubro: </p>
        <p class="fs-4 fw-normal">{{ $alianza->rubro }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">q hacer: </p>
        <p class="fs-4 fw-normal">{{ $alianza->q_hacer }}</p>
        <p class="fs-3 fw-bold pb-3 text-decoration-underline">terminos: </p>
        <p class="fs-4 fw-normal">{{ $alianza->terminos }}</p>

        <div class="col mt-3">
        <a href="/dashboard/alianza" class="btn btn-success">Volver</a>
        </div>
    </div>
</div>