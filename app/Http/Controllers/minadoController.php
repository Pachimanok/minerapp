<?php

namespace App\Http\Controllers;

use App\Mail\TerminoMinadoAlianza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Minado;
use Intervention\Image\Facades\Image;



class minadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $user = $usuario->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        /* Notificaciones */
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();
        
        /* traer informacion sobre las minas disponibles */
        $minerales = db::table('alianzas')->get();

        return view ('formularios.minado')->with('mineros', $minero)->with('user', $usuario)->with('minerales', $minerales)->with('not', $not)->with('qnot', $qnot);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = Auth::user();
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();
        $alianza = $request['alianza'];

        $qali = DB::table('alianzas')->where('id', '=' ,$alianza)->get();
        $a = $qali[0];
        
        $com = $a->comision;
        $ali = $a->nombre_fantasia;

        $comision = $request['monto'] * $com /100;
        /* calcular comision */

        
        $archivo = $request->File('comprobante');
            
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName(); 
        $imagen = Image::make($archivo);
        $imagen->resize(1000,500);
        $imagen->encode($extencion);
        $path = public_path('img/comprobantes/' . $name);
        $imagen->save($path); 

        foreach($request['mina'] as $mina);
        foreach($request['tipo_pago'] as $tipo_pago);
        foreach($request['metodo_pago'] as $metodo_pago);


        $minado = new Minado();
        $minado->fecha_pago = $request['fecha_pago'];
        $minado->monto = $request['monto'];
        $minado->comision =  $comision;
        $minado->mina = $mina;
        $minado->tipo_pago =  $tipo_pago;
        $minado->metodo_pago =  $metodo_pago;
        $minado->fecha_entrega = $request['fecha_pago']; 
        $minado->comprobante = $name;
        $minado->user = $user;
        $minado->alianza = $ali;
        $minado->save();
    
        return view ('formularios.finMinado')->with('mineros', $minero)->with('user', $usuario)->with('not', $not)->with('qnot', $qnot)->with('alianza', $a)->with('com', $comision);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Auth::user();
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        $minas =  DB::table('minas')->where('user', '=' ,$user)->get();
        /* Notificaciones */
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();

        $ali = DB::table('alianzas')->where('id', '=', $id)->get();
        $alianza = $ali[0];
        

        return view ('formularios.cargarMinado')->with('mineros', $minero)->with('user', $usuario)->with('not', $not)->with('qnot', $qnot)->with('alianza', $alianza)->with('minas', $minas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $minado = Minado::find($id);
        $minado->calificacion_compra = $request['valuacion'];
        $minado->save();

        $minado = DB::table('minados')->select('alianza')->where('id', '=', $id)->get();
        $al = $minado[0];

        /*  $ali = DB::table('alianzas')->where('nombre_fantasia', '=', $al)->get();
            /* $alianza = $ali[0] */
        /*  dd($ali[0]); */
        /*   $mail = $alianza->email ; */

        Mail::to('prio@minerapp.com.ar')->send(new TerminoMinadoAlianza);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
