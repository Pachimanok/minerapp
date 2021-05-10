@include('layouts.header');
<div class="container">
    @include('partials.alert')

    <div class="card" style="border-radius: 1.6rem;">
        <div class="card-body ">
            <h4 class="text-info"> <strong> Tareas Nuevas | de {{ Auth::user()->name }}</strong></h4>
            <br>
            <div class="dataTables_info responsive-sm" id="bootstrap-data-table_info" role="status" aria-live="polite">
            </div>
            <table id="bootstrap-data-table" class="table table-striped ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Asunto</th>
                        <th>Titulo</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarea as $tarea)
                    <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                       
                        <td class="text-truncate"> <small>{{ $tarea->id}} </small></td>
                        <td class="text-truncate"> <small>{{ $tarea->nombre}} </small></td>
                        <td class="text-truncate"> <small>{{ $tarea->mensaje }} </small></td>

                        <td> <span class="badge badge-success"> {{ $tarea->status_send }}</span></td>
                        <td>
                            <div class="container-sm">
                                <div class="d-flex">
                                    <a href="tareas/{{$tarea->id}}" class="btn btn-info btn-sm p-1 mr-1 d-flex align-items-center"
                                        style="max-height: 1.5rem;">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    
                                    <a href="status/{{ $tarea->id }}/edit" class="btn btn-info btn-sm p-1 d-flex align-items-center"
                                        style="max-height: 1.5rem;"> <i class="fa fa-pencil"></i></a>
                                    
                                </div>
                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>                   
</div>
<nav style="background:#119DA4;"class="pb-1 sticky-bottom fixed-bottom">
    <div class="btn-group" role="group" style="width: 100%;">
        <a href="/minar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-diamond"></i></a>
        <a href="/home" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-home"></i></a>
        <a href="/cobrar" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white;"><i class="icon icon-md pe-7s-cash"></i></a>
        <a href="/minero" class="btn" style="width: 25%;font-size: xx-large;background:#119DA4; color:white; "><i class="icon icon-md pe-7s-user"></i></a>  
        </div>
    </nav>