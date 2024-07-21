<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    public function indexSuscripciones()
    {
        $suscripciones = Suscripcion::all();
        return view('suscripciones.index', [
            'suscripciones' => $suscripciones,
        ]);
    }
}

