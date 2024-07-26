<?php

namespace App\Pagos;

use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Resources\Preference;

class MercadoPagoPay
{
    private string $accessToken;
    private string $publicKey;
    private array $items = [];
    private array $backUrls = [];
    private bool $autoReturn = false;

    public function __construct()
    {
        $this->accessToken = config('mercadopago.acces_token');
        $this->publicKey = config('mercadopago.public_key');

        if(strlen($this->accessToken) == 0) {
            throw new \Exception('No está definido el token de acceso de MP.');
        }

        if(strlen($this->publicKey) == 0) {
            throw new \Exception('No está definida la clave pública de MP.');
        }

        MercadoPagoConfig::setAccessToken($this->accessToken);
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setItems(array $items)
    {
        $this->items = $items;
    }

    public function setBackUrls(?string $success = null, ?string $pending = null, ?string $failure = null)
    {
        if(is_string($success)) $this->backUrls['success'] = $success;
        if(is_string($pending)) $this->backUrls['pending'] = $pending;
        if(is_string($failure)) $this->backUrls['failure'] = $failure;
    }

    public function withAutoReturn()
    {
        $this->autoReturn = true;
    }

    public function createPreference(): Preference
    {
        if(count($this->items) == 0) throw new \Exception('Tenés que definir los items del cobro.');

        $config = [
            'items' => $this->items
        ];
        if(count($this->backUrls)) $config['back_urls'] = $this->backUrls;
        if($this->autoReturn) $config['auto_return'] = 'approved';

        $preferenceFactory = new PreferenceClient();
        return $preferenceFactory->create($config);
    }
}
