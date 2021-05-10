<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;

        $tareas_autos = DB::table('tareas')
        ->select('tareas.id','autos.nombre','tareas.mensaje','tareas.status_send')
        ->join('autos', 'tareas.id_autos','=','autos.id')
        ->where('user_r', '=' ,$user)
        ->get();
        
        $tareas_casas = DB::table('tareas')
        ->select('tareas.id','casas.nombre','tareas.mensaje','tareas.status_send')
        ->join('casas', 'tareas.id_casas','=','casas.id')
        ->where('user_r', '=' ,$user)
        ->get();

        $merged = $tareas_autos->merge($tareas_casas);

        return view('partials.tareas')->with('tarea',$merged);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = '';
        if($request->hasFile('adjunto_send')){
            $adjunto_send = $request->File('adjunto_send');
            $name = $adjunto_send->getClientOriginalName();
            $adjunto_send->move(public_path().'/adjunto_send/', $name);           
        };
        
        if($request->get('id_autos') != null){
            $tareas = new Tarea;
            $tareas->asunto = $request->get('asunto');
            $tareas->mensaje = $request->get('mensaje');
            $tareas->user_send = $request->get('user_send');
            $tareas->user_r = $request->get('user_r');
            $tareas->id_autos = $request->get('id_autos');
            $tareas->id_casas = $request->get('id_casas');
            $tareas->status_send = $request->get('status_send');
            $tareas->adjunto_send = $name;
            $tareas->save();

            session()->flash('mensaje','Se envió con éxito');
            session()->flash('tipo','primary');
            
            return view('/tareas');

        }else{
            $tareas = new Tarea;
            $tareas->asunto = $request->get('asunto');
            $tareas->mensaje = $request->get('mensaje');
            $tareas->user_send = $request->get('user_send');
            $tareas->user_r = $request->get('user_r');
            $tareas->id_autos = $request->get('id_autos');
            $tareas->id_casas = $request->get('id_casas');
            $tareas->status_send = $request->get('status_send');
            $tareas->adjunto_send = $name;
            $tareas->save();

            session()->flash('mensaje','Se envió con éxito');
            session()->flash('tipo','primary');
            
            return view('/tareas');
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $cambia_status = Tarea::find($id);
        $cambia_status->status_send = 'Pendiente';
        $cambia_status->save();

        $tarea_auto = DB::table('tareas')
        ->join('autos', 'tareas.id_autos','=','autos.id')
        ->where('tareas.id', '=' ,$id)->get();

        $tarea_casa = DB::table('tareas')
        ->join('casas', 'tareas.id_casas','=','casas.id')
        ->where('tareas.id', '=' ,$id)->get();

        $merged = $tarea_auto->merge($tarea_casa);

        return view('formularios.verTarea')->with('tarea',$merged);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
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

            $name = '';

            if($request->hasFile('adjunto_respuesta')){
            $adjunto_respuesta = $request->File('adjunto_respuesta');
            $name = $adjunto_respuesta->getClientOriginalName();
            $adjunto_respuesta->move(public_path().'/adjunto_respuesta/', $name);           
            
            };

            $tarea = Tarea::find($id);     
            $tarea->respuesta = $request->get('respuesta');
            $tarea->adjunto_respuesta = $name;
            $tarea->status_send = 'Respondido';
            $tarea->status_r = 'Sin Leer';

            $tarea->save();

            session()->flash('mensaje','Se envio con exito tu mensaje');
            session()->flash('tipo','primary');

            return redirect('/tareas');

    

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
