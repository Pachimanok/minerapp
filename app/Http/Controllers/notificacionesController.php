<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\notification;


class notificacionesController extends Controller
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
        
        /* Notificaciones */
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();

        $notificaciones = DB::table('notifications')->get();

        return view('formularios.notificaciones')->with('mineros', $minero)->with('user', $usuario) ->with('not', $not)
        ->with('qnot', $qnot)->with('notificaciones', $notificaciones);
        
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
        
        /* Notificaciones */
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();
        
        return view('formularios.createNotificacion')->with('mineros', $minero)->with('user', $usuario)->with('not', $not)
        ->with('qnot', $qnot);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['destinatario'] == 'todos'){
            

        }elseif($request['destinatario'] == 'mineros'){

        }else{

        foreach($request['tipo'] as $tipo);
        $notificacion = new notification();
        $notificacion->destinatario = $request['destinatario'];
        $notificacion->titulo = $request['titulo'];
        $notificacion->descripcion = $request['description'];
        $notificacion->link = $request['link'];
        $notificacion->tipo = $tipo;
        $notificacion->save();

        }

        $usuario = Auth::user();
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        /* Notificaciones */
        $not = DB::table('notifications')->where('destinatario', '=', $user)->get();
        $qnot = $not->count();

        return redirect('/notificacion')->with('user', $user)->with('not', $not)
        ->with('qnot', $qnot);
       
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
