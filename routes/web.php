<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Minero;
use Intervention\Image\Facades\Image;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {

    $usuario = Auth::user();
    $user = $usuario->name;
    $user_id = Auth::user()->id;
    $user_role = Auth::user()->role;

    if($user_role == 'minero'){
        
        /* Datos del minero */
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        /* Total Recaudado en el mes */
        $month = date('m');
        $recaudado = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->whereMonth('created_at', '=', $month)->sum('monto');

        /* Mensajes sin leer */

        $mensajes = DB::table('mensajes')->where('para', '=' ,$user)->where('estado', '=' ,'sin leer')->get();
        $cant_msj = $mensajes->count();

        /* temas de educacion */

        $educacion = DB::table('educacions')->where('estado', '=' ,'activo')->get();
        $cant_ed = $educacion->count();

        /* Datos para billetera */

        $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->where('estado', '=', 'a cobrar')->sum('monto');

        $desbloq = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->where('estado', '=', 'desbloquear')->sum('monto');  

        return view('home')->with('user', $usuario)->with('mineros', $minero)->with('recaudado', $recaudado)->with('mensaje', $mensajes)->with('cant_msj', $cant_msj)->with('educacion', $educacion)->with('cant_ed', $cant_ed)->with('cob', $aCobrar)->with('des', $desbloq)->with('id', $user_id);


    }else{

        /* Datos dela Alianza */
        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];

        return view('home.homeAlianza')->with('user', $usuario)->with('alianza', $ali);
        

    }
    
    
})->middleware('auth');



Route::get('/minerapp', function () {

    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];
    
    return view('minerApp')->with('mineros', $minero)->with('user', $usuario);
});
Route::get('/alianzas', function () {

    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];
    
    return view('alianzas')->with('mineros', $minero)->with('user', $usuario);
});
Route::get('/mensajes', function () {
    /* controlador mensajes */
    $usuario = Auth::user();
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];
    
    return view('mensajes')->with('mineros', $minero)->with('user', $usuario);
});

Route::get('/perfil', function () {

    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];


    return view('perfil')->with('mineros', $minero)->with('user', $user);
    
});

Route::get('/billetera', function () {
    /* controlador billetera */
    
    $usuario = Auth::user();
    $user = $usuario->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];
    
    $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->where('estado', '=', 'a cobrar')->sum('monto');
    $desbloq = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->where('estado', '=', 'desbloquear')->sum('monto');  

    return view('billetera')->with('mineros', $minero)->with('user', $usuario)->with('aCobrar', $aCobrar)->with('desbloq', $desbloq);
    
});
Route::get('/educacion', function () {

   
});
Route::get('/registro', function () {
   
    return view('auth.register');
});
Route::get('/registroAlianza', function () {
   
    return view('auth.registerAlianza');
});


route::get('/ranking', function(){
    
    $user = Auth::user()->name;
    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];

    $ranking = DB::table('mineros')->orderBy('pts', 'desc')->get();

    return view('sections.ranking')->with('mineros', $minero)->with('ranking', $ranking);
});

/* Route::get('/minero/{id}', [MineroController::class, 'show']); */

Route::resource('autos','App\Http\Controllers\AutoController');
Route::resource('minero','App\Http\Controllers\MineroController');
Route::resource('educacion','App\Http\Controllers\EducacionController');
Route::resource('alianza','App\Http\Controllers\AlianzaController');
Route::resource('minar','App\Http\Controllers\MinaController');



Route::resource('editarPerfil','App\Http\Controllers\editarPerfil'); 
Route::resource('validar','App\Http\Controllers\ValidarController');
Route::resource('limpieza','App\Http\Controllers\LimpiezaController');
Route::resource('detalle','App\Http\Controllers\DetalleBilletera');

route::get('/acobrar', function(){ 
    $usuario = Auth::user();
    $user = $usuario->name;

    $billetera = DB::table('billeteras')->where('user_name', '=' ,$user)->where('estado', '=' ,'a cobrar')->get();

    $aCobrar = DB::table('billeteras')->select('monto')->where('user_name', '=' ,$user)->where('estado', '=', 'a cobrar')->sum('monto'); 

    $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
    $minero = $min[0];

    return view('sections.detalleCobro')->with('user', $usuario)->with('billetera', $billetera)->with('mineros', $minero)->with('aCobrar', $aCobrar);

});


