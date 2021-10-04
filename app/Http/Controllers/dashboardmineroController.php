<?php

namespace App\Http\Controllers;
use App\Models\Minero;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class dashboardmineroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $mineros['mineros'] = Minero::All();
        return view('dashboard.minero', $mineros)->with('user', $usuario);
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $minero = Minero::find($id);       
        return view('formularios.verdashboardMinero')->with('minero', $minero);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $minero = Minero::find($id);       
        return view('formularios.editdashboardMinero')->with('minero', $minero);
        
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
        $id=$minero->id;

        $imagen = $request->File('avatar');

        if($imagen != null ){
            $extencion = $imagen->getClientOriginalExtension();
            $name = $imagen->getClientOriginalName();
            $imagen = Image::make($imagen);
            $imagen->resize(300, 300);
            $imagen->encode($extencion);
            $path = public_path('img/avatar/' . $name);
            $imagen->save($path);
            
        }
        $imagen = $request->File('fondo');

        if($imagen != null){
        $extencion = $imagen->getClientOriginalExtension();
        $name = $imagen->getClientOriginalName();
        $imagen = Image::make($imagen);
        $imagen->encode($extencion);
        $path = public_path('img/fondo/' . $name);
        $imagen->save($path);
        $alianza->fondo = $name;
        }

            
        $minero->user_name = $request['user_name'];
        $minero->name = $request['name'];
        $minero->lastName = $request['lastName'];
        $minero->celular = $request['celular'];
        $minero->cbu = $request['cbu'];
        $minero->cuit = $request['cuit'];
        $minero->subtitulo = $request['subtitulo'];
        $minero->frase = $request['frase'];
        $minero->acerca = $request['acerca'];
        $minero->pts = $request['pts'];
        $minero->edad = $request['edad'];
        $minero->localizacion = $request['localizacion'];
        $minero->grado = $request['grado'];
        $minero->user_amigo = $request['user_amigo'];
        $minero->avatar = $request['avatar'];
        $minero->fondo = $request['fondo'];
        $minero->estado = $request['estado'];

        $minero->save();

        return redirect('/dashboardminero'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minero = Minero::find($id);
        $minero->delete();
        return redirect('/dashboardminero');
    }
}