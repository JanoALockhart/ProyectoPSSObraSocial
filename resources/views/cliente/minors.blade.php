<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>
    <div class="">
        <h3 class="m-3 text-center text-3xl font-bold dark:text-white">Menores Registrados</h3>
            <div class="mx-auto max-h-80 max-w-5xl p-3 overflow-y-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @foreach ($clientMinors as $minor)
                    <div class="flex p-3 my-3 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="grow flex items-center justify-center">
                            <p class="m-1 text-lg text-gray-900 dark:text-white">DNI: {{ $minor->DNI }} </p>
                            <p class="m-1 text-lg text-gray-900 dark:text-white">Nombre: {{ $minor->lastName . ", " . $minor->firstName }}</p>
                            <p class="m-1 text-lg text-gray-900 dark:text-white">Plan Asociado: {{ $minor->dni }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

</x-app-layout>
