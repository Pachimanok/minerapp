<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Crear Proyecto Laravel {{ $alianza }} :: MinerApp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
          code {
            color: gray;
          }
          code strong{
            color:blue;
            font-weight: 200;
          }
        </style>
</head>

<body>


    <section class="section cta-section">
        <div class="row align-items-center bg-primary mt-5 mb-4" style="background: #0F2027;
        background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
        background: linear-gradient(to right, #2C5364, #203A43, #0F2027);">
            <div class="col-md-10 mx-auto text-center text-md-start mb-5 mb-md-0" style="height: 8rem;">
                <h2 class="text-white pl-5 mt-5">Crear Proyecto </h2>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Se crea el Proyecto:
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>composer create-project laravel/laravel {Nombre del Proyecto}</code>
                                Resultado:
                                <code style="color:green;">
                                    <br> Package manifest generated successfully.
                                    <br> 74 packages you are using are looking for funding.
                                    <br> Use the `composer fund` command to find out more!
                                    <br> >php artisan key:generate --ansi
                                    <br> Application key set successfully.</code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Instalar Librerias.
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>cd {Nombre del Proyecto}</code>
                                Bootstrap
                                <code>npm install bootstrap</code>
                                Jquery
                                <code>npm install jquery</code>
                                Instalar popper.js 
                                <code>npm install popper.js --save</code>
                                Instalar Fortify
                                <code>composer require laravel/fortify</code>
                                Installar todas las librerias:
                                <code>npm install</code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tabla de Pedidos:
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code> CREATE TABLE `pedido{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `minaid` int(11) NOT NULL,
                                    `minero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `total` decimal(11,2) DEFAULT NULL,
                                    `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `observaciones` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `modo_pago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `horario_envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE
                                    current_timestamp(),
                                    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

                                    <br>
                                    <br>
                                    ALTER TABLE `pedido{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br>
                                    <br>
                                    ALTER TABLE `pedido{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
                                </code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Tabla Detalle de Pedidos:
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <code>CREATE TABLE `detallepedido{{ $alianza }}s` (
                                    `id` int(11) NOT NULL,
                                    `cantidad` int(11) NOT NULL,
                                    `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `idpedido` int(11) NOT NULL,
                                    `precio` decimal(11,0) NOT NULL,
                                    `user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL
                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
                                    <br>
                                    <br>
                                    ALTER TABLE `detallepedido{{ $alianza }}s`
                                    ADD PRIMARY KEY (`id`);
                                    <br>
                                    <br>
                                    ALTER TABLE `detallepedido{{ $alianza }}s`
                                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- controladores --}}
    <section class="section cta-section">
        <div class="row align-items-center bg-primary mt-5 mb-4" style="background: #0F2027;
      background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
      background: linear-gradient(to right, #2C5364, #203A43, #0F2027);">
            <div class="col-md-10 mx-auto text-center text-md-start mb-5 mb-md-0" style="height: 8rem;">
                <h2 class="text-white pl-5 mt-5">Controladores</h2>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        {{ $alianza }}Controller
                    </div>
                    <div class="card-body">
                        <code>
                            <br> namespace App\Http\Controllers;
                            <br> <strong>use Illuminate\Support\Facades\Auth;
                                <br> use Illuminate\Support\Facades\DB;
                                <br> use App\Models\pedido{{ $alianza }};</strong>
                            <br>
                            <br> use Illuminate\Http\Request;
                            <br>
                            <br> class {{ $alianza }}Controller extends Controller
                            <br> {
                            <br>
                            <br> public function index()
                            <br> {<strong>
                                <br> $usuario = Auth::user();
                                <br> $user = $usuario->name;
                                <br>
                                <br> $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '='
                                ,'si')->get();
                                <br> $rubros = DB::table('rubros{{ $alianza }}s')->get();
                                <br>
                                <br>
                                <br> if($usuario->role == 'minero'){
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> return view('{{ $alianza }}.catalogo')->with('mineros',
                                $minero)->with('user', $usuario)->with('rubros', $rubros)->with('articulos',
                                $articulos);
                                <br>
                                <br>
                                <br> }else{
                                <br>
                                <br> $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                                <br> $ali = $alianza[0];
                                <br> $articulos = DB::table('cat{{ $alianza }}')->get();
                                <br> return view('{{ $alianza }}.catalogo')->with('alianza', $ali)->with('user',
                                $usuario)->with('rubros', $rubros)->with('articulos', $articulos);
                                <br>
                                <br> }
                                <br> </strong>}
                            <br>
                            <br>
                            <br> public function create()
                            <br> { <strong>
                                <br> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br>
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br> $qmina = DB::table('minas')->where('user', '=' ,$user)->get();
                                <br>
                                <br> return view('{{ $alianza }}.minar')->with('mineros', $minero)->with('user',
                                $usuario)->with('minas', $qmina);
                                <br> </strong>}
                            <br>
                            <br> public function store(Request $request)
                            <br> {
                            <br> <strong> $usuario = Auth::user();
                                <br> $user = Auth::user()->name;
                                <br> $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                                <br> $minero = $min[0];
                                <br>
                                <br> $mina = $request->get('mina');
                                <br> $minas = DB::table('minas')->where('user', '=' ,$user)->where('id', '='
                                ,$mina)->get();
                                <br> $entrega = $minas;
                                <br>
                                <br> $pedido = new pedido{{ $alianza }}();
                                <br> $pedido->minaid = $mina;
                                <br> $pedido->minero= $user;
                                <br> $pedido->estado= 'comprando';
                                <br> $pedido->save();
                                <br>
                                <br> $id_pedido = pedido{{ $alianza }}::latest('id')->first();
                                <br>
                                <br> return view('{{ $alianza }}.minaseleccionada')->with('mineros',
                                $minero)->with('user', $usuario)->with('mina', $entrega);
                                <br>
                            </strong>}
                            <br>
                            <br>
                            <br> }
                        </code>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h2>catalogo{{ $alianza }}Controller 
                  </div>
                  <div class="card-body">
                    <code>
                     <br> namespace App\Http\Controllers;
                     <br> 
                     <br> use Illuminate\Http\Request;
                     <br> <strong>use Illuminate\Support\Facades\Auth;
                     <br> use Illuminate\Support\Facades\DB;
                     <br> use Intervention\Image\Facades\Image;
                     <br> use App\Models\cat{{ $alianza }};</strong>
                     <br> 
                     <br> 
                     <br> class catalogoController extends Controller
                     <br> {
                     <br>     
                     <br>     public function index()
                     <br>     {
                     <br>         <strong>
                     <br>          $usuario = Auth::user();
                     <br>          $user = $usuario->name;
                     <br>  

                     <br>  
                     <br>          if($usuario->role == 'minero'){
                     <br>  
                     <br>              $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                     <br>              $minero = $min[0];
                     <br>              $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br>              $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '=' ,'si')->get();
                     <br>          
                     <br>          /* redireccion a la vista */
                     <br>          return view('formularios.catalogo{{ $alianza }}')->with('rubros', $rubros)->with('user', $usuario)->with('mineros', $minero);
                     <br>  
                     <br>          }else{
                     <br>  
                     <br>              $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>              $ali = $alianza[0];
                     <br>              $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br>              $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '=' ,'si')->get();
                     <br>  
                     <br>              /* redireccion a la vista */
                     <br>             return view('formularios.catalogo{{ $alianza }}')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                     <br>  
                     <br>          }   
                    </strong>   
                     <br>     }
                     <br> 
                     <br>     
                     <br>     public function create()
                     <br>     {
                    <strong>
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>         $ali = $alianza[0];
                     <br> 
                     <br>         $rubros = DB::table('rubros{{ $alianza }}s')->get();            
                     <br>         $articulos = DB::table('cat{{ $alianza }}s')->get();
                     <br> 
                     <br>         return view('formularios.createArticulo{{ $alianza }}')->with('user', $usuario)->with('alianza', $ali)->with('rubros', $rubros);
                     <br> </strong>
                     <br>     }
                     <br>   
                     <br>     public function store(Request $request)
                     <br>     {<strong>
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $archivo = $request->File('foto');
                     <br>         $extencion = $archivo->getClientOriginalExtension();
                     <br>         $name = $archivo->getClientOriginalName();
                     <br> 
                     <br>         $imagen = Image::make($archivo);
                     <br>         
                     <br>         $imagen->resize(300,300);
                     <br>         $imagen->encode($extencion);
                     <br>         $path = public_path('img/{{ $alianza }}/' . $name);
                     <br>         /* hay que crear una Carpeta en public/img que se llame "{{ $alianza }}" */
                     <br>         $imagen->save($path);
                     <br> 
                     <br>         foreach($request->get('rubro') as $rubro )
                     <br>         foreach($request->get('activos') as $activos )
                     <br> 
                     <br>         $articulo = new cat{{ $alianza }}();        
                     <br>         $articulo->foto = $name;
                     <br>         $articulo->titulo = $request->get('titulo');
                     <br>         $articulo->description = $request->get('description');
                     <br>         $articulo->unidad = $request->get('unidad');
                     <br>         $articulo->preciouni = $request->get('preciouni');
                     <br>         $articulo->rubro = $rubro;
                     <br>         $articulo->activos = $activos;
                     <br>         $articulo->user = $user;
                     <br> 
                     <br>         $articulo->save();
                     <br> 
                     <br>         $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>         $ali = $alianza[0];
                     <br> 
                     <br>         $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br>         $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '=' ,'si')->get();
                     <br> 
                     <br>         return view('formularios.catalogo{{ $alianza }}')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);         
                     <br> </strong>
                     <br>     }
                     <br> 
                     <br>     
                     <br>     public function show($id)
                     <br>     {<strong>
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $articulo = DB::table('cat{{ $alianza }}s')->where('id','=',$id)->get();
                     <br> 
                     <br>         if($usuario->role == 'minero'){
                     <br>             $min = DB::table('mineros')->where('user_name', '=' ,$user)->get();
                     <br>             $minero = $min[0];
                     <br>             return view('formularios.articulo{{ $alianza }}')->with('articulo', $articulo)->with('user', $usuario)->with('mineros', $minero);
                     <br> 
                     <br>         }else{
                     <br>             
                     <br>             $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>             $ali = $alianza[0];
                     <br>             return view('formularios.articulo{{ $alianza }}')->with('articulo', $articulo)->with('user', $usuario)->with('alianza', $ali);
                     <br>         }</strong>
                     <br>     }

                     <br>     public function edit($id)
                     <br>     {<strong>
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $articulo = DB::table('cat{{ $alianza }}s')->where('id','=',$id)->get();
                     <br>         
                     <br>         $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>         $ali = $alianza[0];
                     <br>         $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br> 
                     <br> 
                     <br>         return view('formularios.editArticulo{{ $alianza }}')->with('articulo', $articulo)->with('rubros', $rubros)->with('user', $usuario)->with('alianza', $ali);
                     <br>     
                                </strong>}
                     <br> 
                     <br>     
                     <br>     public function update(Request $request, $id)
                     <br>     {<strong>
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $archivo = $request->File('foto');
                     <br> 
                     <br>         foreach($request->get('rubro') as $rubro )
                     <br>         foreach($request->get('activos') as $activos )
                     <br>             
                     <br>         if($archivo == null){
                     <br> 
                     <br>             $articulo = cat{{ $alianza }}::find($id);     
                     <br>             $articulo->titulo = $request->get('titulo');
                     <br>             $articulo->description = $request->get('description');
                     <br>             $articulo->unidad = $request->get('unidad');
                     <br>             $articulo->preciouni = $request->get('preciouni');
                     <br>             $articulo->rubro = $rubro;
                     <br>             $articulo->activos = $activos;
                     <br>             $articulo->user = $user;
                     <br>             $articulo->save();
                     <br> 
                     <br>             }else{
                     <br> 
                     <br>                 $extencion = $archivo->getClientOriginalExtension();
                     <br>                 $name = $archivo->getClientOriginalName();
                     <br> 
                     <br>                 $imagen = Image::make($archivo);
                     <br> 
                     <br>                 $imagen->resize(300,300);
                     <br>                 $imagen->encode($extencion);
                     <br>                 $path = public_path('img/{{ $alianza }}/' . $name);
                     <br>                 $imagen->save($path);
                     <br> 
                     <br>                 $articulo = cat{{ $alianza }}::find($id);     
                     <br>                 $articulo->foto = $name;
                     <br>                 $articulo->titulo = $request->get('titulo');
                     <br>                 $articulo->description = $request->get('description');
                     <br>                 $articulo->unidad = $request->get('unidad');
                     <br>                 $articulo->preciouni = $request->get('preciouni');
                     <br>                 $articulo->rubro = $rubro;
                     <br>                 $articulo->activos = $activos;
                     <br>                 $articulo->user = $user;
                     <br>                 $articulo->save();
                     <br> 
                     <br>             }
                     <br> 
                     <br>         $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>         $ali = $alianza[0];
                     <br> 
                     <br>         $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br>         $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '=' ,'si')->get();
                     <br>         
                     <br>         return redirect('/cat{{ $alianza }}')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                     <br> </strong>
                     <br>     }

                     <br>    
                     <br>     public function destroy($id)
                     <br>     {<strong>
                     <br> 
                     <br>         $usuario = Auth::user();
                     <br>         $user = $usuario->name;
                     <br> 
                     <br>         $articulo = cat{{ $alianza }}::find($id);
                     <br>         $articulo->delete();
                     <br>         
                     <br>         $alianza = DB::table('alianzas')->where('user', '=' ,$user)->get();
                     <br>         $ali = $alianza[0];
                     <br> 
                     <br>         $rubros = DB::table('rubros{{ $alianza }}s')->get();
                     <br>         $articulos = DB::table('cat{{ $alianza }}s')->where('activos', '=' ,'si')->get();
                     <br>         
                     <br>         return redirect('/cat{{ $alianza }}')->with('rubros', $rubros)->with('articulo', $articulos)->with('user', $usuario)->with('alianza', $ali);
                     <br>     
                            </strong>
                            }
                     <br> }
                      
                    </code>
                  </div>
                </div>
              </div>
          </div>





    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



</body>

</html>
