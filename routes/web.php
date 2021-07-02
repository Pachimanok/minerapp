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

        } elseif($ali->user == 'DIOLIVA'){
            $pedidos = DB::table('pedidodolivas')
            ->select(
                'pedidodolivas.id',
                'pedidodolivas.minero',
                'pedidodolivas.total',
                'pedidodolivas.estado',
                'pedidodolivas.observaciones',
                'pedidodolivas.modo_pago',
                'pedidodolivas.horario_envio',
                'pedidodolivas.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidodolivas.minaid', '=', 'minas.id')->get();

            return view('home.homeDoliva')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);

        } elseif($ali->user == 'bluesea'){
            $pedidos = DB::table('pedidodolivas')
            ->select(
                'pedidodoblueseas.id',
                'pedidodoblueseas.minero',
                'pedidodoblueseas.total',
                'pedidodoblueseas.estado',
                'pedidodoblueseas.observaciones',
                'pedidodoblueseas.modo_pago',
                'pedidodoblueseas.horario_envio',
                'pedidodoblueseas.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidoblueseas.minaid', '=', 'minas.id')->get();

            return view('home.homeBluesea')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);

        }  elseif($ali->user == 'laderas'){
            $pedidos = DB::table('pedidoladeras')
            ->select(
                'pedidodoladeras.id',
                'pedidodoladeras.minero',
                'pedidodoladeras.total',
                'pedidodoladeras.estado',
                'pedidodoladeras.observaciones',
                'pedidodoladeras.modo_pago',
                'pedidodoladeras.horario_envio',
                'pedidodoladeras.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidoladeras.minaid', '=', 'minas.id')->get();

            return view('home.homeLaderas')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);

        } elseif($ali->user == 'huertaonline'){
            $pedidos = DB::table('pedidohuertas')
            ->select(
                'pedidohuertas.id',
                'pedidohuertas.minero',
                'pedidohuertas.total',
                'pedidohuertas.estado',
                'pedidohuertas.observaciones',
                'pedidohuertas.modo_pago',
                'pedidohuertas.horario_envio',
                'pedidohuertas.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
            )
            ->join('minas', 'pedidohuertas.minaid', '=', 'minas.id')->get();

            return view('home.homeHuerta')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);
        } elseif($ali->user == 'LauraPañalera'){
            $pedidos = DB::table('pedidoplimplims')
            ->select(
                'pedidoplimplims.id',
                'pedidoplimplims.minero',
                'pedidoplimplims.total',
                'pedidoplimplims.estado',
                'pedidoplimplims.observaciones',
                'pedidoplimplims.modo_pago',
                'pedidoplimplims.horario_envio',
                'pedidoplimplims.updated_at',
                'minas.titulo',
                'minas.telefono',
                'minas.contacto',
                'minas.localidad'
                /* $2y$10$aIvivVN270Dg6HIMSi4RR.z5LiTKAs971ql3Nq/TpcH6rqMvlIqG. */
            )
            ->join('minas', 'pedidoplimplims.minaid', '=', 'minas.id')->get();

            return view('home.homePlimplim')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);
        } elseif($ali->user == 'FranJuegos'){
            $pedidos = DB::table('pedidopiedralibres')
            ->select(
            'pedidopiedralibres.id',
            'pedidopiedralibres.minero',
            'pedidopiedralibres.total',
            'pedidopiedralibres.estado',
            'pedidopiedralibres.observaciones',
            'pedidopiedralibres.modo_pago',
            'pedidopiedralibres.horario_envio',
            'pedidopiedralibres.updated_at',
            'minas.titulo',
            'minas.telefono',
            'minas.contacto',
            'minas.localidad'
            
            )
            ->join('minas', 'pedidopiedralibres.minaid', '=', 'minas.id')->get();
            
            return view('home.homepiedralibre')->with('user', $usuario)->with('alianza', $ali)->with('pedidos', $pedidos);
            }
            /* $2y$10$d87.OdY2c2y.exOpGaNZq.R3piTOhUrBBRz3Y4ob39fpOpbRM0ksS */

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

Route::resource('configAlianza', 'App\Http\Controllers\configAlianzaController');

/* Route::get('/minero/{id}', [MineroController::class, 'show']); */

Route::resource('autos', 'App\Http\Controllers\AutoController');
Route::resource('minero', 'App\Http\Controllers\MineroController');
Route::resource('educacion', 'App\Http\Controllers\EducacionController');
Route::resource('alianza', 'App\Http\Controllers\AlianzaController');
Route::resource('minar', 'App\Http\Controllers\MinarController');
Route::resource('mina', 'App\Http\Controllers\MinaController');

Route::resource('validar', 'App\Http\Controllers\validarController');
Route::resource('bancodelsol', 'App\Http\Controllers\bandodelsolController');




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

/* Controllers doliva */
/* $2y$10$fvx.o.wrczP4nMHfF93JseHRcMbyItY8PKwTNvpSQzXcKmnNMaZca */
Route::resource('catdoliva', 'App\Http\Controllers\catalogoDolivaController');/* Cátalogo */
Route::resource('doliva', 'App\Http\Controllers\dolivaController');/* Controlladore para minar */
Route::resource('detpeddoliva', 'App\Http\Controllers\detallePedidoDolivaController');/* Controlladore para minar */
Route::resource('pedidodoliva', 'App\Http\Controllers\pedidoDolivaController');

/* Controllers laderas */
Route::resource('catladeras', 'App\Http\Controllers\catalogoLaderasController');/* Cátalogo */
Route::resource('laderas', 'App\Http\Controllers\LaderasController');/* Controlladore para minar */
Route::resource('detpedladeras', 'App\Http\Controllers\detallePedidoLaderasController');/* Controlladore para minar */
Route::resource('pedidoladeras', 'App\Http\Controllers\pedidoLaderasController');

/* Controllers Huerta */
Route::resource('cathuerta', 'App\Http\Controllers\catalogoHuertaController');/* Cátalogo */
Route::resource('huerta', 'App\Http\Controllers\huertaController');/* Controlladore para minar */
Route::resource('detpedhuerta', 'App\Http\Controllers\detallePedidoHuertaController');/* Controlladore para minar */
Route::resource('pedidohuerta', 'App\Http\Controllers\pedidoHuertaController');

/* Controllers BlueSea */
Route::resource('catbluesea', 'App\Http\Controllers\catalogoBlueController');/* Cátalogo */
Route::resource('bluesea', 'App\Http\Controllers\blueController');/* Controlladore para minar */
Route::resource('detpedbluesea', 'App\Http\Controllers\detallePedidoBlueseaController');/* Controlladore para minar */
Route::resource('pedidobluesea', 'App\Http\Controllers\pedidoBlueseaController');

/* Controllers Plimplim */
Route::resource('catplimplim', 'App\Http\Controllers\catalogoPlimplimController');/* Cátalogo */
Route::resource('plimplim', 'App\Http\Controllers\PlimplimController');/* Controlladore para minar */
Route::resource('detpedplim', 'App\Http\Controllers\detallePedidoPlimplimController');/* Controlladore para minar */
Route::resource('pedidoplim', 'App\Http\Controllers\pedidoPlimplimController');

/* Controllers piedralibre */
Route::resource('catpiedralibre', 'App\Http\Controllers\catalogopiedralibreController');/* Cátalogo */
Route::resource('piedralibre', 'App\Http\Controllers\piedralibreController');/* Controlladore para minar */
Route::resource('detpedpiedralibre', 'App\Http\Controllers\detallePedidopiedralibreController');/* Controlladore para minar */
Route::resource('pedidopiedralibre', 'App\Http\Controllers\pedidopiedralibreController');


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
