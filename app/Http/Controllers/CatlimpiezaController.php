<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Catlimpieza;



use Illuminate\Http\Request;

class CatlimpiezaController extends Controller
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

        $limpieza = DB::table('catlimpiezas')->get();
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        return view('formularios.catalogoLimpieza')->with('limpieza', $limpieza)->with('user', $usuario)->with('mineros', $minero);

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

        return view('formularios.createArticulo')->with('user', $usuario)->with('mineros', $minero);
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
        $user = $usuario->name;

        $archivo = $request->File('foto');
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();

        $imagen = Image::make($archivo);
        
        $imagen->resize(300,300);
        $imagen->encode($extencion);
        $path = public_path('img/limpieza/' . $name);
        $imagen->save($path);

        foreach($request->get('rubro') as $rubro )
        foreach($request->get('activos') as $activos )

        $articulo = new Catlimpieza();        
        $articulo->foto = $name;
        $articulo->titulo = $request->get('titulo');
        $articulo->description = $request->get('description');
        $articulo->unidad = $request->get('unidad');
        $articulo->preciouni = $request->get('preciouni');
        $articulo->rubro = $rubro;
        $articulo->activos = $activos;
        $articulo->user = $user;

        $articulo->save();


        session()->flash('mensaje','Se envió con éxito');
        session()->flash('tipo','primary');
        
        
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
       


        $minero = $min[0];
        $usuario = Auth::user();

        $limpieza = DB::table('catlimpiezas')->get();
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];

        return redirect('/catlim');

        /* return view('formularios.catalogoLimpieza')->with('limpieza', $limpieza)->with('user', $usuario)->with('mineros', $minero); */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Auth::user();
        $user = $usuario->name;

        $limpieza = DB::table('catlimpiezas')->where('id','=',$id)->get();

        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        return view('formularios.articuloLimpieza')->with('limpieza', $limpieza)->with('user', $usuario)->with('mineros', $minero);
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

        $limpieza = DB::table('catlimpiezas')->where('id','=',$id)->get();

        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        
        return view('formularios.editLimpieza')->with('limpieza', $limpieza)->with('user', $usuario)->with('mineros', $minero);
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
            $user = $usuario->name;

            $archivo = $request->File('foto');

            foreach($request->get('rubro') as $rubro )
            foreach($request->get('activos') as $activos )
            
            if($archivo == null){

                $articulo = Catlimpieza::find($id);     
                $articulo->titulo = $request->get('titulo');
                $articulo->description = $request->get('description');
                $articulo->unidad = $request->get('unidad');
                $articulo->preciouni = $request->get('preciouni');
                $articulo->rubro = $rubro;
                $articulo->activos = $activos;
                $articulo->user = $user;
                $articulo->save();

            }else{

                $extencion = $archivo->getClientOriginalExtension();
                $name = $archivo->getClientOriginalName();

                $imagen = Image::make($archivo);

                $imagen->resize(300,300);
                $imagen->encode($extencion);
                $path = public_path('img/limpieza/' . $name);
                $imagen->save($path);

                $articulo = Catlimpieza::find($id);     
                $articulo->foto = $name;
                $articulo->titulo = $request->get('titulo');
                $articulo->description = $request->get('description');
                $articulo->unidad = $request->get('unidad');
                $articulo->preciouni = $request->get('preciouni');
                $articulo->rubro = $rubro;
                $articulo->activos = $activos;
                $articulo->user = $user;
                $articulo->save();

            }

            return redirect('/catlim');

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
