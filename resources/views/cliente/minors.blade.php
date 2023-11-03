<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>
    <div class="">
        <h3 class="m-3 text-center text-3xl font-bold dark:text-white">Menores Registrados</h3>
            <div class="mx-auto max-h-80 max-w-5xl p-3 overflow-y-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @forelse ($clientMinors as $minor)
                    <div class="flex p-3 my-3 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="grow flex items-center justify-center">
                            <p class="m-1 text-lg text-gray-900 dark:text-white">DNI: {{ $minor->DNI }} </p>
                            <p class="m-1 text-lg text-gray-900 dark:text-white">Nombre: {{ $minor->lastName . ", " . $minor->firstName }}</p>
                        </div>
                    </div>
                @empty
                    <h3>Usted no tiene menores de edad asociados. </h3>
                @endforelse
            </div>
    </div>

</x-app-layout>
