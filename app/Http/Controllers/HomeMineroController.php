<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class HomeMineroController extends Controller
{
    public function index()
    {
        $datos['autos']=Auto::paginate(7);

        return view('partials.principalMinero',$datos);
    }
}
