<?php

use App\Models\Limpieza;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Minero;
use App\Models\Mina;

use Intervention\Image\Facades\Image;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {

    $usuario = Auth::user();
    $user = $usuario->name;
    $user_id = $usuario->id;
    $user_role = $usuario->role;

    if ($user_role == 'minero') {

        /* Datos del minero */
        $min = DB::table('mineros')->where('user_name', '=', $user)->get();
        $minero = $min[0];
        /* Total Recaudado en el mes */
        $month = date('m');
        $recaudado = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->whereMonth('created_at', '=', $month)->sum('monto');
        /* Mensajes sin leer */
        $mensajes = DB::table('mensajes')->where('para', '=', $user)->where('estado', '=', 'sin leer')->get();
        $cant_msj = $mensajes->count();
        /* temas de educacion */
        $educacion = DB::table('educacions')->where('estado', '=', 'activo')->get();
        $cant_ed = $educacion->count();
        /* temas de educacion */
        $minas= DB::table('minas')->where('user', '=', $user)->get();
        $qminas = $minas->count();
        /* Datos para billetera */
        $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->where('estado', '=', 'a cobrar')->sum('monto');
        $desbloq = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->where('estado', '=', 'desbloquear')->sum('monto');

        /* enviamos a la vista */
        return view('home')
        ->with('user', $usuario)
        ->with('mineros', $minero)
        ->with('recaudado', $recaudado)
        ->with('mensaje', $mensajes)
        ->with('cant_msj', $cant_msj)
        ->with('educacion', $educacion)
        ->with('cant_ed', $cant_ed)
        ->with('cob', $aCobrar)
        ->with('des', $desbloq)
        ->with('id', $user_id)
        ->with('qminas', $qminas);

   
    } elseif ($user_role == 'educacion') {

        $educacion = DB::table('educacions')->get();
        return view('home')->with('user', $usuario)->with('educacion', $educacion);
    } else {

        /* Datos dela Alianza */
        $alianza = DB::table('alianzas')->where('user', '=', $user)->get();
        $ali = $alianza[0];

        if ($ali->user == 'luismadg') {

            $pedidos = DB::table('pedidolimpiezas')
                ->select(
                    'pedidolimpiezas.id',
                    'pedidolimpiezas.minero',
                    'pedidolimpiezas.total',
                    'pedidolimpiezas.estado',
                    'pedidolimpiezas.observaciones',
                    'pedidolimpiezas.modo_pago',
                    'pedidolimpiezas.horario_envio',
                    'pedidolimpiezas.updated_at',
                    'minas.titulo',
                    'minas.telefono',
                    'minas.contacto',
                    'minas.localidad'
                )
                ->join('minas', 'pedidolimpiezas.minaid', '=', 'minas.id')->get();

            return view('home.homeLimpieza')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);
       
        } elseif($ali->user == 'alianzaDemo'){
/* $2y$10$Nagg0/5x9gTHbJpAnxvT0.NdT.U0H5PsmM8MMYUJEInx1HSw7nABq */
            $pedidos = DB::table('pedidodemos')
            ->select(
                'pedidodemos.id',
                'pedidodemos.minero',
                'pedidodemos.total',
                'pedidodemos.estado',
                'pedidodemos.observaciones',
                'pedidodemos.modo_pago',
                'pedidodemos.horario_envio',
                'pedidodemos.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidodemos.minaid', '=', 'minas.id')->get();

            return view('home.homeDemo')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);

        }elseif($ali->user == 'foc'){

            $pedidos = DB::table('pedidofocs')
            ->select(
                'pedidofocs.id',
                'pedidofocs.minero',
                'pedidofocs.total',
                'pedidofocs.estado',
                'pedidofocs.observaciones',
                'pedidofocs.modo_pago',
                'pedidofocs.horario_envio',
                'pedidofocs.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidofocs.minaid', '=', 'minas.id')->get();

            return view('home.homeFoc')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);

        }

        return view('home.homeAlianza')->with('user', $usuario)->with('alianza', $ali);
    }
})->middleware('auth');



Route::get('/minerapp', function () {

    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    return view('minerApp')->with('mineros', $minero)->with('user', $usuario);
});
Route::get('/alianzas', function () {

    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    return view('alianzas')->with('mineros', $minero)->with('user', $usuario);
});
Route::get('/mensajes', function () {
    /* controlador mensajes */
    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    return view('mensajes')->with('mineros', $minero)->with('user', $usuario);
});

Route::get('/perfil', function () {

    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];


    return view('perfil')->with('mineros', $minero)->with('user', $user);
});

Route::get('/billetera', function () {
    /* controlador billetera */

    $usuario = Auth::user();
    $user = $usuario->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->where('estado', '=', 'a cobrar')->sum('monto');
    $desbloq = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->where('estado', '=', 'desbloquear')->sum('monto');
    
    $ultimos = db::table('billeteras')->where('user_name', '=', $user)->take(5)->get();

    return view('billetera')->with('mineros', $minero)->with('user', $usuario)->with('aCobrar', $aCobrar)->with('desbloq', $desbloq)->with('ultimos', $ultimos);
});
Route::get('/educacion', function () {
});
Route::get('/registro', function () {

    return view('auth.register');
});
Route::get('/registroAlianza', function () {

    return view('auth.registerAlianza');
});


route::get('/ranking', function () {

    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    $ranking = DB::table('mineros')->orderBy('pts', 'desc')->get();

    return view('sections.ranking')->with('mineros', $minero)->with('ranking', $ranking);
});

Route::get('agregarmina/create', function () {

    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];
    $localidades = DB::table('delivery')->get();

    return view('formularios.agregarMinas')->with('mineros', $minero)->with('user', $usuario)->with('localidades', $localidades);
});

Route::post('/agregar/store', function (Request $request){

    foreach ($request->get('localidad')  as $localidad);

    $usuario = Auth::user();
    $user = Auth::user()->name;
    
    $mina = new mina();
    $mina->titulo = $request->get('titulo');
    $mina->calle = $request->get('calle');
    $mina->numero = $request->get('nro');
    $mina->piso = $request->get('piso');
    $mina->dpto = $request->get('dpto');
    $mina->referencia = $request->get('referencia');
    $mina->telefono = $request->get('telefono');
    $mina->contacto = $request->get('contacto');
    $mina->localidad = $localidad;
    $mina->observaciones = $request->get('description');
    $mina->mail = $request->get('mail');
    $mina->user = $user;
    $mina->save();

    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];
    $qmina = DB::table('minas')->where('user', '=', $user)->get();

    session()->flash('mensaje', 'Se creo mina correctamente');
    session()->flash('tipo', 'primary');

    return redirect()->route('limpieza.create');
  
    

});

/* Route::get('/minero/{id}', [MineroController::class, 'show']); */

Route::resource('autos', 'App\Http\Controllers\AutoController');
Route::resource('minero', 'App\Http\Controllers\MineroController');
Route::resource('educacion', 'App\Http\Controllers\EducacionController');
Route::resource('alianza', 'App\Http\Controllers\AlianzaController');
Route::resource('minar', 'App\Http\Controllers\MinarController');
Route::resource('mina', 'App\Http\Controllers\MinaController');

Route::resource('validar', 'App\Http\Controllers\validarController');



/* Controladores de Limpieza */
Route::resource('catlim', 'App\Http\Controllers\CatlimpiezaController');/* Cátalogo */
Route::resource('limpieza', 'App\Http\Controllers\LimpiezaController'); /* General */
Route::resource('detpedlim', 'App\Http\Controllers\detallePedidoLimpiezas');/* Pedido */

/* Controllers Demo */
Route::resource('catdemo', 'App\Http\Controllers\catalogoDemoController');/* Cátalogo */
Route::resource('demo', 'App\Http\Controllers\DemoController');/* Controlladore para minar */
Route::resource('detpeddemo', 'App\Http\Controllers\detallePedidoDemoController');/* Controlladore para minar */
Route::resource('pedidodemo', 'App\Http\Controllers\pedidoDemoController');

/* Controllers Foc */
Route::resource('catfoc', 'App\Http\Controllers\catalogoFocController');/* Cátalogo */
Route::resource('foc', 'App\Http\Controllers\FocController');/* Controlladore para minar */
Route::resource('detpedfoc', 'App\Http\Controllers\detallePedidoFocController');/* Controlladore para minar */
Route::resource('pedidofoc', 'App\Http\Controllers\pedidoFocController');


Route::resource('editarPerfil', 'App\Http\Controllers\editarPerfil');
Route::resource('detalle', 'App\Http\Controllers\DetalleBilletera');
Route::resource('pedidolimpieza', 'App\Http\Controllers\pedidolimpiezasController');


route::get('/acobrar', function () {
    $usuario = Auth::user();
    $user = $usuario->name;

    $billetera = DB::table('billeteras')->where('user_name', '=', $user)->where('estado', '=', 'a cobrar')->get();

    $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=', $user)->where('estado', '=', 'a cobrar')->sum('monto');

    $min = DB::table('mineros')->where('user_name', '=', $user)->get();
    $minero = $min[0];

    return view('sections.detalleCobro')->with('user', $usuario)->with('billetera', $billetera)->with('mineros', $minero)->with('aCobrar', $aCobrar);
});
