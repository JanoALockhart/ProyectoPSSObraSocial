<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Editar Plan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700">

                <form method="POST" action="{{ route('plans.update', $plan) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block font-semibold">Nombre del Plan:</label>
                        <input type="text" id="name" name="name" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $plan->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="min_age" class="block font-semibold">Edad Mínima:</label>
                        <input type="text" id="min_age" name="min_age" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $plan->min_age }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="max_age" class="block font-semibold">Edad Máxima:</label>
                        <input type="text" id="max_age" name="max_age" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $plan->max_age }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block font-semibold">Precio por Persona:</label>
                        <input type="text" id="price" name="price" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $plan->price }}" required>
                    </div>

                    <!-- Agrega aquí los campos para editar las prestaciones -->
                    @foreach ($plan->prestations as $prestation)
                        <div class="mb-4">
                            <label for="prestations[{{ $prestation->id }}][name]" class="block font-semibold">Nombre de la Prestación:</label>
                            <input type="text" id="prestations[{{ $prestation->id }}][name]" name="prestations[{{ $prestation->id }}][name]" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $prestation->name }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="prestations[{{ $prestation->id }}][percentage]" class="block font-semibold">Porcentaje de Cobertura:</label>
                            <input type="text" id="prestations[{{ $prestation->id }}][percentage]" name="prestations[{{ $prestation->id }}][percentage]" class="form-input w-full rounded-full px-4 py-2 hover-bg-gray-700 hover-text-white" value="{{ $prestation->percentage }}" required>
                        </div>
                    @endforeach

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar Cambios</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
