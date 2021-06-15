<?php

namespace App\Http\Controllers;

use App\Models\bancodelsol;
use App\Models\Billetera;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;

class bandodelsolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
        return view('bancodelsol.minar')->with('mineros', $minero)->with('user', $usuario);
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

        $dni = $request->get('dni');

        $pedido = new bancodelsol(); 
        $pedido->dni = $dni;
        $pedido->minero= $user;
        $pedido->save();

        $total = 1000;

        $billetera = new Billetera();
        $billetera->user_name = $user;
        $billetera->descripcion = 'Banco del Sol:'.$dni;
        $billetera->alianza = 'bancodelsol';
        $billetera->monto = $total;
        $billetera->idPedido= $dni;

        return view('bancodelsol.instrucciones')->with('mineros', $minero)->with('user', $usuario);

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
