<x-layout>
    <x-slot:title>Iniciar sesión</x-slot:title>
        <section>
            <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-12">
                <div class="mx-auto text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Iniciar Sesión</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Ingresa tus credenciales para poder acceder.</p>
                </div>
                <form action="{{ route('auth.loginProceso') }}" method="POST" class="mx-auto mt-16 max-w-xs sm:mt-20">
                    @csrf
                    <div class="relative">
                        <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium" for="email">Email <svg width="8" height="8" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444"></path></svg>
                        </label>
                        <input type="email" id="email" class="block w-full max-w-xs px-4 py-2 text-sm font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none leading-relaxed" placeholder="ejemplo@mail.com" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="relative">
                        <label class="flex  items-center mb-2 text-gray-600 text-sm font-medium" for="password">Contraseña <svg width="8" height="8" class="ml-1" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z" fill="#EF4444"></path></svg>
                        </label>
                        <input type="password" id="password" class="block w-full max-w-xs px-4 py-2 text-sm font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none leading-relaxed" placeholder="● ● ● ● ● ● ● ● ● ●" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="mb-8 inline-flex gap-2 mt-10">
                        <button type="submit"
                            class="flex items-center justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-sm lg:text-base font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Ingresar
                        </button>
                    </div>
                    <div class="mb-3">
                        <p>¿Todavía no estás registrado? <a href="{{ route('usuarios.crearUsuario') }}" class="text-red-600 font-bold">Registrate</a></p>
                    </div>
                </form>
            </div>
        </section>
</x-layout>
