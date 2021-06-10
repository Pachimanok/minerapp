<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedidodemo;

use Illuminate\Http\Request;

class DemoController extends Controller
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

        $articulos = DB::table('catdemos')->where('activos', '=' ,'si')->get();
        $rubros = DB::table('rubrosDemos')->get();
        
        
        if($usuario->role == 'minero'){
            $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
            $minero = $min[0];
            return view('demo.catalogo')->with('mineros', $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $articulos);


        }else{

            $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
            $ali = $alianza[0];
            $articulos = DB::table('catdemos')->get();
            return view('demo.catalogo')->with('alianza', $ali)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $articulos);

        }
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
        $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
    
        return view('demo.minar')->with('mineros', $minero)->with('user', $usuario)->with('minas', $qmina);
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

        $mina = $request->get('mina');
        $minas = DB::table('minas')->where('user', '=' ,$user)->where('id', '=' ,$mina)->get();
        $entrega = $minas;

        $pedido = new pedidodemo(); 
        $pedido->minaid = $mina;
        $pedido->minero= $user;
        $pedido->estado= 'comprando';
        $pedido->save();

        $id_pedido = pedidodemo::latest('id')->first();

        return view('demo.minaseleccionada')->with('mineros', $minero)->with('user', $usuario)->with('mina', $entrega);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
