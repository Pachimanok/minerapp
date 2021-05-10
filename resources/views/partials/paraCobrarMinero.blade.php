@include('layouts.header');
<div class="container mt-5">
    <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body text-center" style="line-height: 3%;">
            <h4 class="text-info"> <strong> Disponible</strong></h4>
            <br>
            <div >
                <h1 style="font-size: xxx-large; color:green;">$ {{ round($dispobible,2) }} </h1><br>
                <i class="icon fade-5 icon-lg pe-7s-cash" style="font-size:xxx-large"></i>
            </div>
        </div>
    </div>
    <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body text-center" style="line-height: 3%;">
            <h4 class="text-info"> <strong>Facturar:</strong></h4>
            <br>
            <div style="line-height: 3%;">
               
                    <h1 style="font-size: xxx-large; color:blue;">$ {{ round($facturar,2) }} </h1><br>
                    <i class="icon fade-5 icon-lg pe-7s-shield" style="font-size:xxx-large"></i>
               
            </div>
        </div>
    </div>
    <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body text-center" style="line-height: 3%;">
            <h4 class="text-info"> <strong>Cobrado:</strong></h4>
            <br>
            <div style="line-height: 3%;">
                    <h1 style="font-size: xxx-large; color:rgb(212, 0, 255);">$ {{ round($cobrado,2) }} </h1><br>
                    <i class="icon fade-5 icon-lg pe-7s-piggy" style="font-size:xxx-large"></i>
               
            </div>
        </div>
    </div>
</div>
<br class="mb-5">

<nav style="background:#119DA4;"class="pb-1 sticky-bottom fixed-bottom">
    <div class="btn-group" role="group" style="width: 100%;">
        <a type="button" href="/minar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-diamond"></i></a>
        <a type="button" href="/tareas" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-note2"></i></a>       
        <a type="button" href="/home" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-home"></i></a>
        <a type="button" href="/minero" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white; "><i class="icon icon-md pe-7s-user"></i></a>  
    </div>
</nav>