<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <div class="flex bg-white mx-auto my-4 p-4 rounded-lg border border-black max-w-5xl">
        <div class="grow">
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>ID:</h2>
                <h2>---</h2>
            </div>

            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Estado:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>DNI Solicitante:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Nombre Solicitante:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Apellido Solicitante:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Fecha Solicitud:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>CVU Solicitante:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Monto Reintegro:</h2>
                <h2>---</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Descripción:</h2>
                <h2>---</h2>
            </div>
        </div>
    </div>
</x-app-layout>
