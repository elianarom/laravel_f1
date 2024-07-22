<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Suscripcion;
use App\Pagos\MercadoPagoPay;
use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    public function mostrar()
    {
        $suscripciones = Suscripcion::whereIn('suscripcion_id', [1])->get();

        $items = [];

        foreach($suscripciones as $suscripcion) {
            $items[] = [
                'title' => $suscripcion->plan,
                'unit_price' => $suscripcion->precio,
                'quantity' => 1,
            ];
        }

        try {
            $payment = new MercadoPagoPay;
            $payment->setItems($items);
            $payment->setBackUrls(
                success: route('test.mercadopago.success'),
                pending: route('test.mercadopago.pending'),
                failure: route('test.mercadopago.failure'),
            );
            $payment->whithAutoReturn();
            $preference = $payment->createPreference();

        } catch(\Throwable $e) {
            dd($e);
        }

        return view('test.mercadopago', [
            'suscripciones' => $suscripciones,
            'preference' => $preference,
            'mpPublicKey' => $payment->getPublicKey(),
            ]);
    }

    public function exitoProceso(Request $request)
    {
        dd($request->query);
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
