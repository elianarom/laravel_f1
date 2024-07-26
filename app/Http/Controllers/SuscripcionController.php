<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Suscripcion;
use App\Models\User;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    public function indexSuscripciones()
    {
        $suscripciones = Suscripcion::all();
        $user = auth()->user();

        $usuario = User::findOrFail($user->user_id);

        return view('suscripciones.index', [
            'suscripciones' => $suscripciones,
            'usuario' => $usuario,
        ]);
    }
}

