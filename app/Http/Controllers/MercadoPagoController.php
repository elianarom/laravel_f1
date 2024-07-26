<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmacionDeSuscripcion;
use App\Models\Suscripcion;
use App\Models\User;
use App\Pagos\MercadoPagoPay;
use Illuminate\Http\Request;
use Mail;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function mostrar(Request $request)
    {
        $input = $request->only(['suscripcion_fk', 'id']);
        $suscripciones = Suscripcion::findOrFail($request->only(['suscripcion_fk']));

        $items = [];

        foreach($suscripciones as $suscripcion) {
            $items[] = [
                'title' => $suscripcion->plan,
                'quantity' => 1,
                'unit_price' => $suscripcion->precio
            ];
        }

        try {
            $payment = new MercadoPagoPay;
            $payment->setItems($items);
            $payment->setBackUrls(
                success: route('test.mercadopago.success', ['suscripcion_fk' => $input['suscripcion_fk'], 'id' => $input['id']]),
                pending: route('test.mercadopago.pending'),
                failure: route('test.mercadopago.failure'),
            );
            $payment->withAutoReturn();
            $preference = $payment->createPreference();

        } catch(\Throwable $e) {
            dd($e);
        }

        return view('test.mercadopago', [
            'suscripciones' => $suscripciones,
            'preference' => $preference,
            'mpPublicKey' => $payment->getPublicKey(),
            'suscripcion_fk' => $input['suscripcion_fk'],
            'id' => $input['id'],
            ]);
    }

    public function exitoProceso(Request $request, int $id, $suscripcion_fk)
    {
        $usuario = User::findOrFail($id);
        $input = (['suscripcion_fk' => $suscripcion_fk]);
        $usuario->update($input);

        return to_route('home')
            ->with('mensaje', 'Te suscribiste con éxito.');
    }

    public function pendienteProceso(Request $request)
    {
        dd($request->query);
    }

    public function errorProceso(Request $request)
    {
        dd($request->query);
    }
}
