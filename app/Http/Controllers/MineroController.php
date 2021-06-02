<?php

namespace App\Http\Controllers;

use App\Models\Minero;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;



class MineroController extends Controller
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
    $usuario = Auth::user();
    $min = DB::table('mineros')->where('id', '=' ,$id)->get();
    $minero = $min[0];

    return view('perfil')->with('mineros', $minero)->with('user', $usuario);

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
        
        $minero = Minero::find($id);   

        $archivo = $request->File('avatar');
            
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName(); 
        $imagen = Image::make($archivo);
        $imagen->resize(600,500);
        $imagen->encode($extencion);
        $path = public_path('img/avatar/' . $name);
        $imagen->save($path); 
        
        $minero->avatar = $name;       
        $minero->name = $request->get('nombre');
        $minero->lastName = $request->get('apellido');
        $minero->localizacion = $request->get('localizacion');
        $minero->celular = $request->get('celular');
        $minero->cbu = $request->get('cbu');
        $minero->cuit = $request->get('cuit');
        $minero->subtitulo = $request->get('subtitulo');
        $minero->frase = $request->get('frase');
        $minero->acerca = $request->get('acerca');
        $minero->save();

        $min = DB::table('mineros')->where('id', '=' ,$id)->get();
        $minero = $min[0];
    
        return back()->withInput();
    
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
