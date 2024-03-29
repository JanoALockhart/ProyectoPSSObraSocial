<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo Electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- DNI -->
        <div class="mt-4">
            <x-input-label for="DNI" :value="__('DNI')" />
            <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="old('DNI')" required autocomplete="DNI" />
            <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
        </div>

        <!-- firstName -->
        <div class="mt-4">
            <x-input-label for="firstName" :value="__('Nombre')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>

        <!-- lastName -->
        <div class="mt-4">
            <x-input-label for="lastName" :value="__('Apellido')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <!-- birthDate -->
        <div class="mt-4">
            <x-input-label for="birthDate" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')" required />
            <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
        </div>

        <!-- phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Teléfono')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Domicilio')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="plan" :value="__('Plan')" />
            <select id="plan" name="plan" class="mt-1 block w-full" required>
                <option value="Bronce">Bronce</option>
                <option value="Plata">Plata</option>
                <option value="Oro">Oro</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('plan')" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya estoy registrado') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>

        
    </form>
</x-guest-layout>
