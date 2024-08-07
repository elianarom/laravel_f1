<?php
/** @var \App\Models\Usuario $usuario */
/** @var $errors */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Suscripcion[] $suscripciones */
?>


<x-layout>
    <x-slot:title>Editar perfil: {{$usuario->nombre}} {{$usuario->apellido}}</x-slot:title>
    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="mb-3 font-semibold text-2xl">Editar perfil</h1>
                    @if ($errors->any())
                        <div class="p-2 mb-2 text-base font-bold text-red-600 rounded-lg bg-red-50">* Hay errores en los datos del formulario.</div>
                    @endif
                    <form action="{{ route('usuarios.editarUsuarioProceso', ['id' => $usuario->user_id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="sm:col-span-4">
                                        <label for="nombre"
                                            class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="nombre" id="nombre"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                     value="{{ old('nombre', $usuario->nombre) }}">
                                            </div>
                                            @error('nombre')
                                                    <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="apellido"
                                            class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="apellido" id="apellido"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                     value="{{ old('apellido', $usuario->apellido) }}">
                                            </div>
                                            @error('apellido')
                                                    <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="email" name="email" id="email"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                     value="{{ old('email', $usuario->email) }}">
                                            </div>
                                            @error('email')
                                                    <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="password"
                                            class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="password" name="password" id="password"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6" value="{{ old('password', $usuario->password) }}" disabled>
                                            </div>
                                            @error('password')
                                                    <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="justify-start mb-20">
                            <button class="py-3 px-8 bg-black shadow-sm rounded-full transition-all duration-500 text-lg text-white font-semibold text-center w-fit mx-auto hover:bg-red-700">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
