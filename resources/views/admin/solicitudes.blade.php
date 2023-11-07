<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <div class="flex flex-col">
        <div class="w-96 m-2 rounded self-center flex items-center">
            <input type="text" id="txtBusqueda" placeholder="Buscar solicitudes..." class="w-80 p-3 border border-gray-300 rounded">
            <button id="btnBuscar" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
            <button id="btnLimpiar" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Limpiar</button>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="m-4 p-4 bg-white">
                <h2 class="text-center mb-2">Solicitudes de Reintegro</h2>
                <ul id="refundRequestsList" class="custom-list">
                    @foreach ($refundRequests as $request)
                        <li class="custom-list-item">
                            <!-- Contenido de cada solicitud de Reintegro -->
                            <div class="custom-list-content">
                                Nombre: {{ $request->recipient_name }}<br>
                                Apellido: {{ $request->recipient_last_name }}<br>
                                Estado: {{ $request->state }}<br>
                                Fecha: {{ $request->date }}<br>
                            </div>
                            <a href="{{ route('admin.solicitudReintegro', $request->id) }}" class="custom-list-link">Ver</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="m-4 p-4 bg-white">
                <h2 class="text-center mb-2">Solicitudes de Prestaciones</h2>
                <ul id="benefitRequestsList" class="custom-list">
                    @foreach ($benefitRequests as $request)
                        <li class="custom-list-item">
                            <!-- Contenido de cada solicitud de Prestación -->
                            <div class="custom-list-content">
                                Nombre: {{ $request->recipient_name }}<br>
                                Apellido: {{ $request->recipient_last_name }}<br>
                                Estado: {{ $request->state }}<br>
                                Fecha: {{ $request->date }}<br>
                            </div>
                            <a href="{{ route('admin.solicitudPrestaciones', $request->id) }}" class="custom-list-link">Ver</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    /* Estilo personalizado para los elementos de la lista */
    .custom-list {
        list-style: none;
        padding: 0;
    }

    .custom-list-item {
        background-color: #f3f4f6;
        border-radius: 8px;
        margin: 10px 0;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .custom-list-content {
        flex: 1;
    }

    .custom-list-link {
        background-color: #3490dc;
        color: #fff;
        padding: 8px 12px;
        text-decoration: none;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .custom-list-link:hover {
        background-color: #2779bd;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btnBuscar').click(function () {
            realizarBusqueda();
        });

        $('#btnLimpiar').click(function () {
            $('#txtBusqueda').val('');
            realizarBusqueda();
        });

        function realizarBusqueda() {
            var searchTerm = $('#txtBusqueda').val().toLowerCase();

            $('.custom-list-item').each(function () {
                var requestContent = $(this).text().toLowerCase();

                if (requestContent.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
</script>
