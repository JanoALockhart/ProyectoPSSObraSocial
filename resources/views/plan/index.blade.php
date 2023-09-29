<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Planes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contenedor del formulario y la lista de planes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">
                <!-- Formulario para agregar un nuevo plan -->
                <div class="mb-4">
                    <button id="btnAgregarPlan" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Agregar Plan</button>
                </div>

                <!-- Barra de búsqueda -->
                <div class="mb-4">
                    <input type="text" id="txtBusqueda" class="form-input w-full" placeholder="Buscar Plan">
                </div>

                <!-- Lista de elementos -->
                <ul id="listaPlanes" class="list-group">
                    <!-- Elemento 1 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Nombre del Plan 1</span>
                                <!-- Subítemes dentro del primer elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Prestación 1</li>
                                    <li>Prestación 2</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</button>
                                <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Dar de Baja</button>
                            </div>
                        </div>
                    </li>

                    <!-- Elemento 2 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Nombre del Plan 2</span>
                                <!-- Subítemes dentro del segundo elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Prestación 3</li>
                                    <li>Prestación 4</li>
                                </ul>
                            </div>
                            <div>
                                <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Modificar</button>
                                <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Dar de Baja</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    /* Estilo personalizado para los elementos de la lista */
    .custom-list-item {
        background-color: #f3f4f6; /* Cambia el fondo a un tono más gris */
        border-radius: 8px; /* Redondea los bordes */
        padding: 8px; /* Añade espaciado interno */
    }

    /* Estilo personalizado para los subítemes de la lista */
    .custom-sub-list {
        background-color: #f3f4f6; /* Cambia el fondo a un tono más gris */
        border-radius: 8px; /* Redondea los bordes */
        padding: 4px; /* Añade espaciado interno */
        list-style-type: none; /* Elimina las viñetas de la lista */
    }
</style>
