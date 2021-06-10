<?php

namespace App\Http\Controllers;
use App\Models\Alianza;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;



use Illuminate\Http\Request;

class AlianzaController extends Controller
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
        return view('auth.registerAlianza');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $alianzas = new Alianza;
        $alianzas->nombre_fantasia =$request->get('fantasia');
        $alianzas->user =$request->get('user');
        $alianzas->cuit =$request->get('cuit');
        $alianzas->email =$request->get('email');
        $alianzas->celular =$request->get('celular');
        $alianzas->save();

       
        $users = new User;
        $users->name = $request->get('user');
        $users->email = $request->get('email');
        $users->password = Hash::make($request->get('password'));
        $users->role = 'alianza'; // usuario Alianza
        $users->save(); 

        $ali = DB::table('alianzas')->orderby('id', 'desc')->first();
        return view('Okalianza')->with('alianzas', $ali);



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
        $ali = DB::table('alianzas')->where('id','=', $id)->get();
        $alianza = $ali[0];

        return view('perfilAlianza')->with('alianza',$alianza)->with('user', $usuario);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $alianza->razonSocial = $request->get('razonSocial');
        $alianza->cuit = $request->get('cuit');
        $alianza->shipping = $request->get('shipping');
        $alianza->medios_pago = $request->get('medios_pago');
        $alianza->link_saber_mas = $request->get('link_saber_mas');
        $alianza->pagina_web = $request->get('pagina_web');
        $alianza->descripcion= $request->get('descripcion');
        $alianza->rubro = $request->get('rubro');
        $alianza->video = $request->get('video');
        $alianza->save();

        $ali = DB::table('alianzas')->where('id', '=', $id)->get();
        $alianza= $ali[0];

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
