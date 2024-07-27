<?php
/** @var \App\Models\Herramienta[]|\Illuminate\Database\Eloquent\Collection $noticias */
?>

<x-layout>
    <x-slot:title>noticias</x-slot:title>
    <section class="relative mx-auto mt-20 mb-20 w-full max-w-container px-4 sm:px-6 lg:px-20">
        @if ($noticias->isNotEmpty())
            <div class="grid max-w-2xl grid-cols-3 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:items-start lg:gap-y-10">
                <?php
                ?>
                @foreach ($noticias as $noticia)
                    <div
                        class="mx-3 mt-6 flex flex-col rounded-lg border border-black bg-white text-black sm:shrink-0 sm:grow sm:basis-0">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat">
                            @if ($noticia->portada != null && Storage::exists($noticia->portada))
                                <a href="{{ route('noticias.vista', ['id' => $noticia->noticia_id]) }}">
                                    <img class="rounded-t-lg transition duration-300 ease-in-out hover:scale-110" src="{{ Storage::url($noticia->portada) }}" alt="{{ $noticia->portada_descripcion }}" />
                                </a>
                            @else
                                <a href="{{ route('noticias.vista', ['id' => $noticia->noticia_id]) }}">
                                    <img class="rounded-t-lg transition duration-300 ease-in-out hover:scale-110" src="{{ url('asset/imagen-por-defecto.webp') }}" alt="imagen por defecto" />
                                </a>
                            @endif
                        </div>
                        <div class="p-4">
                            @forelse ($noticia->categorias as $categoria)
                                <span class="border border-red-500 cursor-default text-red-500 shadow-sm rounded-full py-2 mt-2 px-5 text-xs font-semibold">{{ $categoria->nombre }}</span>
                                    @empty
                                        <span>Sin categoría.</span>
                                    @endforelse
                            <p class="text-lg font-semibold text-gray-900 mb-2 mt-5 transition-all duration-500 ">
                                {{ Str::limit($noticia->titulo, 40) }}
                            </p>
                            <p class="text-sm truncate font-normal text-gray-500 transition-all duration-500 leading-5 mb-5">
                                {{ $noticia->descripcion }}
                            </p>
                            <p class="text-xs font-semibold text-gray-900 mb-2 mt-5 transition-all duration-500 ">
                                Noticia sobre team <span class="text-red-500 font-medium">{{ $noticia->escuderia->name }}</span>
                            </p>
                            @if (!$noticia->updated_at == 'NULL')
                            <p class="text-xs font-semibold text-gray-500 mb-2 mt-5 transition-all duration-500 ">
                                Fecha de publicación:
                            </p>
                            @else
                            <p class="text-xs font-semibold text-gray-500 mb-2 mt-5 transition-all duration-500 ">
                                Fecha de publicación: {{ ($noticia->updated_at)->format('d F Y') }}
                            </p>
                            @endif
                        </div>
                    </div>
                @endforeach
                <?php
                ?>
            </div>

            {{ $noticias->links() }}
        @else
            <p>Actualmente no tenes noticias creadas. @auth Agregá una haciendo click <a href="{{ route('noticias.crearNoticia') }}">acá</a>@endauth
            </p>
        @endif
    </section>
</x-layout>
