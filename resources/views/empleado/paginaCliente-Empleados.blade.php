<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <div class="flex flex-col items-center">
        <div>
            <button class="w-64 bg-blue-500 hover:bg-blue-700 text-white p-3 m-2 rounded self-center">
                <a class="">Inscripción Cliente</a>
            </button>
            <button class="w-64 bg-blue-500 hover:bg-blue-700 text-white p-3 m-2 rounded self-center">
                <input type="text" placeholder="DNI Cliente" class="w-full p-3 border border-gray-300 rounded">
                <a class="">Buscar</a>
            </button>
        </div>
        <div class="grid grid-cols gap-4">
            <div class=" m-4 p-4 bg-white">
                <!-- Listado de Solicitudes. Modificar cuando se tengan datos-->
                <div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex">
                        <h3 class="mx-2">DNI: xxxx</h3>
                        <h3 class="mx-2">Nombre: xxxx</h3>                        
                        <h3 class="mx-2">Plan Asociado: xxxx</h3>
                    </div>
                    <select class="form-control" id="id_plan" name="id_plane" >
                        
                    </select required>
                </div><div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex">
                        <h3 class="mx-2">DNI: xxxx</h3>
                        <h3 class="mx-2">Nombre: xxxx</h3>                        
                        <h3 class="mx-2">Plan Asociado: xxxx</h3>
                    </div>
                    <select class="form-control" id="id_plan" name="id_plane" >
                        
                    </select required>
                </div><div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex">
                        <h3 class="mx-2">DNI: xxxx</h3>
                        <h3 class="mx-2">Nombre: xxxx</h3>                        
                        <h3 class="mx-2">Plan Asociado: xxxx</h3>
                    </div>
                    <select class="form-control" id="id_plan" name="id_plane" >
                        
                    </select required>
                </div><div class="flex bg-blue-200 p-2 rounded-lg border border-black my-3">
                    <div class="grow flex">
                        <h3 class="mx-2">DNI: xxxx</h3>
                        <h3 class="mx-2">Nombre: xxxx</h3>                        
                        <h3 class="mx-2">Plan Asociado: xxxx</h3>
                    </div>
                    <select class="form-control" id="id_plan" name="id_plane" >
                        
                    </select required>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>