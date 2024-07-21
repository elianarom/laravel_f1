<?php

namespace App\Http\Controllers;

use App\Models\s;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function adminEstadisticas()
    {
        $usuarios = User::with('rols')->get();
        $suscripciones = User::with('suscripcion')->get();

        return view('admin.estadisticas', [
            'user' => $usuarios->filter(fn ($user) => $user->rols->contains('rol_id', 2))->count(),
            'admin' => $usuarios->filter(fn ($user) => $user->rols->contains('rol_id', 1))->count(),
            'suscripcion_none' => $suscripciones->filter(fn ($suscripcion) => $suscripcion->suscripcion->suscripcion_id == 0)->count(),
            'suscripcion_basic' => $suscripciones->filter(fn ($suscripcion) => $suscripcion->suscripcion->suscripcion_id == 1)->count(),
            'suscripcion_medium' => $suscripciones->filter(fn ($suscripcion) => $suscripcion->suscripcion->suscripcion_id == 2)->count(),
            'suscripcion_gold' => $suscripciones->filter(fn ($suscripcion) => $suscripcion->suscripcion->suscripcion_id == 3)->count(),
        ]);
    }
}
