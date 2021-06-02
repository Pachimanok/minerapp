<?php

namespace App\Http\Controllers;

use App\Models\Billetera;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Catlimpieza;
use App\Models\detallepedidolimpieza;
use App\Models\pedidolimpieza;


class pedidolimpiezasController extends Controller
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

        $actualiza = pedidolimpieza::find($id);
        $total = $actualiza->total * 0.1;
        $actualiza->observaciones = $request->get('obeservaciones');
        $actualiza->modo_pago = $modo_pago;
        $actualiza->horario_envio = $horaio_envio;
        $actualiza->estado = 'confirmado';
        $actualiza->save();

        $billetera = new Billetera();
        $billetera->user_name = $user;
        $billetera->descripcion = 'LimpiezaID:'.$id;
        $billetera->alianza = 'EverClean';
        $billetera->monto = $total;
        $billetera->idPedido= $id;

        $billetera->estado = 'desbloquear';
        $billetera->save();
        
        $res = DB::table('pedidolimpiezas')->join('minas','pedidolimpiezas.minaid','=','minas.id')->where('pedidolimpiezas.id', '=' ,$id)->get();
        $resumen = $res[0];

        return view('limpieza.resumen')->with('mineros', $minero)->with('user', $usuario)->with('resumen', $resumen);
 
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
