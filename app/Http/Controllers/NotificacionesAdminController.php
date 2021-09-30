<?php

namespace App\Http\Controllers;
use App\Models\notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class NotificacionesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notificaciones['notificaciones'] = notification::All();
        return view('dashboard.notificaciones', $notificaciones);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = DB::table('users')->get();
        return view('formularios.createNotificacionAdmin')->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $desti = $request['destinatario'];
        
        if($desti == '0'){

            $usuarios = DB::table('users')->get();

            foreach($usuarios as $usuario){

                if($usuario->role == "admin"){

                    $notificacion = new notification();
                    $notificacion->destinatario = $usuario->name;
                    $notificacion->titulo = $request['titulo'];
                    $notificacion->descripcion = $request['descripcion'];
                    $notificacion->link = $request['link'];
                    $notificacion->estado = $request['estado'];
                    $notificacion->tipo = $request['tipo'];
                    $notificacion->imagen = $request['imagen'];
                    $notificacion->save();

                } 

            }

        } else {
            
            $notificacion = new notification();
            $notificacion->destinatario = $desti;
            $notificacion->titulo = $request['titulo'];
            $notificacion->descripcion = $request['descripcion'];
            $notificacion->link = $request['link'];
            $notificacion->estado = $request['estado'];
            $notificacion->tipo = $request['tipo'];
            $notificacion->imagen = $request['imagen'];
            $notificacion->save();
            
        }
        

        $listaNotificaciones = DB::table('notifications')->get();

        return view('dashboard.notificaciones')->with('notificaciones', $listaNotificaciones);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $notificacion = notification::find($id);       
        return view('formularios.verNotificacionAdmin')->with('notificacion', $notificacion);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notificacion = notification::find($id);
        $notificacion->delete();
        return redirect('/notificaciones');
    }
}
