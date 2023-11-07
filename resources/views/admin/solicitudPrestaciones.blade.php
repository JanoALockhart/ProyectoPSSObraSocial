<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <div class="flex bg-white mx-auto my-4 p-4 rounded-lg border border-black max-w-5xl">
    <div class="grow">
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>ID:</h2>
                <h2>{{ $benefitRequest->id }}</h2>
            </div>

            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Estado:</h2>
                <h2>{{ $benefitRequest->state }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>DNI Solicitante:</h2>
                <h2>{{ $benefitRequest->recipient_DNI }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Nombre Solicitante:</h2>
                <h2>{{ $benefitRequest->recipient_name }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Apellido Solicitante:</h2>
                <h2>{{ $benefitRequest->recipient_last_name }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Fecha Solicitud:</h2>
                <h2>{{ $benefitRequest->date }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>CBU Solicitante:</h2>
                <h2>{{ $benefitRequest->CBU }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Monto Reintegro:</h2>
                <h2>${{ $benefitRequest->amount }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Descripción:</h2>
                <h2>{{ $benefitRequest->description }}</h2>
            </div>

            <div class="flex justify-end mt-4">
            <a href="{{route('admin.solicitudes.cambioEstado', ['id' => $benefitRequest->id, 'newState' => 'approved'])}}">
                <button id="aprobarButton" class="bg-green-500 hover:bg-green-700 text-white p-3 m-2 rounded">
                    Aprobar Solicitud
                </button>
            </a>
            <a href="{{route('admin.solicitudes.cambioEstado',['id' => $benefitRequest->id, 'newState' => 'disapproved'])}}">
                <button class="bg-red-500 hover:bg-red-700 text-white p-3 m-2 rounded">
                    Rechazar Solicitud
                </button>
            </div>
            </a>
            </div>
        </div>
    </div>
</x-app-layout>


