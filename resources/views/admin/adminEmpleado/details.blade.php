<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-center">
            {{ __() }}
        </h2>
    </x-slot>
    <div class="max-w-md mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg p-6">
        <div class="max-w-md mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg p-6">
        @csrf

            <div class="mt-4">
                <strong class="text-lg text-blue-500">Nombre:</strong> {{ $employee->user->firstName }} {{ $employee->user->lastName }}
            </div>

            <div class="mt-4">
                <strong class="text-lg text-blue-500">DNI:</strong> {{ $employee->user->DNI }}
            </div>

            <div class="mt-4">
                <strong class="text-lg text-blue-500">Fecha de Nacimiento:</strong> {{ $employee->user->birthDate }}
            </div>

            <div class="mt-4">
                <strong class="text-lg text-blue-500">Domicilio:</strong> {{ $employee->user->address }}
            </div>

            <div class="mt-4">
                <strong class="text-lg text-blue-500">Número de Teléfono:</strong> {{ $employee->user->phone }}
            </div>

            <div class="mt-4">
                <strong class="text-lg text-blue-500">Email:</strong> {{ $employee->user->email }}
            </div>

            <div class="mb-4">
                <strong class="text-lg text-blue-500">Estado:</strong> 
                <span :class="{ 'text-green-500': $employee->user->state === 'Activo', 'text-red-500': $employee->user->state === 'Inactivo' }">
                    {{ $employee->user->state === 'active' ? 'Activo' : 'Inactivo' }}
                </span>
             </div>

          
        </div>

        <a href="{{ route('admin.adminEmpleado.index')}}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out"> Volver </a>

</div>
</x-app-layout>
