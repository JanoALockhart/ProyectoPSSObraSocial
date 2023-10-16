<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contenedor del formulario y la lista de empleados -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">
                <!-- Formulario para agregar un nuevo empleado -->
                <div class="mb-4">
                    <a href="empleados/create" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Agregar empleado</a>
                </div>

                <!-- Barra de búsqueda -->
                <div class="mb-4">
                    <input type="text" id="txtBusqueda" class="form-input w-full" placeholder="Buscar Empleado">
                </div>

                <!-- Lista de empleados -->
                <ul id="listaEmpleados" class="list-group">
                    @foreach($empleados as $empleado)
                    <li class="list-group-item flex justify-between items-center mt-2 mb-2 rounded-full px-4 py-2 @if (!$empleado->user->state) bg-gray-700 text-white rounded @endif" style="border: 1px solid @if (!$empleado->user->state) white @else white @endif;">
                        <!-- Subítemes dentro del elemento -->
                        <ul class="ml-8">
                            <li>DNI: {{ $empleado->DNI }}</li>
                            <li>Fecha de Registro: {{ $empleado->registration_date }}</li>
                            <li>Estado: @if ($empleado->user->state) Activo @else Desactivo @endif</li>
                            <!-- Agrega otros detalles si es necesario -->
                        </ul>
                        <span class="flex-grow font-semibold">{{ $empleado->user->name }}</span>
                        <span class="flex items-center space-x-4">
                            <a href="empleados/details" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$empleado->user->state) border border-white @endif hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Ver información</a>
                            <a href="empleados/edit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$empleado->user->state) border border-white @endif hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</a>
                            <!-- Formulario para Dar de Baja/Alta -->
                            <form method="POST" action="{{ route('empleados.cambiarEstado', ['empleado' => $empleado]) }}">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$empleado->user->state) border border-white @endif hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">
                                    {{ $empleado->user->state ? 'Dar de Baja' : 'Dar de Alta' }}
                                </button>
                            </form>
                        </span>
                    </li>                    
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
