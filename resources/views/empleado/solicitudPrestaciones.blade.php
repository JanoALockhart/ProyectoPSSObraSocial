<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>

    <div class="flex bg-white mx-auto my-4 p-4 rounded-lg border border-black max-w-5xl">
        <div class="grow">
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>ID:</h2>
                <h2>---</h2>
            </div>

            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Estados:</h2>
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

            <div class="flex justify-end mt-4">
                <button class="bg-green-500 hover:bg-green-700 text-white p-3 m-2 rounded">
                    Aprobar Solicitud
                </button>
                <button class="bg-red-500 hover:bg-red-700 text-white p-3 m-2 rounded">
                    Rechazar Solicitud
                </button>
            </div>
        </div>
    </div>
</x-app-layout>


