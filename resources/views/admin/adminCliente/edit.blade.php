<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contenedor del formulario y la lista de planes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">
               <!-- Email Address -->
               <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- username -->
                <div class="mt-4">
                    <x-input-label for="username" :value="__('username')" />
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <!-- DNI -->
                <div class="mt-4">
                    <x-input-label for="DNI" :value="__('DNI')" />
                    <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="old('DNI')" required autocomplete="DNI" />
                    <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
                </div>

                <!-- firstName -->
                <div class="mt-4">
                    <x-input-label for="firstName" :value="__('First Name')" />
                    <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required />
                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                </div>

                <!-- lastName -->
                <div class="mt-4">
                    <x-input-label for="lastName" :value="__('Last Name')" />
                    <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required />
                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                </div>

                <!-- birthDate -->
                <div class="mt-4">
                    <x-input-label for="birthDate" :value="__('Birth Date')" />
                    <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')" required />
                    <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
                </div>

                <!-- birthplace -->
                <div class="mt-4">
                    <x-input-label for="birthplace" :value="__('birthplace')" />
                    <x-text-input id="birthplace" class="block mt-1 w-full" type="text" name="birthplace" :value="old('birthplace')" required />
                    <x-input-error :messages="$errors->get('birthplace')" class="mt-2" />
                </div>

                <!-- phone -->
                <div class="mt-4">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- address -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="plan" :value="__('Plan')" />
                    <select id="plan" name="plan" class="mt-1 block w-full" required>
                        <option value="plan1">Oro</option>
                        <option value="plan2">Plata</option>
                        <option value="plan3">Bronce</option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('plan')" />
                </div>

               

            </div>
            <a href="/admin/clientes" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out"> Volver </a>
            <a href="/admin/clientes" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out"> Guardar </a>

        </div>
        
    </div>
</x-app-layout>
