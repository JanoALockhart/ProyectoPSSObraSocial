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
                <form method="POST" action="{{ route('admin.adminCliente.update', ['DNI' => $client->user->DNI]) }}">
                    @csrf
                    @method('PATCH')
                    <!-- Información del Usuario -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Información del Cliente</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="email" :value="__('Correo Electrónico')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$client->user->email" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Otros campos del usuario... -->
                
                            <div>
                                <x-input-label for="DNI" :value="__('DNI')" />
                                <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="$client->user->DNI" required  />
                                <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="firstName" :value="__('Nombre')" />
                                <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="$client->user->firstName" required />
                                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="lastName" :value="__('Apellido')" />
                                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="$client->user->lastName" required />
                                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="birthDate" :value="__('Fecha de Nacimiento')" />
                                <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="$client->user->birthDate" required />
                                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="address" :value="__('Domicilio')" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$client->user->address" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="phone" :value="__('Telefono')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$client->user->phone" required />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <!-- Agregar otros campos del cliente... -->
                    
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-between mt-6">
                        <a href="/admin/clientes" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Volver</a>
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
