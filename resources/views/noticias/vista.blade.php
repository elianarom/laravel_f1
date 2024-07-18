<?php
/** @var \App\Models\Noticia $noticia */
?>

<x-layout>
    <x-slot:title>{{ $noticia->titulo }}</x-slot:title>
    <section class="relative mx-auto mt-20 w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <nav class="flex ml-20" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    @auth
                    @if (auth()->user()->email == 'admin@mail.com')
                    <li class="inline-flex items-center text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <a href="{{ route('admin.dashboard') }}" href="javascript:;" class="inline-flex items-center text-base font-medium text-red-600 whitespace-nowrap pl-2 pr-5">Panel /</a>
                    </li>
                    @endif
                    @endauth
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                            <a href="{{ route('noticias.index') }}" class="ml-1 text-base font-medium text-gray-900 hover:text-red-600 md:ml-2 whitespace-nowrap">Noticias</a>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="isolate overflow-hidden bg-white px-6 py-20 sm:py-32 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-10 lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                        <div class="lg:pr-4">
                            <div class="lg:max-w-full">
                                <p class="text-base font-semibold leading-7 text-red-600">{{ $noticia->escuderia->name }}</p>
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
