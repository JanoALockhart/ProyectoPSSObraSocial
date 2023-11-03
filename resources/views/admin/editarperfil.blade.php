<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Editar Perfil del Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700 mx-auto">
                <form action="{{ route('adminUpdateProfile') }}" method="POST" class="myForm">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre del Admin</label><br>
                        <input type="text" class="form-control" name="firstName" value="{{ $admin->firstName }}">
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido del Admin</label><br>
                        <input type="text" class="form-control" name="lastName" value="{{ $admin->lastName }}">
                    </div>

                    <div class="mb-4">
                        <label for="usuario" class="form-label">Nombre de Usuario</label><br>
                        <input type="text" class="form-control" name="email" value="{{ $admin->email }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="domicilio" class="form-label">Domicilio</label><br>
                        <input type="text" class="form-control" name="address" value="{{ $admin->address }}">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="form-label">Teléfono</label><br>
                        <input type="text" class="form-control" name="phone" value="{{ $admin->phone }}">
                    </div>

                    <!-- Agrega más campos de edición si es necesario -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar</button>
                        <a href="{{ route('adminProfile') }}" class="btn btn-secondary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Cancelar</a>
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
