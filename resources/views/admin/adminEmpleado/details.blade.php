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
                Nombre empleado Apellido empleado
            </div>

            <div class="mt-4">
                DNI empleado
            </div>

            <div class="mt-4">
                cargo
            </div>

            <div class="mt-4">
                fecha de nacimiento
            </div>

            <div class="mt-4">
                Lugar de nacimiento
            </div>

            <div class="mt-4">
                Domicilio
            </div>

            <div class="mt-4">
                Número de teléfono
            </div>

            <div class="mt-4">
                Email
            </div>

          
        </div>

        <a href="empleados" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out"> Volver </a>

</div>
</x-app-layout>
