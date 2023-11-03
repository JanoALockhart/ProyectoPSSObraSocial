<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.employeeNavbar')
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Perfil del Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700 mx-auto">
                <form action="{{ route('employeeProfile') }}" method="POST" class="myForm">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre del empleado</label><br>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $employee->firstName }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido del empleado</label><br>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $employee->lastName }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="usuario" class="form-label">Nombre de Usuario</label><br>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $employee->email }}" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="domicilio" class="form-label">Domicilio</label><br>
                        <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $employee->address }}">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="form-label">Teléfono</label><br>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $employee->phone }}">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label><br>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                    </div>

                    <!-- Botones de Guardar, Cancelar y Volver -->

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