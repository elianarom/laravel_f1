

<x-layout>
    <x-slot:title>Panel de Estadísticas</x-slot:title>
    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">

                    <div class="relative flex flex-col w-full h-full text-gray-700 bg-white">
                        <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                            <div class="flex flex-col justify-between gap-8 mb-4 md:flex-row md:items-center">
                                <div>
                                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Panel de
                                        Estadísticas</h1>
                                    <p class="block mt-3 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                                        Acá vas a poder ver todas las estádisticas del sitio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="rounded-xl p-4 border border-solid border-gray-200 max-lg:h-[650px] lg:max-h-[276px] grid grid-cols-12">
    <div class="col-span-12 lg:col-span-12">
        <div class="grid grid-cols-4">

            <div class="border-r border-gray-200 pt-2 pr-4 pb-4 pl-2">
                <div class="rounded-lg p-2.5 bg-amber-50 w-max mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                      </svg>

                </div>
                <div class="flex items-center justify-between">

                    <h5 class="text-xl font-semibold text-gray-900 leading-8">
                        <?php
                        echo $user
                        ?>

                    </h5>
                </div>
                <h6 class="text-xs font-normal text-gray-500">Usuarios registrados</h6>
            </div>

            <div class="border-r border-gray-200 pt-2 pr-4 pb-4 pl-2">
                <div class="rounded-lg p-2.5 bg-amber-50 w-max mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                      </svg>
                </div>
                <div class="flex items-center justify-between">
                    <h5 class="text-xl font-semibold text-gray-900 leading-8"><?php
                        echo $suscripcion_basic
                        ?></h5>
                </div>
                <h6 class="text-xs font-normal text-gray-500">Plan Basic</h6>
            </div>

            <div class="border-r border-gray-200 pt-2 pr-4 pb-4 pl-2">
                <div class="rounded-lg p-2.5 bg-amber-50 w-max mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                      </svg>
                </div>
                <div class="flex items-center justify-between">
                    <h5 class="text-xl font-semibold text-gray-900 leading-8">
                        <?php
                        echo $suscripcion_medium
                        ?></h5>
                </div>
                <h6 class="text-xs font-normal text-gray-500">Plan Medium</h6>
            </div>

            <div class="pt-2 pr-4 pb-4 pl-2">
                <div class="rounded-lg p-2.5 bg-amber-50 w-max mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                      </svg>
                </div>
                <div class="flex items-center justify-between">
                    <h5 class="text-xl font-semibold text-gray-900 leading-8"><?php
                        echo $suscripcion_gold
                        ?></h5>
                </div>
                <h6 class="text-xs font-normal text-gray-500">Plan Gold</h6>
            </div>

        </div>
    </div>


</div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
