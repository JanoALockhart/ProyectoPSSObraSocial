<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <div class="bg-white mx-auto my-4 p-4 rounded-lg border border-black max-w-5xl">
        <h3 class="text-2xl font-bold dark:text-white mb-3">Generar Cupon</h3>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Pago Mensual
        </button>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Pago Anual
        </button>
    </div>

</x-app-layout>
