<?php

namespace App\Http\Controllers;
use App\Models\Alianza;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class AlianzaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alianzas['alianzas'] = Alianza::paginate(22);
        return view('dashboard.alianzas', $alianzas);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.createAlianzaAdmin');
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
        $alianza = new Alianza();
        $alianza->user = $user;
        $alianza->nombre_fantasia = $request['nombrefantasia'];
        $alianza->avatar = $request['avatar'];
        $alianza->fondo = $request['alianzafondo'];
        $alianza->cuit = $request['cuit'];
        $alianza->razonSocial = $request['razonsocial'];
        $alianza->email = $request['email'];
        $alianza->celular = $request['celular'];
        $alianza->comision = $request['comision'];
        $alianza->shipping = $request['shipping'];
        $alianza->medios_pago = $request['mediosdepago'];
        $alianza->link_saber_mas = $request['linksabermas'];
        $alianza->hash = $request['hash'];
        $alianza->link_cat = $request['linkcat'];
        $alianza->link_promo = $request['linkpromo'];
        $alianza->descripcion = $request['descripcion'];
        $alianza->rubro = $request['rubro'];
        $alianza->q_hacer = $request['qhacer'];
        $alianza->terminos = $request['terminos'];
        
        $alianza->save();

        $listaAlianzas = DB::table('alianzas')->get();

        return view('dashboard.alianzas')->with('alianzas', $listaCursos);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $alianza = Alianza::find($id);       
        return view('formularios.verAlianzaAdmin')->with('alianza', $alianza);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $alianza = Alianza::find($id);
        return view('formularios.editAlianzaAdmin')->with('alianza', $alianza);

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

        $alianza = Alianza::find($id);
        $id = $alianza->id;

        $archivo = $request->File('avatar');

        if ($archivo != null) {
            
            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
            $imagen = Image::make($archivo);
            $imagen->resize(300, 300);
            $imagen->encode($extencion);
            $path = public_path('img/avatar/' . $name);
            $imagen->save($path);
            
            } else {
                
                $q = DB::table('alianzas')->where('id', '=', $id)->first();
                $name = $q->avatar;
            }

            
        $alianza->avatar = $name;
        $alianza->nombre_fantasia = $request->get('nombrefantasia');
        $alianza->razonSocial = $request->get('razonsocial');
        $alianza->cuit = $request->get('cuit');
        $alianza->email = $request->get('email');
        $alianza->celular = $request->get('celular');
        $alianza->comision = $request->get('comision');
        $alianza->hash = $request->get('hash');
        $alianza->link_cat = $request->get('linkcat');
        $alianza->link_promo = $request->get('linkpromo');
        $alianza->shipping = $request->get('shipping');
        $alianza->medios_pago = $request->get('mediosdepago');
        $alianza->link_saber_mas = $request->get('linksabermas');
        $alianza->descripcion= $request->get('descripcion');
        $alianza->rubro = $request->get('rubro');
        $alianza->q_hacer = $request->get('qhacer');
        $alianza->terminos = $request->get('terminos');
        $alianza->save();

        return redirect('/alianzas'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alianza = Alianza::find($id);
        $alianza->delete();
        return redirect('/alianza');
    }
}
