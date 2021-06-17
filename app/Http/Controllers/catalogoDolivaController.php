<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Models\catdoliva;

use Illuminate\Http\Request;

class catalogoDolivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /* variables de accion  */
         $usuario = Auth::user();
         $user = $usuario->name;
 
         /* variables para la vista */
 
         if($usuario->role == 'minero'){
 
             $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
             $minero = $min[0];
             $rubros = DB::table('rubrosdolivas')->get();
             $articulos = DB::table('catdolivas')->where('activos', '=' ,'si')->get();
         
         /* redireccion a la vista */
         return view('formularios.catalogoDoliva')->with('rubros', $rubros)->with('user', $usuario)->with('mineros', $minero);
 
         }else{
 
             $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
             $ali = $alianza[0];
             $rubros = DB::table('rubrosdolivas')->get();
             $articulos = DB::table('catdolivas')->where('activos', '=' ,'si')->get();
 
             /* redireccion a la vista */
            return view('formularios.catalogoDoliva')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
 
         }   
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

        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];

        $rubros = DB::table('rubrosdolivas')->get();            
        $articulos = DB::table('catdolivas')->get();

        return view('formularios.createArticuloDoliva')->with('user', $usuario)->with('alianza', $ali)->with('rubros', $rubros);
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
        $path = public_path('img/doliva/' . $name);
        /* hay que crear una Carpeta en public/img que se llame "demo" */
        $imagen->save($path);

        foreach($request->get('rubro') as $rubro )
        foreach($request->get('activos') as $activos )

        $articulo = new catdoliva();        
        $articulo->foto = $name;
        $articulo->titulo = $request->get('titulo');
        $articulo->description = $request->get('description');
        $articulo->unidad = $request->get('unidad');
        $articulo->preciouni = $request->get('preciouni');
        $articulo->rubro = $rubro;
        $articulo->activos = $activos;
        $articulo->user = $user;

        $articulo->save();

        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];

        $rubros = DB::table('rubrosdolivas')->get();
        $articulos = DB::table('catdolivas')->where('activos', '=' ,'si')->get();

        return view('formularios.catalogoDoliva')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);         

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

        $articulo = DB::table('catdolivas')->where('id','=',$id)->get();

        if($usuario->role == 'minero'){
            $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
            $minero = $min[0];
            return view('formularios.articuloDoliva')->with('articulo', $articulo)->with('user', $usuario)->with('mineros', $minero);

        }else{
            
            $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
            $ali = $alianza[0];
            return view('formularios.articuloDoliva')->with('articulo', $articulo)->with('user', $usuario)->with('alianza', $ali);
        }
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

        $articulo = DB::table('catdolivas')->where('id','=',$id)->get();
        
        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];
        $rubros = DB::table('rubrosdolivas')->get();

        return view('formularios.editArticuloDoliva')->with('articulo', $articulo)->with('rubros', $rubros)->with('user', $usuario)->with('alianza', $ali);
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

            $articulo = catdoliva::find($id);     
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
                $path = public_path('img/doliva/' . $name);
                $imagen->save($path);

                $articulo = catdoliva::find($id);     
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

        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];

        $rubros = DB::table('rubrosdolivas')->get();
        $articulos = DB::table('catdolivas')->where('activos', '=' ,'si')->get();
        
        return redirect('/catdoliva')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Auth::user();
        $user = $usuario->name;

        $articulo = catdoliva::find($id);
        $articulo->delete();
        
        $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
        $ali = $alianza[0];

        $rubros = DB::table('rubrosdolivas')->get();
        $articulos = DB::table('catdolivas')->where('activos', '=' ,'si')->get();
        
        return redirect('/catdoliva')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
    }
}
