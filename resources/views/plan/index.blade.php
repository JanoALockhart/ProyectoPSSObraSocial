<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>
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
                    <a href="{{ route('plans.create') }}" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover-text-white transition duration-300 ease-in-out">Agregar Plan</a>
                </div>
                <div class="mb-4 flex">
                    <input type="text" id="txtBusqueda" class="form-input w-full rounded-full px-4 py-2" placeholder="Buscar Plan">
                    <button id="btnBuscar" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 ml-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                        Buscar
                    </button>
                </div>

                <ul id="listaPlanes" class="list-group">
                @foreach ($planes as $plan)
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Nombre:</span><span> {{ $plan->name }}</span></br>
                                <span class="font-semibold">Precio por Persona: </span><span> {{ $plan->price }} $</span></br>
                                <span class="font-semibold">Prestaciones:</span>
                                <ul class="custom-sub-list ml-8">
                                    @if ($plan->prestations)
                                        @foreach ($plan->prestations as $prestation)
                                            <li>{{ $prestation->name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div>
                            <button class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                                <a href="{{ route('plans.edit', $plan) }}" style="text-decoration: none; color: inherit;">Modificar</a>
                            </button>

                                <form method="POST" action="{{ route('plans.switch', $plan) }}">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-{{ $plan->state ? 'danger' : 'success' }} border border-gray-700 rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">
                                        {{ $plan->state ? 'Dar de Baja' : 'Dar de Alta' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btnBuscar').click(function () {
            var searchTerm = $('#txtBusqueda').val().toLowerCase();

            // Filtra los planes por el término de búsqueda
            $('#listaPlanes .custom-list-item').each(function () {
                var planName = $(this).text().toLowerCase();

                if (planName.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

