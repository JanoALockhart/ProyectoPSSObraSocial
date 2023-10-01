<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <div class="flex flex-col">
        <button class="w-64 bg-blue-500 hover:bg-blue-700 text-white p-3 m-2 rounded self-center">
            <a class="">Nueva Solicitud</a>
        </button>
        <div class="grid grid-cols-2 gap-4">
            <div class=" m-4 p-4 bg-white">
                <h2 class="text-center mb-2">Solicitudes de Reintegro</h2>
                <!-- Listado de Solicitudes. Modificar cuando se tengan datos-->
                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>
            </div>

            <div class=" m-4 p-4 bg-white">
                <h2 class="text-center mb-2">Solicitudes de Prestaciones</h2>
                <!-- Listado de Solicitudes. Modificar cuando se tengan datos-->
                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
