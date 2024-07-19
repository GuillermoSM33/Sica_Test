<x-guest-layout>

    @section('title', 'SICA')

    <div class="h-screen flex items-center justify-center" style="background-color: #F5F5F5;">
        <div class="relative">
            <!-- Contenedor del gradiente RGB alrededor del formulario -->
            <div class="absolute -top-2 -left-2 -right-2 -bottom-2 rounded-lg bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 shadow-lg animate-pulse"></div>
            <!-- Contenedor del formulario -->
            <div id="form-container" class="bg-white p-16 rounded-lg shadow-2xl w-96 relative z-10 transform transition duration-500 ease-in-out">
                <h2 id="form-title" class="text-center text-3xl font-bold mb-10 text-gray-800">Inicio de Sesión</h2>
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-text-input id="email" class="w-full h-12 border border-gray-800 px-3 rounded-lg" type="email" name="email" :value="old('email')" required autofocus placeholder="Correo" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-text-input id="password" class="w-full h-12 border border-gray-800 px-3 rounded-lg" type="password" name="password" required placeholder="Contraseña" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="text-blue-500 hover:text-blue-800 text-sm" href="{{ route('password.request') }}">
                                {{ __('Olvidé Mi Contraseña') }}
                            </a>
                        @endif

                        <a href="/" class="text-blue-500 hover:text-blue-800 text-sm">{{ __('Ir al Inicio') }}</a>
                    </div>

                    <div class="flex justify-center mt-4">
                        <x-primary-button class="w-full h-12 flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Iniciar Sesión') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
