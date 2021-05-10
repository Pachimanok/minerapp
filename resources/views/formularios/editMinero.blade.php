@include('layouts.header');
<div class="container">
    @include('partials.alert')


    <div class="row">
        @foreach ($minero as $minero)
            <div class="col-sm-2 mx-auto">
                <img class="img-fluid rounded mx-auto d-block rounded-circle border border-light mb-2"
                    src="{{ asset('avatar/' . $minero->avatar) }}" style="width: 9rem;height: 9rem; text-align:center;"
                    alt="">
                <form action="/minero/{{ $minero->id }}" method="POST" enctype="multipart/form-data"
                    style="text-align: center;">
                    @csrf
                    @method('PUT')
                    <label for="file-upload" style="font-size:small; " class="text-light" accept="image/*"
                        capture="camera">
                        <i class="fa fa-edit"></i> Cambiar Imagen
                    </label>
                    <input id="file-upload" type="file" name="avatar" hidden>
                    <h4 class="text-light text-center mt-1">{{ $minero->name }}</h4>
            </div>
    </div>
    <br>
    <div class="card" style="border-radius: 1.6rem; text-align:center;">
        <div class="card-body ">
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                        value="{{ $minero->nombre }}">
                </div>
                <hr>
            </div>
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <input type="text" name="celular" class="form-control" placeholder="Celular"
                        value="{{ $minero->celular }}">
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <p class="text-center">Email: <Strong>{{ $minero->email }}</Strong></p>
                </div>
                <hr>
            </div>
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <input type="text" name="dni" class="form-control" placeholder="DNI" value="{{ $minero->dni }}">
                </div>
                <hr>
            </div>
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <input type="text" name="cbu" class="form-control" placeholder="CBU" value="{{ $minero->cbu }}">
                </div>
                <hr>
            </div>
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <input type="text" name="mercado_pago" class="form-control" placeholder="Usuario Mercado Pago"
                        value="{{ $minero->mercado_pago }}">
                </div>
                <hr>
            </div>
            @endforeach
            <div class="row form-inline">
                <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                    <p class="text-center text-success"><Strong>Activo</Strong></p>
                </div>
            </div>

            <div class="row" style="text-align: center;">
                <div class="col-sm-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Editar</button>
                </div>

            </div>


        </div>

    </div>
    </form>
</div>
</div>
<br><br><br>
</div>

<nav style="background:#119DA4;" class="pb-1 sticky-bottom fixed-bottom">
    <div class="btn-group" role="group" style="width: 100%;">
        <a type="button" href="/home" class="btn"
            style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i
                class="icon icon-md pe-7s-home"></i></a>
        <button type="button" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i
                class="icon icon-md pe-7s-note2"></i></button>
        <a type="button" href="/cobrar" class="btn"
            style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i
                class="icon icon-md pe-7s-cash"></i></button>
            <a type="button" href="/minero" class="btn"
                style="width: 25%;font-size: xx-large;background:#119DA4; color:white; "><i
                    class="icon icon-md pe-7s-user"></i></a>
    </div>
</nav>
