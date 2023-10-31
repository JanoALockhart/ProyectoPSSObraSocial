<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <h1 class="mt-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
        Solicitud de Prestación
    </h1>
    <div class="flex bg-white mx-auto mb-4 p-4 rounded-lg border border-black max-w-5xl">
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
        </div>
        <div class="">
            <img class="max-h-[calc(9*2.5rem)]" src="{{ asset($benefitRequest->request_image_path) }}">
        </div>
    </div>
</x-app-layout>
