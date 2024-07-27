<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Noticia $noticia */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Escuderia[] $escuderias */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Categoria[] $categorias */
?>

<x-layout>
    <x-slot:title>Editar noticia: {{ $noticia->titulo }}</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="mb-3 font-semibold text-2xl">Editar noticia: <b><i>{{ $noticia->titulo }}</i></h1>
                    @if ($errors->any())
                        <div class="p-2 mb-2 text-base font-bold text-red-600 rounded-lg bg-red-50">* Hay errores en los datos del formulario.</div>
                    @endif
                    <form action="{{ route('noticias.editarProceso', ['id' => $noticia->noticia_id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="sm:col-span-4">
                                        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="titulo" id="titulo" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="Título de la noticia" value="{{ old('titulo', $noticia->titulo) }}">
                                            </div>
                                            @error('titulo')
                                                <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
                                        <div class="mt-2">
                                            <textarea id="descripcion" name="descripcion" rows="3"
                                                class="block w-full rounded-md border-0 py-1.5 ring-gray-300 font-normal placeholder:text-gray-400 sm:text-sm sm:leading-6">{{ old('descripcion', $noticia->descripcion) }}</textarea>
                                            @error('descripcion')
                                                <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="portada" class="block text-sm font-medium leading-6 text-gray-900">Portada actual</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                @if ($noticia->portada != null && \Storage::exists($noticia->portada))
                                                    <img src="{{ \Storage::url($noticia->portada) }}" alt="" />
                                                @else
                                                    <p class="relative font-semibold text-red-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-red-600 focus-within:ring-offset-2 hover:text-red-500">La noticia tiene una portada por defecto.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="portada"class="block text-sm font-medium leading-6 text-gray-900">Cambiar portada</span></label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                    <label for="portada" class="relative cursor-pointer rounded-md bg-white font-semibold text-red-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-red-600 focus-within:ring-offset-2 hover:text-red-500">
                                                        <span>Subir un archivo</span>
                                                        <input id="portada" name="portada" type="file"
                                                            class="sr-only">
                                                        @error('portada')
                                                            <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                                        @enderror
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('portada')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="portada_descripcion"
                                    class="block text-sm font-medium leading-6 text-gray-900">Descripción de la portada</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="portada_descripcion"
                                            id="portada_descripcion"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Ej: Imagen de autos iniciando la carrera."
                                            value="{{ old('portada_descripcion', $noticia->portada_descripcion) }}">
                                        @error('portada_descripcion')
                                            <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="fecha_publicacion"
                                    class="block text-sm font-medium leading-6 text-gray-900">Fecha de publicación</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-red-600 sm:max-w-md">
                                        <input type="text" name="fecha_publicacion" id="fecha_publicacion"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Fecha de publicacion" value="{{ old('fecha_publicacion', $noticia->fecha_publicacion) }}">
                                    </div>
                                    @error('fecha_publicacion')
                                        <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="escuderia_fk"
                                    class="block text-sm font-medium leading-6 text-gray-900">Escudería</label>
                                <div class="mt-2">
                                    <select id="escuderia_fk" name="escuderia_fk"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset  sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="">Elegí la Escudería</option>
                                        @foreach ($escuderias as $escuderia)
                                            <option value="{{ $escuderia->escuderia_id }}"
                                                @selected($escuderia->escuderia_id == old('escuderia_fk', $noticia->escuderia_fk))>
                                        {{ $escuderia->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('escuderia_fk')
                                        <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 space-y-10">
                            <fieldset>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Categorías</legend>
                                <div class="mt-2 space-y-6">
                                    <div class="relative flex gap-x-3">
                                        <div class="text-sm leading-6 space-y-3">
                                            @foreach ($categorias as $categoria)
                                            <label for="categoria_fks" class="flex h-6 items-center">
                                                <input type="checkbox" name="categoria_fks[]" class="h-4 w-4 rounded border-gray-300"
                                                value="{{ $categoria->categoria_id }}"
                                                @checked( in_array($categoria->categoria_id, old('categoria_fks', $noticia->categorias->pluck('categoria_id')->toArray()) ))>{{ $categoria->nombre }}
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="flex items-center justify-start gap-x-6 mb-20 mt-10">
                            <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
