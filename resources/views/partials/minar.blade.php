@include('layouts.header');
<div class="container">
    <div class="card mt-5 bg-light">
        <a href="autos/create">
        <div class="card-body"  style="border-radius: 30%;">
            <div class="row">
                <div class="col-3 d-flex align-items-center" style="border-right-style: groove;">
                    <button class="btn mx-auto" style="border-radius: 30%; padding: 5%;">
                        <i class="pe-7s-car" style="font-size: 2.5rem; color: #365d88;"></i>
                    </button>
                </div>
                <div class="col-9">
                    <h5 style="color: #365d88;font-weight: 800;
                ">MINAR AUTO</h5>
                    <p style="font-size: x-small; line-height: 1rem;">Foto de tarjeta Verde - Año - Provincia - Datos del Asegurado</p>
                </div>
            </div>  
        </div>
        </a>
    </div>
    <div class="card mt-5 bg-light">
        <a href="casas/create">
        <div class="card-body"  style="border-radius: 30%;">
            <div class="row">
                <div class="col-3 d-flex align-items-center" style="border-right-style: groove;">
                    <button class="btn mx-auto" style="border-radius: 30%; padding: 5%;">
                        <i class="pe-7s-home" style="font-size: 2.5rem; color: #365d88;"></i>
                    </button>
                </div>
                <div class="col-9">
                    <h5 style="color: #365d88;font-weight: 800;
                ">MINAR CASA</h5>
                    <p style="font-size: x-small; line-height: 1rem;">Metros Cuadrados - Propietario - Localidad - Barrio - Datos del Asegurado</p>
                </div>
            </div>  
        </div>
        </a>
    </div>
    <div class="card mt-5 bg-light">
        <div class="card-body"  style="border-radius: 30%;">
            <div class="row">
                <div class="col-3 d-flex align-items-center" style="border-right-style: groove;">
                    <button class="btn mx-auto" style="border-radius: 30%; padding: 5%;">
                        <i class="pe-7s-network" style="font-size: 2.5rem; color: #365d88;"></i>
                    </button>
                </div>
                <div class="col-9">
                    <h5 style="color: #365d88;font-weight: 800;
                ">MINAR COMPANY</h5>
                    <p style="font-size: x-small; line-height: 1rem;">Empresa - Rubro - Paretezco - Datos - Fecha de Reunion .</p>
                </div>
            </div>  
        </div>
    </div>                    
</div>
<nav style="background:#119DA4;"class="pb-1 sticky-bottom fixed-bottom">
    <div class="btn-group" role="group" style="width: 100%;">
        <a type="button" href="/home" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-home"></i></a>
        <a type="button" href="/tareas" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-note2"></i></a>
        <a type="button" href="/cobrar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-cash"></i></a>
        <a type="button" href="/minero" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white; "><i class="icon icon-md pe-7s-user"></i></a>  
        </div>
    </nav>