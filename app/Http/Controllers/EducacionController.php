<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Educacion;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EducacionController extends Controller
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

        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        $educacion = DB::table('educacions')->get();
    
        return view('educacion')->with('mineros', $minero)->with('user', $usuario)->with('educacion', $educacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();
        $user = $usuario->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        return view('formularios.createTema')->with('user', $usuario)->with('mineros', $minero);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        foreach($request->get('estado') as $estado )
        
        $usuario = Auth::user();
        $user = $usuario->name;

        $educacions = new Educacion();        
        $educacions->estado = $estado;
        $educacions->titulo = $request->get('titulo');
        $educacions->descripcion = $request->get('descripcion');
        $educacions->tema = $request->get('tema');
        $educacions->premio = 'puntos';
        $educacions->link = $request->get('link');
        $educacions->user = $user;
        $educacions->save();

        
/* 
        session()->flash('mensaje','Se envió con éxito');
        session()->flash('tipo','primary'); */

        

        $educacion = DB::table('educacions')->get();
        return view('home')->with('user', $usuario)->with('educacion', $educacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    
    /* controller educacion */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Auth::user();
        $user = $usuario->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        $educacion = DB::table('educacions')->where('id','=',$id)->get();

        return view('formularios.editTema')->with('user', $usuario)->with('mineros', $minero)->with('educacion', $educacion);
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
        
        foreach($request->get('estado') as $estado )
        
        $usuario = Auth::user();
        $user = $usuario->name;

        $educacions = Educacion::find($id);    
        $educacions->estado = $estado;
        $educacions->titulo = $request->get('titulo');
        $educacions->descripcion = $request->get('descripcion');
        $educacions->tema = $request->get('tema');
        $educacions->premio = 'puntos';
        $educacions->link = $request->get('link');
        $educacions->user = $user;
        $educacions->save();
        

        $educacion = DB::table('educacions')->get();
        
        return redirect('/home');
    
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
