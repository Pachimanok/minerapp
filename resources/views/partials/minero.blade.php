@include('layouts.header');
<div class="container">
    @include('partials.alert')      
        <div class="row">
            <div class="col-sm-2 mx-auto">
                @foreach ($minero as $minero)
                <img class="img-fluid rounded mx-auto d-block rounded-circle border border-light" src="{{ asset('avatar/'.$minero->avatar) }}" style="width: 9rem;height: 9rem;"alt=""> 
               
                <h4 class="text-light text-center mt-1">{{ $minero->name }}</h4>              
            </div>
        </div>
        
        <br>
        <div class="card" style="border-radius: 1.6rem;">
            <div class="card-body ">
                <p class="text-center">Nombre: <Strong>{{ $minero->nombre }}</Strong></p>
                <hr>
                <p class="text-center">Celular: <Strong>{{ $minero->celular }}</Strong></p>
                <hr>
                <p class="text-center">Email: <Strong>{{ $minero->email }}</Strong></p>
                <hr>
                <p class="text-center">DNI: <Strong>{{ $minero->dni }}</Strong></p>
                <hr>
                <p class="text-center">CBU/CVU: <Strong>{{ $minero->cbu }}</Strong></p>
                <hr>
                <p class="text-center">User Mercado Pago: <Strong>{{ $minero->mercado_pago }}</Strong></p>
                <hr>
                @endforeach
                <p class="text-center text-success"><Strong>Activo</Strong></p>
                <div class="row" style="text-align: center;">
                    <div class="col-sm-6 mx-auto">
                        <a href="/minero/{{  $minero->id  }}/edit" class="btn btn-outline-info">Editar datos</a>
                    </div>
                   
                </div>
            </div>
        </div>
        <br><br>                   
</div>
<nav style="background:#119DA4;"class="pb-1 sticky-bottom fixed-bottom">
    <div class="btn-group" role="group" style="width: 100%;">
        <a type="button" href="/minar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-diamond"></i></a>
        <a type="button" href="/tareas" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-note2"></i></a>       
        <a type="button" href="/cobrar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-cash"></i></a>
        <a type="button" href="/home" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-home"></i></a>
        </div>
    </nav>