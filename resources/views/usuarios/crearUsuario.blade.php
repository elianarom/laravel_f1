<?php
/** @var $errors */
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Suscripcion[] $suscripciones */
?>

<x-layout>
    <x-slot:title>Registrate</x-slot:title>
    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="mb-3 font-semibold text-2xl">Registrar nuevo usuario</h1>
                    <form action="{{ route('usuarios.crearProceso') }}" method="post">
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="sm:col-span-4">
                                        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2           focus-within:ring-inset sm:max-w-md">
                                                <input type="text" name="nombre" id="nombre" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Nombre" value="{{ old('nombre') }}">
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
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                                                <input type="text" name="apellido" id="apellido"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="Apellido" value="{{ old('apellido') }}">
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
                                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                                                    <input type="email" name="email" id="email"
                                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                        placeholder="Email" value="{{ old('email') }}">
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
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                                                <input type="password" name="password" id="password"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="Password" value="{{ old('password') }}">
                                            </div>
                                            @error('password')
                                                <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="password_confirmation"
                                            class="block text-sm font-medium leading-6 text-gray-900">Confirmar contraseña</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset sm:max-w-md">
                                                <input type="password" name="password_confirmation" id="password_confirmation"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    placeholder="Confirmar contraseña" value="{{ old('password_confirmation') }}">
                                            </div>
                                            @error('password_confirmation')
                                                <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="suscripcion_fk"
                                            class="block text-sm font-medium leading-6 text-gray-900">Plan de Suscripción</label>
                                            <div class="pt-2 mb-4 text-sm text-amber-500 rounded-xl bg-amber-50 font-normal" role="alert">
                                                Para elegir tu plan de suscripción, <span class="font-semibold">primero tenés que registrate.</span><br> Una vez logueado, podrás realizar esta acción.
                                            </div>
                                        <div class="mt-2">
                                            <select id="suscripcion_fk" name="suscripcion_fk"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:max-w-xs sm:text-sm sm:leading-6" disabled>
                                                <option value="" >Seleccionar</option>
                                                @foreach ( $suscripciones as $suscripcion )
                                                <option value="{{ $suscripcion->suscripcion_id }}">
                                                    {{ $suscripcion->plan }}
                                                </option>
                                                @endforeach

                                            </select>
                                            @error('suscripcion_fk')
                                                <div class="mt-2 font-semibold text-xs text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 flex items-center justify-start gap-x-6">
                            <button type="submit"
                                class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Registrarme</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
