<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>

    <div class="">
        <h3 class="m-3 text-center text-3xl font-bold dark:text-white">Menores Registrados de {{ $clientName }}</h3>
            <div class="mx-auto max-h-80 max-w-5xl p-3 overflow-y-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @forelse ($clientMinors as $minor)
                    @if ($minor->trashed())
                        <div class="flex p-3 my-3 bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="grow flex items-center justify-center">
                                <p class="m-1 text-lg text-gray-900 dark:text-white">DNI: {{ $minor->DNI }} </p>
                                <p class="m-1 text-lg text-gray-900 dark:text-white">Nombre: {{ $minor->lastName . ", " . $minor->firstName }}</p>
                            </div>
                            <form method="POST" action="{{ route('empleado.restoreMinor', $minor->id) }}">
                                @csrf
                                <button type="subit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Dar de Alta
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="flex p-3 my-3 bg-blue-200 border border-slate-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="grow flex items-center justify-center">
                                <p class="m-1 text-lg text-gray-900 dark:text-white">DNI: {{ $minor->DNI }} </p>
                                <p class="m-1 text-lg text-gray-900 dark:text-white">Nombre: {{ $minor->lastName . ", " . $minor->firstName }}</p>
                            </div>
                            <form method="POST" action="{{ route('empleado.softDeleteMinor', $minor->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    Dar de Baja
                                </button>
                            </form>
                        </div>
                    @endif

                @empty
                    <h3>El cliente no tiene menores asignados</h3>
                @endforelse
            </div>
    </div>


</x-app-layout>
