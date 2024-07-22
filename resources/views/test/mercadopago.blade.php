<?php
/** @var $errors */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Suscripcion[] $suscripciones */
/** @var \MercadoPago\Resources\Preference $preference */

?>

<x-layout>
    <x-slot:title>Prueba de Integración con Mercado Pago</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">

                    <div class="relative flex flex-col w-full h-full text-gray-700">
                        <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                            <div class="flex flex-col justify-between gap-8 mb-4 md:flex-row md:items-center">
                                <div>
                                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Prueba de Integración con Mercado Pago</h1>
                                    <p class="block mt-3 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                                        Acá vas a poder ver, editar y eliminar las noticias publicadas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 px-0">
                        <table class="w-full text-left table-auto min-w-max">
                            <thead>
                                <tr>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Plan</p>
                                    </th>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Precio</p>
                                    </th>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Cantidad</p>
                                    </th>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Subtotal</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                ?>
                                @foreach ($suscripciones as $suscripcion)
                                    <tr>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <div class="flex items-center gap-3">
                                                <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">{{ $suscripcion->plan }}</p>
                                            </div>
                                        </td>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            $ {{ $suscripcion->precio }}</p>
                                        </td>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            1</p>
                                        </td>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            $ {{ $suscripcion->precio }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        TOTAL</p>
                                    </td>
                                    <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        $ {{ $suscripcion->sum('precio') }}</p>
                                    </td>
                                </tr>
                                <?php
                                ?>
                            </tbody>
                        </table>
                        <div id="mercadopago-boton"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const mp = new MercadoPago('<?= $mpPublicKey;?>');
    mp.bricks().create('wallet', 'mercadopago-boton', {
        initialization: {
            preferenceId: '<?= $preference->id;?>',
        }
    });
</script>

</x-layout>
