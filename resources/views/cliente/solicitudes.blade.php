<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <div class="flex flex-col">
        <a href="{{ route('nuevaSolicitud') }}" class="self-center mt-4">
            <button type="button" class="self:center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Nueva Solicitud
            </button>
        </a>
        <div class="grid grid-cols-2 gap-4">

            <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h3 class="m-3 text-center text-3xl font-bold dark:text-white">Solicitudes de Reintegro</h3>
                <div class="px-3 max-h-80 overflow-y-auto">
                    @foreach ($refundRequests as $refund)
                        <div class="flex p-3 my-3 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="grow flex items-center justify-center">
                                <p class="m-1 text-lg text-gray-900 dark:text-white">ID: {{ $refund->id }} </p>
                                <p class="m-1 text-lg text-gray-900 dark:text-white">ESTADO: {{ $refund->state }}</p>
                            </div>
                            <a href="{{ route('solicitud', $refund->id) }}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Ver
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h3 class="m-3 text-center text-3xl font-bold dark:text-white">Solicitudes de Prestaciones</h3>
                <div class="px-3 max-h-80 overflow-y-auto">
                    @foreach ($benefitRequests as $benefit)
                        <div class="flex p-3 my-3 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="grow flex items-center justify-center">
                                <p class="m-1 text-lg text-gray-900 dark:text-white">ID: {{ $benefit->id }} </p>
                                <p class="m-1 text-lg text-gray-900 dark:text-white">ESTADO: {{ $benefit->state }}</p>
                            </div>
                            <a href="{{ route('solicitud', $benefit->id) }}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Ver
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
