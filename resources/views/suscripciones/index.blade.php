<x-layout>
    <x-slot:title>Suscripciones</x-slot:title>
    <section class="relative mx-auto mt-20 w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="md:text-center">
                <h1 class="font-display text-3xl tracking-tight text-white sm:text-4xl">Planes de Suscripción</h1>
                <p class="mt-4 text-lg text-slate-400">Elegí el plan de suscripción que querés contratar.</p>
            </div>

            <div class="-mx-4 mt-16 grid max-w-2xl grid-cols-1 gap-y-10 sm:mx-auto lg:-mx-8 lg:max-w-none lg:grid-cols-3 xl:mx-0 xl:gap-x-8">

                @foreach ( $suscripciones as $suscripcion )
                <div class="flex flex-col rounded-3xl px-6 sm:px-8 lg:py-8">
                    <h2 class="mt-5 font-display text-lg text-black">{{ $suscripcion->plan }}</h2>
                    <p class="mt-2 text-base text-slate-400">{{ $suscripcion->descripcion }}</p>
                    <p class="order-first font-display text-5xl font-light tracking-tight text-black">{{ $suscripcion->precio }}</p>
                    <form action="{{ route('suscripciones.suscripcionProceso', ['id' => $suscripcion->suscripcion_id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-sm lg:text-base font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</button>
                    </form>
                </div>
                @endforeach
            </div>

    </section>
</x-layout>
