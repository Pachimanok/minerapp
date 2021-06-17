<?php

namespace App\Http\Controllers;

use App\Models\detallepedidodoliva;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedidohuerta;
use App\Models\detallepedidohuerta;
use App\Models\pedidobluesea;
use Illuminate\Http\Request;

class detallePedidoHuertaController extends Controller
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
        
        $id_pedido = pedidohuerta::latest('id')->first();
        
        $rubros = DB::table('rubroshuertas')->get();
        $articulos = DB::table('cathuertas')->where('activos', '=' ,'si')->get();

        return view('huerta.selectproductos')->with('mineros', $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $articulos)->with('pedido', $id_pedido);

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

        $articulos = $request->get('articulo');
        $id_pedido  = $request->get('pedido');
        
        foreach($articulos as $articulo){
            
            $q = DB::table('cathuertas')->where('id','=', $articulo)->get();
            $r = $q[0];

            $titulo  = $r->titulo;
            $precio  = $r->preciouni;
            $id_pedido  = $id_pedido;

            $dpedido = new detallepedidohuerta();
            $dpedido->cantidad = '1';
            $dpedido->producto = $titulo;
            $dpedido->precio = $precio;
            $dpedido->idpedido = $id_pedido;
            $dpedido->user = $user;
            $dpedido->save();


        };

        $pedidos = DB::table('detallepedidohuertas')->where('idpedido','=', $id_pedido)->join('cathuertas','detallepedidohuertas.producto','=','cathuertas.titulo')->get();
    
        $estado = pedidohuerta::find($id_pedido);
        $estado->estado = 'comprando';
        $estado->save();

        return view('huerta.carrito')->with('mineros', $minero)->with('user', $usuario)->with('pedidos', $pedidos)->with('id', $id_pedido); 
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
        foreach($request->get('cantidad') as $idart=>$cantidad){

          $catalogo = DB::table('cathuertas')->where('id','=', $idart)->get();
          $cat = $catalogo[0];
          $titulo = $cat->titulo;
          $totart = $cat->preciouni * $cantidad;
          
          $actualiza =  DB::table('detallepedidohuertas')->where('producto','=', $titulo)->update([
              
                'cantidad' => $cantidad

          ]);
          
        /* completar pedido de limpieza */

        $actpedido = DB::table('pedidohuertas')->where('id','=', $id)->get();
        $total = $actpedido[0]->total;
        
        if($total == null){
            $totaldef = 0 + $totart;
        }else{
            $totaldef = $total + $totart;

        }
           $actpedido = pedidohuerta::find($id);
           $actpedido->total = $totaldef;
           $actpedido->save();
        
    }

    $detalle = DB::table('detallepedidohuertas')->where('idpedido','=', $id)->join('cathuertas','detallepedidohuertas.producto','=','cathuertas.titulo')->get();
    $ped = DB::table('pedidohuertas')->where('id','=', $id)->get();
    $pedido = $ped[0];


    return view('huerta.checkout')->with('mineros', $minero)->with('user', $usuario)->with('pedido', $pedido)->with('detalle', $detalle); 
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
