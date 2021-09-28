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

        $mineros['mineros'] = Minero::paginate();
        return view('dashboard.minero', $mineros);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.createdashboardMinero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Auth::user()->name;
        $minero = new Minero();
        $minero->user = $user;
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

        $listaMineros = DB::table('mineros')->get();

        return view('dashboard.minero')->with('mineros', $listaMineros);

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
        return view('formularios.editardashboardMinero')->with('minero', $minero);
        
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

            
        $minero->username = $request['username'];
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

        return redirect('/dashboard/minero'); 
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
        return redirect('/dashboard/minero');
    }
}