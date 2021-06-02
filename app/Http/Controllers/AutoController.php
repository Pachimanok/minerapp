<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Auto;
use App\Models\Billetera;



use Illuminate\Support\Facades\Storage;



class AutoController extends Controller
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
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $minero = $min[0];
        $usuario = Auth::user();
        return view('formularios.createAuto')->with('mineros', $minero)->with('user', $usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $archivo = $request->File('photo');
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();

        $imagen = Image::make($archivo);
        
        $imagen->resize(300,150);
        $imagen->encode($extencion);
        $path = public_path('img/' . $name);
        $imagen->save($path);

        $autos = new Auto();        
        $autos->photo = $name;
        $autos->nombre = $request->get('nombre');
        $autos->ano = $request->get('ano');
        $autos->ciudad = $request->get('ciudad');
        $autos->dni = $request->get('dni');
        $autos->celular = $request->get('phone');
        $autos->email = $request->get('email');
        $autos->user = $request->get('user');
        $autos->status = 'Para Cotizar';

        $autos->save();

        $data = Auto::latest('id')->first();

        $id_auto = $data->id;

        $billetera = new Billetera(); 
        $billetera->user_name = $request->get('user');
        $billetera->descripcion = 'MICAuto:'.$id_auto;
        $billetera->monto = 0;
        $billetera->alianza = 'MIC Autos';
        $billetera->idPedido = $id_auto;

        $billetera->save();

        session()->flash('mensaje','Se envió con éxito');
        session()->flash('tipo','primary');
        
        $user = Auth::user()->name;
        $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
        $autoMinado = DB::table('autos')->where('id', '=' ,$id_auto)->get();
        $auto = $autoMinado[0];


        $minero = $min[0];
        $usuario = Auth::user();

        return view('Okauto')->with('mineros', $minero)->with('user', $usuario)->with('auto', $auto);
        
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
