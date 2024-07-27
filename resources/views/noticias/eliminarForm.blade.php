<?php
/** @var \App\Models\Noticia $noticia */
?>

<x-layout>
    <x-slot:title>Eliminar Noticia {{ $noticia->titulo }}</x-slot:title>
    <section class="relative mx-auto mt-20 w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="ml-20">
                <h1 class="font-bold text-red-600 text-2xl">¿Estás seguro que querés eliminar esta noticia?</h1>
                <div class="flex">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center mt-5 justify-between py-2.5 px-6 rounded-full bg-gray-400 text-white text-xs lg:xs font-bold hover:bg-gray-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Cancelar</a>
                    <form action="{{ route('noticias.eliminarProceso', ['id' => $noticia->noticia_id]) }}" method="POST" class="">
                        @csrf
                        <button type="submit" class="flex items-center mt-5 justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-xs lg:xs font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Confirmar</button>
                    </form>
                </div>
            </div>

            <div class="isolate overflow-hidden bg-white px-6 py-20 sm:py-32 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-10 lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                        <div class="lg:pr-4">
                            <div class="lg:max-w-full">
                                <p class="text-base font-semibold leading-7 text-red-600">{{ $noticia->escuderia->name }}</p>
                                <p class="mt-6 text-lg leading-8 text-gray-700">{{ $noticia->fecha_publicacion }}</p>
                                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $noticia->titulo }}</h1>
                                <p class="mt-6 text-lg leading-8 text-gray-700">{{ $noticia->descripcion }}</p>
                            </div>
                        </div>
                    </div>

                    @if ($noticia->portada != null && \Storage::exists($noticia->portada))
                        <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                            <img class="w-[48rem] max-w-full rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ \Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}">
                        </div>
                    @else
                        <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                            <img class="w-[48rem] max-w-full rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ url('asset/imagen-por-defecto.webp') }}" alt="imagen por defecto">
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
</x-layout>
