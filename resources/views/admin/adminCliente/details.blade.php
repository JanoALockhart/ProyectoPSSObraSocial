<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-center">
            {{ __('Detalles del Cliente') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg p-6">

        @csrf

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Nombre:</strong> {{ $client->user->firstName }} {{ $client->user->lastName }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">DNI:</strong> {{ $client->user->DNI }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Plan:</strong> {{ $client->plan }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Fecha de Registro:</strong> {{ $client->registration_date }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Fecha de Nacimiento:</strong> {{ $client->user->birthDate }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Domicilio:</strong> {{ $client->user->address }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Número de Teléfono:</strong> {{ $client->user->phone }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Email:</strong> {{ $client->user->email }}
        </div>

        <div class="mb-4">
            <strong class="text-lg text-blue-500">Estado:</strong> 
            <span :class="{ 'text-green-500': $client->user->state === 'Activo', 'text-red-500': $client->user->state === 'Inactivo' }">
                {{ $client->user->state === 'active' ? 'Activo' : 'Inactivo' }}
            </span>
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('admin.adminCliente.index')}}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">
                Volver
            </a>
        </div>
        
    </div>
</x-app-layout>
