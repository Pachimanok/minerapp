<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\pedidopiedralibre;
use App\Models\detallepedidopiedralibre;

class detallePedidopiedralibreController extends Controller
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

        $min = DB::table('mineros')->where('user_name', '=', $user)->get();
        $minero = $min[0];

        $id_pedido = pedidopiedralibre::latest('id')->first();

        $rubros = DB::table('rubrospiedralibres')->get();
        $articulos = DB::table('catpiedralibres')->where('activos', '=', 'si')->get();

        return view('piedralibre.selectproductos')->with('mineros', $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos', $articulos)->with('pedido', $id_pedido);
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

        $min = DB::table('mineros')->where('user_name', '=', $user)->get();
        $minero = $min[0];

        $articulos = $request->get('articulo');
        $id_pedido = $request->get('pedido');

        foreach ($articulos as $articulo) {

            $q = DB::table('catpiedralibres')->where('id', '=', $articulo)->get();
            $r = $q[0];

            $titulo = $r->titulo;
            $precio = $r->preciouni;
            $id_pedido = $id_pedido;

            $dpedido = new detallepedidopiedralibre();
            $dpedido->cantidad = '1';
            $dpedido->producto = $titulo;
            $dpedido->precio = $precio;
            $dpedido->idpedido = $id_pedido;
            $dpedido->user = $user;
            $dpedido->save();
        };

        $pedidos = DB::table('detallepedidopiedralibres')->where('idpedido', '=', $id_pedido)->join('catpiedralibres', 'detallepedidopiedralibres.producto', '=', 'catpiedralibres.titulo')->get();

        $estado = pedidopiedralibre::find($id_pedido);
        $estado->estado = 'comprando';
        $estado->save();

        return view('piedralibre.carrito')->with('mineros', $minero)->with('user', $usuario)->with('pedidos', $pedidos)->with('id', $id_pedido);
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

        $min = DB::table('mineros')->where('user_name', '=', $user)->get();
        $minero = $min[0];
        foreach ($request->get('cantidad') as $idart => $cantidad) {

            $catalogo = DB::table('catpiedralibres')->where('id', '=', $idart)->get();
            $cat = $catalogo[0];
            $titulo = $cat->titulo;
            $totart = $cat->preciouni * $cantidad;

            $actualiza = DB::table('detallepedidopiedralibres')->where('producto', '=', $titulo)->update([

                'cantidad' => $cantidad

            ]);


            $actpedido = DB::table('pedidopiedralibres')->where('id', '=', $id)->get();
            $total = $actpedido[0]->total;

            if ($total == null) {
                $totaldef = 0 + $totart;
            } else {
                $totaldef = $total + $totart;
            }
            $actpedido = pedidopiedralibre::find($id);
            $actpedido->total = $totaldef;
            $actpedido->save();
        }

        $detalle = DB::table('detallepedidopiedralibres')->where('idpedido', '=', $id)->join('catpiedralibres', 'detallepedidopiedralibres.producto', '=', 'catpiedralibres.titulo')->get();
        $ped = DB::table('pedidopiedralibres')->where('id', '=', $id)->get();
        $pedido = $ped[0];


        return view('piedralibre.checkout')->with('mineros', $minero)->with('user', $usuario)->with('pedido', $pedido)->with('detalle', $detalle);
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
