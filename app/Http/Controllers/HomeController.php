<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Suscripcion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $suscripciones = Suscripcion::all();
        return view('home', [
            'suscripciones' => $suscripciones,
        ]);
    }
}
