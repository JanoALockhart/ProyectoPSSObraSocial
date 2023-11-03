<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>

    <div class="flex flex-col items-center">
        <div>
            <a href="{{ route('register') }}" class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">
                Inscripción Cliente
            </a>
            <input type="text" id="searchInput" class="form-input w-64" placeholder="Buscar por DNI" pattern="[0-9]*" title="Ingrese solo números">
        </div>
        <div class="m-4 p-4 bg-white" style="width: 800px">
            <div class="m-4 p-4 bg-white">
                <!-- Listado de Clientes -->
                <div id="searchResults">
                    @foreach ($clients as $client)
                    <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                        <div class="flex-grow">
                            <h3 class="mx-2"><b>DNI:</b> {{ $client->DNI }}</h3>
                            <h3 class="mx-2"><b>Nombre:</b> {{ $client->firstName }} {{ $client->lastName }}</h3>
                            <h3 class="mx-2"><b>Plan Asociado:</b> {{ $client->plan }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Obtén la lista de clientes y almacénala en una variable clientes
        var clientes = {!! json_encode($clients) !!};

        // Función para realizar la búsqueda y actualizar la lista
        function buscarClientes(termino) {
            // Filtra los clientes por DNI
            var resultados = clientes.filter(function (cliente) {
                return cliente.DNI.includes(termino);
            });

            // Actualiza la lista de clientes con los resultados de la búsqueda
            mostrarResultados(resultados);
        }

        // Función para mostrar los resultados en la lista
        function mostrarResultados(resultados) {
            var resultsHtml = '';

            resultados.forEach(function (cliente) {
                resultsHtml += `
                    <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                        <div class="grow flex">
                            <h3 class="mx-2">DNI: ${cliente.DNI}</h3>
                            <h3 class="mx-2">Nombre: ${cliente.firstName} ${cliente.lastName}</h3>
                            <h3 class="mx-2">Plan Asociado: ${cliente.plan}</h3>
                        </div>
                    </div>
                `;
            });

            $('#searchResults').html(resultsHtml);
        }

        // Escucha cambios en el input de búsqueda
        $('#searchInput').on('input', function () {
            var termino = $(this).val();
            buscarClientes(termino);
        });
    });
</script>
