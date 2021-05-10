
<div class="container">
    @include('partials.alert')  
    
    {{-- <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body">
            <h4 class="text-info"> <strong> Objetivo Mensual |</strong></h4>
            <br>
            <div class="container-flex">
                <div class="row">
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-car text-primary"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-primary">40</Strong> | {{ $cantidad }}</h4>
                    </div>
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-home text-danger"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-danger">10</Strong> | {{ $cantidad_casa }}</h4>
                    </div>
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-flag text-success"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-success">{{ $target_all }}</Strong> %</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body">
            <h4 class="text-info"> <strong> Tareas a Completar |</strong></h4>
            <br>
            <div class="container-flex">
                <div class="row">
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-drawer text-primary"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-primary">40</Strong> | Nuevas</h4>
                    </div>
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-note2 text-danger"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-danger">10</Strong> | Proceso</h4>
                    </div>
                    <div class="col text-center">
                        <i class="icon icon-lg pe-7s-next-2 text-success"></i>
                        <br>
                        <h4 style="color: gray;"><Strong class="text-success">40</Strong> | Listas</h4>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <div class="card-header">
        <h5 style="font-size: xxx-large; text-align:center;"><i class="icon pe-7s-car text-light"></i></h5>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="text-center">Detalles de Autos:</p>
            @foreach ($autos as $auto)
            <div class="row">
                <div class="col-auto mr-auto" style="height: 1.5rem">
                    <p style="font-weight: 800;"><span class="badge badge-secondary mr-2">{{ $loop->iteration }}</span> {{ $auto->nombre }}</p>
                </div>
                <div class="col-auto">
                    <a class="aling-end" href="https://api.whatsapp.com/send?phone={{ $auto->celular }}" target="_blank"><span class="badge badge-success">whatsapp</span></i></a>
                </div>
            </div>
            <div class="row m-0 p-0" >
                <div class="col-auto mr-auto text-left" style="height: 1.5rem">
                    <p><small> Dominio: {{ $auto->dominio }}- Auto: {{ $auto->marca}}</small></p>
                </div>
            </div>
            <div class="row m-0 p-0" >
                <div class="col-auto mr-auto text-left" style="height: 1.5rem">
                    <p><small> Status: {{ $auto->status }}</small></p>
                </div>
            </div>
            <hr class="m-1">
            @endforeach
        </div>
    </div>
    <div class="card-header">
        <h5 style="font-size: xxx-large; text-align:center;"><i class="icon pe-7s-home text-light"></i></h5>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="text-center">Detalles de Casas:</p>

            @foreach ($casas as $casa)
            <div class="row">
                <div class="col-auto mr-auto" style="height: 1.5rem">
                    <p style="font-weight: 800;"><span class="badge badge-secondary mr-2">{{ $loop->iteration }}</span> {{ $casa->nombre }}</p>
                </div>
                <div class="col-auto">
                    <a class="aling-end" href="https://api.whatsapp.com/send?phone={{ $casa->celular }}" target="_blank"><span class="badge badge-success">whatsapp</span></i></a>
                </div>
            </div>
            <div class="row m-0 p-0" >
                <div class="col-auto mr-auto text-left" style="height: 1.5rem">
                    <p><small> Zona: {{ $casa->zona}}- Mts: {{ $casa->mts}}</small></p>
                </div>
            </div>
            <div class="row m-0 p-0" >
                <div class="col-auto mr-auto text-left" style="height: 1.5rem">
                    <p><small> Status: {{ $casa->status }}</small></p>
                </div>
            </div>
            <hr class="m-1">
            @endforeach
        </div>
    </div>
    <br><br><br>
                   
</div>
