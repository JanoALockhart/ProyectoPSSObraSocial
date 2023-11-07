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

                <!-- Barra de búsqueda por DNI -->
                <div class="mb-4">
                    <input type="text" id="txtBusqueda" class="form-input w-full" placeholder="Buscar por DNI">
                </div>

                <!-- Lista de elementos -->
                <ul id="listaEmpleados" class="list-group">
                    @foreach ($employees as $employee)
                        <li class="list-group-item flex justify-between items-center mt-2 mb-2">
                            <ul class="ml-8">
                                <li class="flex-grow font-semibold">Empleado: {{ $employee->user->firstName . ' ' . $employee->user->lastName }}</li>
                                <li>DNI: {{ $employee->user->DNI }}</li>
                                <li>Fecha de Registro: {{ $employee->registration_date }}</li>
                                <li>Estado: @if ($employee->user->state) Activo @else Inactivo @endif</li>
                            </ul>
                            <span class="flex items-center space-x-4">
                                <a href="empleados/details" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$employee->user->state) border border-gray @endif hover:bg-gray-700 hover-text-white transition duration-300 ease-in-out">Ver información</a>
                                <a href="empleados/edit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$employee->user->state) border border-gray @endif hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">Modificar</a>
                                <!-- Formulario para Dar de Baja/Alta -->
                                <form method="POST" action="{{ route('empleados.cambiarEstado', ['empleado' => $employee]) }}">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 @if (!$employee->user->state) border border-gray @endif hover:bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                                        @if ($employee->user->state)
                                            Dar de Baja
                                        @else
                                            Dar de Alta
                                        @endif
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

<!-- Script JavaScript para filtrar empleados por DNI -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Escucha cambios en el campo de búsqueda
        document.getElementById('txtBusqueda').addEventListener('input', function() {
            var termino = this.value.trim();
            filtrarEmpleadosPorDNI(termino);
        });

        // Función para filtrar empleados por DNI
        function filtrarEmpleadosPorDNI(termino) {
            var listaEmpleados = document.getElementById('listaEmpleados');
            var elementos = listaEmpleados.getElementsByClassName('list-group-item');

            for (var i = 0; i < elementos.length; i++) {
                var empleado = elementos[i];
                var dni = empleado.querySelector('li:nth-child(2)').textContent.split(': ')[1].trim(); // Extrae el DNI del elemento

                if (dni.includes(termino)) {
                    empleado.style.display = 'block'; // Muestra el elemento si coincide
                } else {
                    empleado.style.display = 'none'; // Oculta el elemento si no coincide
                }
            }
        }
    });
</script>
