<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>

    <div class="flex bg-white mx-auto my-4 p-4 rounded-lg border border-black max-w-5xl">
        <div class="grow">
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>ID:</h2>
                <h2>{{ $refundRequest->id }}</h2>
            </div>

            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Estado:</h2>
                <h2>{{ $refundRequest->state }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>DNI Solicitante:</h2>
                <h2>{{ $refundRequest->recipient_DNI }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Nombre Solicitante:</h2>
                <h2>{{ $refundRequest->recipient_name }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Apellido Solicitante:</h2>
                <h2>{{ $refundRequest->recipient_last_name }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Fecha Solicitud:</h2>
                <h2>{{ $refundRequest->date }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>CBU Solicitante:</h2>
                <h2>{{ $refundRequest->CBU }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-000">
                <h2>Monto Reintegro:</h2>
                <h2>${{ $refundRequest->amount }}</h2>
            </div>
            <div class="flex justify-between p-2 bg-gray-200">
                <h2>Descripción:</h2>
                <h2>{{ $refundRequest->description }}</h2>
            </div>
        </div>
        <div class="">
            <img class="max-h-[calc(9*2.5rem)]" src="{{ asset($refundRequest->request_image_path) }}">
        </div>
            
            
            <div class="flex justify-end mt-4">
            <a href="{{route('empleado.solicitudes.cambioEstado', ['id' => $refundRequest->id, 'newState' => 'approved'])}}">
                <button id="aprobarButton" class="bg-green-500 hover:bg-green-700 text-white p-3 m-2 rounded">
                    Aprobar Solicitud
                </button>
            </a>
            <a href="{{route('empleado.solicitudes.cambioEstado',['id' => $refundRequest->id, 'newState' => 'disapproved'])}}">
                <button class="bg-red-500 hover:bg-red-700 text-white p-3 m-2 rounded">
                    Rechazar Solicitud
                </button>
            </div>
            </a>
        </div>
        <div class="">
            <img class="max-h-[calc(9*2.5rem)]" src="https://via.placeholder.com/360x480">
        </div>

    </div>


    



</x-app-layout>
