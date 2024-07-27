

<x-layout>
    <x-slot:title>Panel de Estadísticas</x-slot:title>
    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8 mb-40">
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
                                        Acá vas a poder ver la cantidad de usuarios registrados en cada plan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-xl p-4 border border-solid border-gray-200 max-lg:h-[650px] lg:max-h-[276px] grid grid-cols-12 mt-10">
                            <div class="col-span-12 lg:col-span-12">
                                <div class="grid grid-cols-3">

                                    <div class="border-r border-gray-200 pt-2 pr-4 pb-4 pl-2">
                                        <div class="rounded-lg w-max mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-red-950">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <h5 class="text-3xl font-semibold text-gray-900 leading-loose">
                                                {{ $suscripcion_basic ?? 0 }}
                                            </h5>
                                        </div>
                                        <h6 class="text-s font-normal text-gray-500">Plan Basic</h6>
                                    </div>

                                    <div class="border-r border-gray-200 pt-2 pr-4 pb-4 pl-2">
                                        <div class="rounded-lg w-max mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-gray-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <h5 class="text-3xl font-semibold text-gray-900 leading-loose">
                                                {{ $suscripcion_medium ?? 0 }}
                                            </h5>
                                        </div>
                                        <h6 class="text-s font-normal text-gray-500">Plan Medium</h6>
                                    </div>

                                    <div class="pt-2 pr-4 pb-4 pl-2">
                                        <div class="rounded-lg w-max mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-yellow-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <h5 class="text-3xl font-semibold text-gray-900 leading-loose">
                                                {{ $suscripcion_gold ?? 0 }}
                                            </h5>
                                        </div>
                                        <h6 class="text-s font-normal text-gray-500">Plan Gold</h6>
                                    </div>

                                </div>
                            </div>


                        </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
