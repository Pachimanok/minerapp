<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedidoladera;
use App\Models\Billetera;

class pedidoLaderasController extends Controller
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
        //
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
        $usuario = Auth::user();
        $user = Auth::user()->name;
        
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        foreach($request->get('modo_pago') as $modo_pago)
        foreach($request->get('horario_envio') as $horaio_envio)

        $actualiza = pedidoladera::find($id);
        $total = $actualiza->total * 0.15;
        $actualiza->observaciones = $request->get('obeservaciones');
        $actualiza->modo_pago = $modo_pago;
        $actualiza->horario_envio = $horaio_envio;
        $actualiza->estado = 'confirmado';
        $actualiza->save();

        $billetera = new Billetera();
        $billetera->user_name = $user;
        $billetera->descripcion = 'Laderas:'.$id;
        $billetera->alianza = 'laderas';
        $billetera->monto = $total;
        $billetera->idPedido= $id;

        $billetera->estado = 'desbloquear';
        $billetera->save();
        
        $res = DB::table('pedidoladeras')->join('minas','pedidoladeras.minaid','=','minas.id')->where('pedidoladeras.id', '=' ,$id)->get();
        $resumen = $res[0];

        return view('laderas.resumen')->with('mineros', $minero)->with('user', $usuario)->with('resumen', $resumen);
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
