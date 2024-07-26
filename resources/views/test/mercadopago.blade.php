<?php
/** @var $errors */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Suscripcion[] $suscripciones */
/** @var \MercadoPago\Resources\Preference $preference */

?>

<x-layout>
    <x-slot:title>Ckeckout</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">

                    <div class="relative flex flex-col w-full h-full text-gray-700">
                        <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                            <div class="flex flex-col justify-between gap-8 mb-4 md:flex-row md:items-center">
                                <div>
                                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ckeckout</h1>
                                    <p class="block mt-3 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                                        Esta es la suscripción que elegiste, una vez realices el pago, se actualizará automáticamente en tu perfil.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-900 uppercase bg-gray-100 dark:bg-gray-200 dark:text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                                        Plan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Cantidad
                                    </th>
                                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                                        Precio
                                    </th>
                                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                ?>
                                @foreach ($suscripciones as $suscripcion)
                                <tr class="">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $suscripcion->plan }}
                                    </th>
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $suscripcion->precio }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $suscripcion->precio }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="font-semibold text-gray-900">
                                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4">$ {{ $suscripcion->precio ?? 0 }}</td>
                                </tr>
                            </tfoot>
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
            preferenceId: '<?= $preference->id;?>'
        }
    });
</script>

</x-layout>
