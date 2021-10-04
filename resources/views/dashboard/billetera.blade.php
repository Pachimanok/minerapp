@if($user->role == 'admin')

@include('layouts.headerAlianza')

<div class="container pb-5 pt-5">
    <h1 class="text-center text-dark  mb-5">Listado de billeteras</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table align-items-center table-dark table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="sort" data-sort="name">Nombre de Usuario</th>
                        <th scope="col" class="sort">Descripción</th>
                        <th scope="col" class="sort">Monto</th>
                        <th scope="col" class="sort">Alianza</th>
                        <th scope="col" class="sort">Pedido</th>
                        <th scope="col" class="sort">Estado</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($billeteras as $billetera)
                    <tr>
                        <th scope="row">{{ $billetera->id }}</th>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $billetera->user_name }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $billetera->descripcion }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $billetera->monto}}
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $billetera->alianza}}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $billetera->idPedido }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $billetera->estado }}</span>
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
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

@include('layouts.sidebar')

@else

@include('home')

@endif