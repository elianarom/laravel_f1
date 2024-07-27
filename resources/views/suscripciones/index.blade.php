<x-layout>
    <x-slot:title>Suscripciones</x-slot:title>
    <section class="relative mx-auto mt-20 w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="md:text-center">
                <h1 class="font-display text-3xl tracking-tight text-black sm:text-4xl">Planes de Suscripción</h1>
                <p class="mt-4 text-lg text-slate-600">Elegí el plan de suscripción que querés contratar.</p>
            </div>

            <div class="-mx-4 mt-16 mb-20 grid max-w-2xl grid-cols-1 gap-y-10 sm:mx-auto lg:-mx-8 lg:max-w-none lg:grid-cols-3 xl:mx-0 xl:gap-x-8">

                @foreach ( $suscripciones as $suscripcion )
                    <div class="flex flex-col ml-5 mr-5 rounded-3xl px-6 sm:px-10 lg:py-16 bg-red-600 hover:bg-black">
                        <h2 class="mt-5 mb-10 font-bold text-3xl text-white">{{ $suscripcion->plan }}</h2>
                        <p class="order-first font-display text-5xl font-bold tracking-tight text-white"><span class="text-light text-2xl">$</span> {{ $suscripcion->precio }}</p>
                        @if ($suscripcion->suscripcion_id == 1)
                            <form action="{{ route('usuarios.editarUsuarioProceso', ['suscripcion_fk' => $suscripcion->suscripcion_id , 'id' => $usuario->user_id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button class="flex items-center justify-between py-2.5 px-6 rounded-full bg-white text-nlack text-sm lg:text-base font-bold  transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</button>
                            </form>
                        @else
                            <form action="{{ route('suscripciones.suscripcionProceso', ['suscripcion_fk' => $suscripcion->suscripcion_id , 'id' => $usuario->user_id]) }}" method="POST">
                                @csrf
                                <a href="{{ route('testMercadoPagoMostrar', ['suscripcion_fk' => $suscripcion->suscripcion_id , 'id' => $usuario->user_id]) }}" class="flex items-center justify-between py-2.5 px-6 rounded-full bg-white text-nlack text-sm lg:text-base font-bold  transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</a>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
