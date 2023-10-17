<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('admin.adminEmpleado.update', ['DNI' => $employee->user->DNI]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Información del Empleado</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="email" :value="__('Correo Electrónico')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$employee->user->email" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                
                            <div>
                                <x-input-label for="DNI" :value="__('DNI')" />
                                <x-text-input id="DNI" class="block mt-1 w-full" type="text" name="DNI" :value="$employee->user->DNI" required  />
                                <x-input-error :messages="$errors->get('DNI')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="firstName" :value="__('Nombre')" />
                                <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="$employee->user->firstName" required />
                                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="lastName" :value="__('Apellido')" />
                                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="$employee->user->lastName" required />
                                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="birthDate" :value="__('Fecha de Nacimiento')" />
                                <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="$employee->user->birthDate" required />
                                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="address" :value="__('Domicilio')" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$employee->user->address" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="phone" :value="__('Telefono')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$employee->user->phone" required />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                    
                    </div>

                    <div class="flex justify-between mt-6">
                        <a href="{{ route('admin.adminEmpleado.index')}}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Volver</a>
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar</button>
                    </div>

                </form>
        </div>
        
    </div>
</x-app-layout>
