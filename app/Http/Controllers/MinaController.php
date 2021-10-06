<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Mina;

class MinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuario = Auth::user();
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
       

        return view('formularios.verMinas')->with('mineros', $minero)->with('minas', $qmina)->with('user', $usuario);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $usuario = Auth::user();
            $user = Auth::user()->name;
            $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
            $minero = $min[0];
            $localidades = DB::table('delivery')->get();
            $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
            $qnot = $not->count();
            
            return view('formularios.createMinas')->with('mineros', $minero)->with('user', $usuario)->with('localidades', $localidades)->with('not', $not)->with('qnot', $qnot);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->get('localidad')  as $localidad);

        $usuario = Auth::user();
        $user = Auth::user()->name;

        $mina = new mina();
        $mina->titulo = $request->get('titulo');
        $mina->codigo = $request->get('codigo');
        $mina->localidad = $localidad;
        $mina->user= $user;
        $mina->save();

        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
        
        session()->flash('mensaje','Se creo mina correctamente');
        session()->flash('tipo','primary');

        return redirect('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $usuario = Auth::user();
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $localidades = DB::table('delivery')->get();
        $qmina = DB::table('minas')->where('id', '=' ,$id)->get();
        $mina = $qmina[0];
        
        return view('formularios.editMinas')->with('mineros', $minero)->with('user', $usuario)->with('mina', $mina)->with('localidades', $localidades);

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
                
        foreach($request->get('localidad')  as $localidad);

        $usuario = Auth::user();
        $user = Auth::user()->name;

        $mina = mina::find($id);
        $mina->titulo = $request->get('titulo');
        $mina->calle = $request->get('calle');
        $mina->numero = $request->get('nro');
        $mina->piso = $request->get('piso');
        $mina->dpto = $request->get('dpto');
        $mina->referencia = $request->get('referencia');
        $mina->telefono = $request->get('telefono');
        $mina->contacto = $request->get('contacto');
        $mina->localidad = $localidad;
        $mina->observaciones= $request->get('description');
        $mina->mail= $request->get('mail');
        $mina->user= $user;
        $mina->save();

        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
        
        session()->flash('mensaje','Se editó mina correctamente');
        session()->flash('tipo','primary');

        return view('formularios.verMinas')->with('mineros', $minero)->with('minas', $qmina)->with('user', $usuario);


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
