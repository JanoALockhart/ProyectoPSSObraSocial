<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <div class="grid grid-cols-2 gap-4 m-4 max-w-lg">
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                DNI
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->DNI }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Apellido
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->lastName }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Nombre
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->firstName }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Fecha de Nacimiento
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->birthDate }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Telefono
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->phone }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Dirección
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->address }}
            </p>
        </div>
        <div class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Email
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $clientData->email }}
            </p>
        </div>
    </div>


</x-app-layout>
