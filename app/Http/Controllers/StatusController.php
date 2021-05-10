<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function edit($id)
    {
        $tarea = DB::table('tareas')
        ->where('id', '=' ,$id)
        ->get();

        return view('formularios.verTareaStatus')->with('tarea',$tarea); 
    }

    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id); 

        foreach($request->get('status_send') as $status_send);            
        $tarea->status_send = $status_send;
        $tarea->save();

        session()->flash('mensaje','Se cambió el status con exito con exito tu mensaje');
        session()->flash('tipo','primary');

        return redirect('/tareas'); 
    }
}
