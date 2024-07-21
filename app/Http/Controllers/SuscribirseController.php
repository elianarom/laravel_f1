<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmacionDeSuscripcion;
use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SuscribirseController extends Controller
{
    public function suscribirseProceso(int $id)
    {
        Mail::to(auth()->user())->send(new ConfirmacionDeSuscripcion(Suscripcion::findOrFail($id)));
        return to_route('home')
            ->with('mensaje', 'Te suscribiste con éxito.');
    }

    public function printEmail()
    {
        return new ConfirmacionDeSuscripcion(Suscripcion::findOrFail(1));
    }
}
