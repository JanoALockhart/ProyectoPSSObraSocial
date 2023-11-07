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

                <!-- Lista de elementos -->
                <ul id="listaPlanes" class="list-group">
                    @foreach ($employees as $employee)

                        <li class="list-group-item flex justify-between items-center mt-2 mb-2">
                            <ul class="ml-8">
                                <li>DNI: {{$employee->user->DNI}}</li>
                                <li>Fecha de Registro: {{ $employee->registration_date }}</li>
                                <li>Estado: @if ($employee->user->state) Activo @else Inactivo @endif</li>
                            </ul>
                            <span class="flex-grow font-semibold">{{$employee->user->firstName . ' ' . $employee->user->lastName}}</span>
                            <span>
                                <a href="{{ route('admin.adminEmpleado.details', ['employee' => $employee->DNI]) }}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Ver información</a>
                                <a href="{{ route('admin.adminEmpleado.edit', ['employee' => $employee->DNI]) }}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</a>
                                <form method="POST" action="{{ route('empleados.cambiarEstado', ['empleado' => $employee]) }}">
                                    @csrf
                                    @method('POST')
                                    <br/>
                                    <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$employee->user->state) border border-white @endif hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">
                                        {{ $employee->user->state ? 'Dar de Baja' : 'Dar de Alta' }}
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
