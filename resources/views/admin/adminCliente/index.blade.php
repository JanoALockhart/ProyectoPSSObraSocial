<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contenedor del formulario y la lista de planes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">

                <!-- Barra de búsqueda -->
                <div class="mb-4">
                    <input type="text" id="txtBusqueda" class="form-input w-full" placeholder="Buscar Cliente">
                </div>

                <!-- Lista de elementos -->
                <ul id="listaPlanes" class="list-group">
                    @foreach ($clients as $client)
                        <!-- Elemento con margen superior e inferior -->
                        <li class="list-group-item flex justify-between items-center mt-4 mb-4 bg-gray-100 p-4 rounded-lg">
                            <div class="flex-grow">
                                <span class="font-semibold text-lg">
                                    {{ $client->user->firstName . ' ' . $client->user->lastName }}
                                </span>
                                <p class="text-gray-600">DNI: {{ $client->DNI }}</p>
                                <p class="text-gray-600">PLAN: {{ $client->plan }}</p>
                                <p class="text-gray-600">FECHA INGRESO: {{ $client->registration_date }}</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('admin.adminCliente.details', ['client' => $client->DNI]) }}" class="btn btn-primary px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20a1 1 0 01-1 1H6a1 1 0 01-1-1V8a1 1 0 011-1h4l1-2h4l1 2h4a1 1 0 011 1v12z"></path>
                                    </svg>
                                    Ver información
                                </a>
                                <a href="{{ route('admin.adminCliente.edit', ['client' => $client->DNI]) }}" class="btn btn-primary px-4 py-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                                    <svg class="w-6 h-6" fill="#000000" stroke="currentColor" viewBox="0 0 494.936 494.936" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157    c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21    s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741    c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069    c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963    c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692    C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107    l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005    c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"></path>
                                    </svg>
                                    Modificar información
                                </a>
                                <button class="btn btn-danger px-4 py-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Dar de Baja
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>

<!-- Script JavaScript para filtrar clientes por DNI -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén la lista de clientes y almacénala en una variable
        var clientes = @json($clients);

        // Escucha cambios en el campo de búsqueda
        document.getElementById('txtBusqueda').addEventListener('input', function() {
            var termino = this.value;
            filtrarClientesPorDNI(termino);
        });

        // Función para filtrar clientes por DNI
        function filtrarClientesPorDNI(termino) {
            var listaClientes = document.getElementById('listaPlanes');
            var elementos = listaClientes.getElementsByClassName('list-group-item');

            for (var i = 0; i < elementos.length; i++) {
                var cliente = elementos[i];
                var dni = cliente.querySelector('.text-gray-600').textContent.split(':')[1].trim(); // Extrae el DNI del elemento

                if (dni.includes(termino)) {
                    cliente.style.display = 'block'; // Muestra el elemento si coincide
                } else {
                    cliente.style.display = 'none'; // Oculta el elemento si no coincide
                }
            }
        }
    });
</script>
