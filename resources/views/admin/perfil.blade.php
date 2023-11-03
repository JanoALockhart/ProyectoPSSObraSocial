<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Perfil del Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700 mx-auto">
            <form action="{{ route('adminEditProfile') }}" method="GET" class="myForm">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre del Admin</label><br>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $admin->firstName }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido del Admin</label><br>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $admin->lastName }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="domicilio" class="form-label">Domicilio</label><br>
                        <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $admin->address }}">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="form-label">Teléfono</label><br>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $admin->phone }}">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label><br>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $admin->email }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Editar</button>
                        <a href="/adminHome" class="btn btn-info border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Volver</a>
                    </div>
</form>

                
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    /* Estilo personalizado para los campos del formulario */
    .form-control {
        background-color: #f3f4f6; /* Cambia el fondo a un tono más gris */
        border-radius: 8px; /* Redondea los bordes */
        padding: 8px; /* Añade espaciado interno */
        width: 100%; /* Ajusta el ancho al 100% */
    }
    
</style>