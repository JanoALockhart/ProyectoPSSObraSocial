
<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Alta de Plan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">
                <form method="POST" action="{{ route('plans.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block font-semibold">Nombre del Plan:</label>
                        <input type="text" id="name" name="name" class="form-input w-full rounded-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="min" class="block font-semibold">Edad Mínima:</label>
                        <input type="text" id="min_age" name="min_age" class="form-input w-full rounded-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="max" class="block font-semibold">Edad Máxima:</label>
                        <input type="text" id="max_age" name="max_age" class="form-input w-full rounded-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block font-semibold">Precio por Persona:</label>
                        <input type="text" id="price" name="price" class="form-input w-full rounded-full" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold">Prestaciones:</label>
                        <div id="prestations-container">
                            <div class="prestation mb-2">
                                <input type="text" name="prestations[0][name]" class="form-input w-1/2 rounded-full" placeholder="Nombre de la Prestación" required>
                                <input type="text" name="prestations[0][percentage]" class="form-input w-1/2 rounded-full" placeholder="Porcentaje de Cobertura" required>
                                <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Eliminar</button>
                            </div>
                        </div>
                        <button id="add-prestation" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Agregar Prestación</button>
                    </div>
                    <!-- Agrega aquí los campos adicionales del plan, como min_age, max_age, etc. -->
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar Plan</button>
                    </div>
                </form>
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
    document.addEventListener("DOMContentLoaded", function () {
        const prestationsContainer = document.getElementById("prestations-container");
        const addPrestationButton = document.getElementById("add-prestation");
        let prestationsCount = 0;

        addPrestationButton.addEventListener("click", function (e) {
            e.preventDefault();
            prestationsCount++;

            const newPrestation = document.createElement("div");
            newPrestation.classList.add("prestation", "mb-2");
            newPrestation.innerHTML = `
                <input type="text" name="prestations[${prestationsCount}][name]" class="form-input w-1/2 rounded-full" placeholder="Nombre de la Prestación" required>
                <input type="text" name="prestations[${prestationsCount}][percentage]" class="form-input w-1/2 rounded-full" placeholder="Porcentaje de Cobertura" required>
                <button class="btn btn-danger border border-gray-700 rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white transition duration-300 ease-in-out">Eliminar</button>
            `;

            prestationsContainer.appendChild(newPrestation);
        });

        prestationsContainer.addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("btn-danger")) {
                e.preventDefault();
                prestationsContainer.removeChild(e.target.parentElement);
            }
        });
    });
</script>
