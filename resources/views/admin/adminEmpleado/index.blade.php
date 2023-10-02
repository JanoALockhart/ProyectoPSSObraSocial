<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contenedor del formulario y la lista de planes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">
                <!-- Formulario para agregar un nuevo plan -->
                <div class="mb-4">
                    <a href="empleados/create" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Agregar empleado</a>
                </div>

                <!-- Barra de búsqueda -->
                <div class="mb-4">
                    <input type="text" id="txtBusqueda" class="form-input w-full" placeholder="Buscar Empleado">
                </div>

                <!-- Lista de elementos -->
                <ul id="listaPlanes" class="list-group">
                    <!-- Elemento 1 con margen superior e inferior -->
                    <li class="list-group-item flex justify-between items-center mt-2 mb-2">
                        <span class="flex-grow font-semibold">Nombre del Empleado1</span>
                        <span>
                            <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Ver información</button>
                            <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</button>
                            <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Dar de Baja</button>
                        </span>
                    </li>
                    <!-- Subítemes dentro del primer elemento -->
                    <ul class="ml-8">
                        <li>DNI</li>
                        <li>CARGO</li>
                    </ul>

                    <!-- Elemento 2 con margen superior e inferior -->
                    <li class="list-group-item flex justify-between items-center mt-2 mb-2">
                        <span class="flex-grow font-semibold">Nombre del Empleado2</span>
                        <span>
                            <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Ver información</button>
                            <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</button>
                            <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Dar de Baja</button>
                        </span>
                    </li>
                    <!-- Subítemes dentro del segundo elemento -->
                    <ul class="ml-8">
                        <li>DNI</li>
                        <li>CARGO</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
