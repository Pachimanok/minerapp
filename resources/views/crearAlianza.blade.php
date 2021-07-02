<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Crear alianza {{ $alianza }} :: MinerApp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        code {
            color: gray;
        }

        code strong {
            color: blue;
            font-weight: 200;
        }

    </style>
</head>

<body>

    <section class="section cta-section">
        <div class="row align-items-center bg-primary mt-5 mb-4" style="background: #0F2027;
        background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
        background: linear-gradient(to right, #2C5364, #203A43, #0F2027);">
            <div class="col-md-10 mx-auto text-center text-md-start mb-5 mb-md-0" style="height: 8rem;">
                <h2 class="text-white pl-5 mt-5">Introducción</h2>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        Lo primero que tiene que hacer la alianza es darse de alta en:
                        <a href="https://minerapp.com.ar/alianza/create">https://minerapp.com.ar/alianza/create</a><br>
                        Al momento de darse de alta se creará una linea en las tablas:
                        <code>users</code> con el role = 'alianza' <br>
                        <code>alianzas</code> donde nos interesa el 'nombre_fantasia' ya que tenemos que asociarlos a
                        una tercer tabla <br>
                        <code>minerales</code> Insertar una nueva line datos: <br><br>
                        <code id="insertMineral">INSERT INTO `minerales` <br>
                            (`id`, `link_catalogo`, `pagblank`, `avatar`, `fondo`, `link_minar`, `subrubro`, `desafio`,
                            `flyer`, `datos_pedir`, `comision`, `alianza`, `created_at`, `updated_at`) <br>
                            VALUES (NULL, '/{{ $alianza }}', NULL, 'avatar.png', 'mineralFondo.png',
                            '/{{ $alianza }}/create', 'Rubro', NULL, NULL, 'Pedio y direccion', '10.00',
                            {{ $fantasia }}, NULL, NULL);
                        </code>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        Crear Carpetas y Vistas Necesarias. <br>
                        <br> <strong>en Carperta views/formularios:</strong>
                        <br> <code>articulo{{ $alianza }}.blade.php</code>
                        <br> <code>catalogo{{ $alianza }}.blade.php</code>
                        <br> <code>createArticulo{{ $alianza }}.blade.php</code>
                        <br> <code>editArticulo{{ $alianza }}.blade.php</code>
                        <br> <br>
                        <br> <strong>en Carperta views/home:</strong>
                        <br> <code>home{{ $alianza }}.blade.php</code>
                        <br> <br>
                        <br> <strong>Crear Carpeta views/{{ $alianza }}:</strong>
                        <br> <code>carrito.blade.php</code>
                        <br> <code>catalogo.blade.php</code>
                        <br> <code>checkout.blade.php</code>
                        <br> <code>cminar.blade.php</code>
                        <br> <code>resumen.blade.php</code>
                        <br> <code>selectproductos.blade.php</code>
                        <br>
                        <br> <strong>Crear Carpeta <code> public/img/{{ $alianza }}</code>:</strong>

                    </div>
                </div><br>
                <div class="card">
                    <div class="card-body">
                        Modificar en la vista user/userAlianza.blade.php <br>
                        <br>
                        en Vista Catalogo add:
                        <code>
                            ...
                            @ elseif($alianza->id == '{id_alianza}') /{{ $alianza }}
                            ...
                        </code>
                        <br>
                        en Vista Catalogo add :
                        <code>
                            ...
                            @ elseif($alianza->id == '{id_alianza}') /cat{{ $alianza }}
                            ...
                        </code>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        Controladors y modelos

                        desde la terminal:
                        <br>
                        <br>
                        <ul>
                            <li><code>php artisan make:controller {{ $alianza }}Controller --resource</code></li>
                            <li><code>php artisan make:controller catalogo{{ $alianza }}Controller
                                    --resource</code></li>
                            <li><code>php artisan make:controller detallePedido{{ $alianza }}Controller
                                    --resource</code></li>
                            <li><code>php artisan make:controller pedido{{ $alianza }}Controller --resource</code>
                            </li>
                        </ul>
                        <ul>
                            <li><code>php artisan make:model cat{{ $alianza }}</code></li>
                            <li><code>php artisan make:model detallepedido{{ $alianza }}</code></li>
                            <li><code>php artisan make:model pedido{{ $alianza }}</code></li>
                        </ul>

                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        Agregar Controllers a route/web.php

                        <code>
                            <br> /* Controllers {{ $alianza }} */
                            <br> Route::resource('cat{{ $alianza }}',
                            'App\Http\Controllers\catalogo{{ $alianza }}Controller');/* Cátalogo */
                            <br> Route::resource('{{ $alianza }}',
                            'App\Http\Controllers\{{ $alianza }}Controller');/* Controlladore para minar */
                            <br> Route::resource('detped{{ $alianza }}',
                            'App\Http\Controllers\detallePedido{{ $alianza }}Controller');/* Controlladore para
                            minar */
                            <br> Route::resource('pedido{{ $alianza }}',
                            'App\Http\Controllers\pedido{{ $alianza }}Controller');
                        </code>
                        <br>
                        Agregar Redireccion a Home {{ $alianza }}
                        <code>
                            <br> elseif($ali->user == '{{ $alianza }}'){
                            <br> $pedidos = DB::table('pedido{{ $alianza }}s')
                            <br> ->select(
                            <br> 'pedido{{ $alianza }}s.id',
                            <br> 'pedido{{ $alianza }}s.minero',
                            <br> 'pedido{{ $alianza }}s.total',
                            <br> 'pedido{{ $alianza }}s.estado',
                            <br> 'pedido{{ $alianza }}s.observaciones',
                            <br> 'pedido{{ $alianza }}s.modo_pago',
                            <br> 'pedido{{ $alianza }}s.horario_envio',
                            <br> 'pedido{{ $alianza }}s.updated_at',
                            <br> 'minas.titulo',
                            <br> 'minas.telefono',
                            <br> 'minas.contacto',
                            <br> 'minas.localidad'
                            <br>
                            <br> )
                            <br> ->join('minas', 'pedido{{ $alianza }}s.minaid', '=', 'minas.id')->get();
                            <br>
                            <br> return view('home.home{{ $alianza }}')->with('user', $usuario)->with('alianza',
                            $ali)->with('pedidos', $pedidos);
                            <br> }
                        </code>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta-section">
        <div class="row align-items-center bg-primary mt-5 mb-4" style="background: #0F2027;
        background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
        background: linear-gradient(to right, #2C5364, #203A43, #0F2027);">
            <div class="col-md-10 mx-auto text-center text-md-start mb-5 mb-md-0" style="height: 8rem;">
                <h2 class="text-white pl-5 mt-5">Base de Datos</h2>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tabla Catalogo:
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>CREATE TABLE `cat{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `unidad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `preciouni` decimal(11,2) NOT NULL,
                                    `rubro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `rub_rec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `activos` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE
                                    current_timestamp(),
                                    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
                                    `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
                                    <br>
                                    <br>
                                    ALTER TABLE `cat{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br>
                                    <br>
                                    ALTER TABLE `cat{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;</code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tabla Rubros
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>CREATE TABLE `rubros{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `rubro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE
                                    current_timestamp(),
                                    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

                                    --
                                    -- Volcado de datos para la tabla `rubros{{ $alianza }}s`
                                    --

                                    INSERT INTO `rubros{{ $alianza }}s` (`id`, `rubro`, `description`, `user`,
                                    `created_at`, `updated_at`) VALUES
                                    (8, 'Rubro A', 'Todo lo que tenga A', 'alianzaDemo', '2021-06-07 14:11:05',
                                    '0000-00-00
                                    00:00:00'),
                                    (9, 'Rubro B', 'Todos los Rubros que tengan B', 'alianzaDemo', '2021-06-07
                                    14:11:05',
                                    '0000-00-00 00:00:00');
                                    <br><br>
                                    ALTER TABLE `rubros{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br> <br>
                                    ALTER TABLE `rubros{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
                                </code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tabla de Pedidos:
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code> CREATE TABLE `pedido{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `minaid` int(11) NOT NULL,
                                    `minero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `total` decimal(11,2) DEFAULT NULL,
                                    `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `observaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `modo_pago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `horario_envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE
                                    current_timestamp(),
                                    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

                                    <br>
                                    <br>
                                    ALTER TABLE `pedido{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br>
                                    <br>
                                    ALTER TABLE `pedido{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
                                </code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Tabla Detalle de Pedidos:
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>CREATE TABLE `detallepedido{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `cantidad` int(11) NOT NULL,
                                    `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `idpedido` int(11) NOT NULL,
                                    `precio` decimal(11,0) NOT NULL,
                                    `user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
                                    <br>
                                    <br>
                                    ALTER TABLE `detallepedido{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br>
                                    <br>
                                    ALTER TABLE `detallepedido{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- controladores --}}
    <section class="section cta-section">
        <div class="row align-items-center bg-primary mt-5 mb-4" style="background: #0F2027;
      background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
      background: linear-gradient(to right, #2C5364, #203A43, #0F2027);">
            <div class="col-md-10 mx-auto text-center text-md-start mb-5 mb-md-0" style="height: 8rem;">
                <h2 class="text-white pl-5 mt-5">Controladores</h2>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        {{ $alianza }}Controller
                    </div>
                    <div class="card-body">
                        <code>
                            <br> namespace App\Http\Controllers;
                            <br> <strong>use Illuminate\Support\Facades\Auth;
                                <br> use Illuminate\Support\Facades\DB;
                                <br> use App\Models\pedido{{ $alianza }};</strong>
                            <br>
                            <br> use Illuminate\Http\Request;
                            <br>
                            <br> class {{ $alianza }}Controller extends Controller
                            <br> {
                            <br>
                            <br> public function index()
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br>
                                <br>
                                <br> if($usuario->role == 'minero'){
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> return view('{{ $alianza }}.catalogo')->with('mineros',
                                $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos',
                                $articulos);
                                <br>
                                <br>
                                <br> }else{
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->get();
                                <br> return view('{{ $alianza }}.catalogo')->with('alianza', $ali)->with('user',
                                $usuario)->with('rubros', $rubros)->with('articulos', $articulos);
                                <br>
                                <br> }
                                <br> </strong>}
                            <br>
                            <br>
                            <br> public function create()
                            <br> { <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br>
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
                                <br>
                                <br> return view('{{ $alianza }}.minar')->with('mineros', $minero)->with('user',
                                $usuario)->with('minas', $qmina);
                                <br> </strong>}
                            <br>
                            <br> public function store(Request $request)
                            <br> {
                            <br> <strong> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br>
                                <br> $mina = $request->get('mina');
                                <br> $minas = DB::table('minas')->where('user', '=' ,$user)->where('id', '='
                                ,$mina)->get();
                                <br> $entrega = $minas;
                                <br>
                                <br> $pedido = new pedido{{ $alianza }}();
                                <br> $pedido->minaid = $mina;
                                <br> $pedido->minero= $user;
                                <br> $pedido->estado= 'comprando';
                                <br> $pedido->save();
                                <br>
                                <br> $id_pedido = pedido{{ $alianza }}::latest('id')->first();
                                <br>
                                <br> return view('{{ $alianza }}.minaseleccionada')->with('mineros',
                                $minero)->with('user', $usuario)->with('mina', $entrega);
                                <br>
                            </strong>
                            <br>
                            <br>
                            <br> }
                        </code>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2>catalogo{{ $alianza }}Controller
                    </div>
                    <div class="card-body">
                        <code>
                            <br> namespace App\Http\Controllers;
                            <br>
                            <br> use Illuminate\Http\Request;
                            <br> <strong>use Illuminate\Support\Facades\Auth;
                                <br> use Illuminate\Support\Facades\DB;
                                <br> use Intervention\Image\Facades\Image;
                                <br> use App\Models\cat{{ $alianza }};</strong>
                            <br>
                            <br>
                            <br> class catalogoController extends Controller
                            <br> {
                            <br>
                            <br> public function index()
                            <br> {
                            <br> <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>

                                <br>
                                <br> if($usuario->role == 'minero'){
                                <br>
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> /* redireccion a la vista */
                                <br> return view('formularios.catalogo{{ $alianza }}')->with('rubros',
                                $rubros)->with('user', $usuario)->with('mineros', $minero);
                                <br>
                                <br> }else{
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> /* redireccion a la vista */
                                <br> return view('formularios.catalogo{{ $alianza }}')->with('rubros',
                                $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                                <br>
                                <br> }
                            </strong>
                            <br> }
                            <br>
                            <br>
                            <br> public function create()
                            <br> {
                            <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br>
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->get();
                                <br>
                                <br> return view('formularios.createArticulo{{ $alianza }}')->with('user',
                                $usuario)->with('alianza', $ali)->with('rubros', $rubros);
                                <br> </strong>
                            <br> }
                            <br>
                            <br> public function store(Request $request)
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $archivo = $request->File('foto');
                                <br> $extencion = $archivo->getClientOriginalExtension();
                                <br> $name = $archivo->getClientOriginalName();
                                <br>
                                <br> $imagen = Image::make($archivo);
                                <br>
                                <br> $imagen->resize(300,300);
                                <br> $imagen->encode($extencion);
                                <br> $path = public_path('img/{{ $alianza }}/' . $name);
                                <br> /* hay que crear una Carpeta en public/img que se llame "{{ $alianza }}" */
                                <br> $imagen->save($path);
                                <br>
                                <br> foreach($request->get('rubro') as $rubro )
                                <br> foreach($request->get('activos') as $activos )
                                <br>
                                <br> $articulo = new cat{{ $alianza }}();
                                <br> $articulo->foto = $name;
                                <br> $articulo->titulo = $request->get('titulo');
                                <br> $articulo->description = $request->get('description');
                                <br> $articulo->unidad = $request->get('unidad');
                                <br> $articulo->preciouni = $request->get('preciouni');
                                <br> $articulo->rubro = $rubro;
                                <br> $articulo->activos = $activos;
                                <br> $articulo->user = $user;
                                <br>
                                <br> $articulo->save();
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br>
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> return view('formularios.catalogo{{ $alianza }}')->with('rubros',
                                $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                                <br> </strong>
                            <br> }
                            <br>
                            <br>
                            <br> public function show($id)
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $articulo = DB::table('cat{{ $alianza }}s')->where('id','=',$id)->get();
                                <br>
                                <br> if($usuario->role == 'minero'){
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> return view('formularios.articulo{{ $alianza }}')->with('articulo',
                                $articulo)->with('user', $usuario)->with('mineros', $minero);
                                <br>
                                <br> }else{
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br> return view('formularios.articulo{{ $alianza }}')->with('articulo',
                                $articulo)->with('user', $usuario)->with('alianza', $ali);
                                <br> }</strong>
                            <br> }

                            <br> public function edit($id)
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $articulo = DB::table('cat{{ $alianza }}s')->where('id','=',$id)->get();
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br>
                                <br>
                                <br> return view('formularios.editArticulo{{ $alianza }}')->with('articulo',
                                $articulo)->with('rubros', $rubros)->with('user', $usuario)->with('alianza', $ali);
                                <br>
                            </strong>}
                            <br>
                            <br>
                            <br> public function update(Request $request, $id)
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $archivo = $request->File('foto');
                                <br>
                                <br> foreach($request->get('rubro') as $rubro )
                                <br> foreach($request->get('activos') as $activos )
                                <br>
                                <br> if($archivo == null){
                                <br>
                                <br> $articulo = cat{{ $alianza }}::find($id);
                                <br> $articulo->titulo = $request->get('titulo');
                                <br> $articulo->description = $request->get('description');
                                <br> $articulo->unidad = $request->get('unidad');
                                <br> $articulo->preciouni = $request->get('preciouni');
                                <br> $articulo->rubro = $rubro;
                                <br> $articulo->activos = $activos;
                                <br> $articulo->user = $user;
                                <br> $articulo->save();
                                <br>
                                <br> }else{
                                <br>
                                <br> $extencion = $archivo->getClientOriginalExtension();
                                <br> $name = $archivo->getClientOriginalName();
                                <br>
                                <br> $imagen = Image::make($archivo);
                                <br>
                                <br> $imagen->resize(300,300);
                                <br> $imagen->encode($extencion);
                                <br> $path = public_path('img/{{ $alianza }}/' . $name);
                                <br> $imagen->save($path);
                                <br>
                                <br> $articulo = cat{{ $alianza }}::find($id);
                                <br> $articulo->foto = $name;
                                <br> $articulo->titulo = $request->get('titulo');
                                <br> $articulo->description = $request->get('description');
                                <br> $articulo->unidad = $request->get('unidad');
                                <br> $articulo->preciouni = $request->get('preciouni');
                                <br> $articulo->rubro = $rubro;
                                <br> $articulo->activos = $activos;
                                <br> $articulo->user = $user;
                                <br> $articulo->save();
                                <br>
                                <br> }
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br>
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> return redirect('/cat{{ $alianza }}')->with('rubros',
                                $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                                <br> </strong>
                            <br> }

                            <br>
                            <br> public function destroy($id)
                            <br> {<strong>
                                <br>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $articulo = cat{{ $alianza }}::find($id);
                                <br> $articulo->delete();
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br>
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> return redirect('/cat{{ $alianza }}')->with('rubros',
                                $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                                <br>
                            </strong>
                            }
                            <br> }

                        </code>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h2>pedido{{ $alianza }}Controller
                    </div>
                    <div class="card-body">
                        <code>

                           <br> namespace App\Http\Controllers;

                           <br> use Illuminate\Http\Request;
                           <br> <strong>
                           <br>     use Illuminate\Support\Facades\Auth;
                           <br>     use Illuminate\Support\Facades\DB;
                           <br>     use App\Models\pedido{{ $alianza }};
                           <br>     use App\Models\Billetera;
                           <br> </strong>

                           <br> public function update(Request $request, $id)
                           <br>     {
                           <br>        <strong> $usuario = Auth::user();
                           <br>         $user = Auth::user()->name;

                           <br>         $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                           <br>         $minero = $min[0];
                           <br>     
                           <br>         foreach($request->get('modo_pago') as $modo_pago)
                           <br>         foreach($request->get('horario_envio') as $horaio_envio)
                           <br>     
                           <br>         $actualiza = pedido{{ $alianza }}::find($id);
                           <br>         $total = $actualiza->total * 0.1;
                           <br>         $actualiza->observaciones = $request->get('obeservaciones');
                           <br>         $actualiza->modo_pago = $modo_pago;
                           <br>         $actualiza->horario_envio = $horaio_envio;
                           <br>         $actualiza->estado = 'confirmado';
                           <br>         $actualiza->save();
                           <br>     
                           <br>         $billetera = new Billetera();
                           <br>         $billetera->user_name = $user;
                           <br>         $billetera->descripcion = '{{ $alianza }}:'.$id;
                           <br>         $billetera->alianza = '{{ $fantasia}}';
                           <br>         $billetera->monto = $total;
                           <br>         $billetera->idPedido= $id;
                           <br>     
                           <br>         $billetera->estado = 'desbloquear';
                           <br>         $billetera->save();

                           <br>         $res = DB::table('pedido{{ $alianza }}s')->join('minas','pedido{{ $alianza }}s.minaid','=','minas.id')->where('pedido{{ $alianza }}s.id', '=' ,$id)->get();
                           <br>         $resumen = $res[0];
                           <br>     
                           <br>         return view('{{ $alianza }}.resumen')->with('mineros', $minero)->with('user', $usuario)->with('resumen', $resumen);
                           <br>     </strong>
                           <br>     }

                        </code>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h2>detallePedido{{ $alianza }}Controller
                    </div>
                    <div class="card-body">
                        <code>

                            <br> namespace App\Http\Controllers;<br>

                            <br> use Illuminate\Http\Request;
                            <br><strong> use Illuminate\Support\Facades\Auth;
                                <br> use Illuminate\Support\Facades\DB;
                                <br> use App\Models\pedido{{ $alianza }};
                                <br> use App\Models\detallepedido{{ $alianza }}; </strong><br>
                            <br>
                            <br>

                            <br> class detallePedido{{ $alianza }}Controller extends Controller
                            <br> {
                            <br>
                            <br>
                            <br> public function create()
                            <br> {
                            <br>
                            <br> <strong> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;<br>

                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];<br>

                                <br> $id_pedido = pedido{{ $alianza }}::latest('id')->first();<br>

                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br>
                                <br> return view('{{ $alianza }}.selectproductos')->with('mineros',
                                $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos',
                                $articulos)->with('pedido', $id_pedido);
                                <br> </strong>
                            <br> }
                            <br>
                            <br>
                            <br> public function store(Request $request)
                            <br> {
                            <br> <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br>
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br>
                                <br> $articulos = $request->get('articulo');
                                <br> $id_pedido = $request->get('pedido');<br>

                                <br> foreach($articulos as $articulo){<br>

                                <br> $q = DB::table('cat{{ $alianza }}s')->where('id','=', $articulo)->get();
                                <br> $r = $q[0];
                                <br>
                                <br> $titulo = $r->titulo;
                                <br> $precio = $r->preciouni;
                                <br> $id_pedido = $id_pedido;
                                <br>
                                <br> $dpedido = new detallepedido{{ $alianza }}();
                                <br> $dpedido->cantidad = '1';
                                <br> $dpedido->producto = $titulo;
                                <br> $dpedido->precio = $precio;
                                <br> $dpedido->idpedido = $id_pedido;
                                <br> $dpedido->user = $user;
                                <br> $dpedido->save();
                                <br>
                                <br>
                                <br> };
                                <br>
                                <br> $pedidos = DB::table('detallepedido{{ $alianza }}s')->where('idpedido','=',
                                $id_pedido)->join('cat{{ $alianza }}s','detallepedido{{ $alianza }}s.producto','=','cat{{ $alianza }}s.titulo')->get();
                                <br>
                                <br> $estado = pedido{{ $alianza }}::find($id_pedido);
                                <br> $estado->estado = 'comprando';
                                <br> $estado->save();
                                <br>
                                <br> return view('{{ $alianza }}.carrito')->with('mineros',
                                $minero)->with('user', $usuario)->with('pedidos', $pedidos)->with('id', $id_pedido);
                                <br> </strong>
                            <br> }
                            <br>
                            <br>
                            <br> public function update(Request $request, $id)
                            <br> {
                            <br> <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br>
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> foreach($request->get('cantidad') as $idart=>$cantidad){
                                <br>
                                <br> $catalogo = DB::table('cat{{ $alianza }}s')->where('id','=', $idart)->get();
                                <br> $cat = $catalogo[0];
                                <br> $titulo = $cat->titulo;
                                <br> $totart = $cat->preciouni * $cantidad;
                                <br>
                                <br> $actualiza =
                                DB::table('detallepedido{{ $alianza }}s')->where('producto','=',
                                $titulo)->update([<br>

                                <br> 'cantidad' => $cantidad
                                <br>
                                <br> ]);
                                <br> <br>

                                <br> $actpedido = DB::table('pedido{{ $alianza }}s')->where('id','=',
                                $id)->get();
                                <br> $total = $actpedido[0]->total;
                                <br>
                                <br> if($total == null){
                                <br> $totaldef = 0 + $totart;
                                <br> }else{
                                <br> $totaldef = $total + $totart;
                                <br>
                                <br> }
                                <br> $actpedido = pedido{{ $alianza }}::find($id);
                                <br> $actpedido->total = $totaldef;
                                <br> $actpedido->save();<br>

                                <br> }
                                <br>
                                <br> $detalle = DB::table('detallepedido{{ $alianza }}s')->where('idpedido','=',
                                $id)->join('cat{{ $alianza }}s','detallepedido{{ $alianza }}s.producto','=','cat{{ $alianza }}s.titulo')->get();
                                <br> $ped = DB::table('pedido{{ $alianza }}s')->where('id','=', $id)->get();
                                <br> $pedido = $ped[0];
                                <br>
                                <br>
                                <br> return view('{{ $alianza }}.checkout')->with('mineros',
                                $minero)->with('user', $usuario)->with('pedido', $pedido)->with('detalle', $detalle);
                                <br> </strong>
                            <br>
                            <br> }
                            <br>
                            <br>
                            <br> }

                        </code>
                    </div>
                </div>
            </div>
        </div>





    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



</body>

</html>
