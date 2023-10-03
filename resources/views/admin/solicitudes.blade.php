<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <div class="flex flex-col">
        <!-- <div class="w-128 m-2 rounded self-center flex"> -->
            <form class="max-w-5xl ">    
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ID Solicitud / Nombre Cliente" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        <!-- </div> -->
        
        <div class="grid grid-cols-2 gap-4">
            <div class=" m-4 p-4 bg-white">
                <h2 class="text-center mb-2">Solicitudes de Reintegro</h2>
                <!-- Listado de Solicitudes. Modificar cuando se tengan datos-->
                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudReintegro') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
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
                    <a href="{{ route('admin.solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>

                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex items-center justify-center">
                        <h3 class="mx-2">ID: ---</h3>
                        <h3 class="mx-2">ESTADO: ---</h3>
                    </div>
                    <a href="{{ route('admin.solicitudPrestaciones') }}"  class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 active:ring-2 active:ring-black">Ver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
