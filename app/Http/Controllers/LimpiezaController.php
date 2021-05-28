<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedidolimpieza;




class LimpiezaController extends Controller
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

        $limpieza = DB::table('catlimpiezas')->where('activos', '=' ,'si')->get();
        $rubros = DB::table('limpiezarubros')->get();
        
        
        if($usuario->role == 'minero'){
            $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
            $minero = $min[0];
            return view('limpieza.catalogo')->with('mineros', $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $limpieza);


        }else{

            $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
            $ali = $alianza[0];
            $articulos = DB::table('catlimpiezas')->get();
            return view('limpieza.catalogo')->with('alianza', $ali)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $articulos);

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
    
        return view('limpieza.minar')->with('mineros', $minero)->with('user', $usuario);
        
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

        $pedido = new pedidolimpieza(); 
        $pedido->minaid = $mina;
        $pedido->minero= $user;
        $pedido->estado= 'comprando';
        $pedido->save();

        $id_pedido = pedidolimpieza::latest('id')->first();

        return view('limpieza.minaseleccionada')->with('mineros', $minero)->with('user', $usuario)->with('mina', $entrega);


        
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
