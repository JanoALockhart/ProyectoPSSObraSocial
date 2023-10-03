<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            {{ __('Perfil del Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-700 mx-auto">
                <form action="" method="POST" class="myForm">
                    @csrf

                    <div class="mb-4 align-center">
                        <label for="nombre" class="form-label">Nombre del empleado</label></br>
                        <input type="text" class="form-control " id="nombre" name="nombre" value="Cosme" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido del empleado</label></br>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="Fulanito" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="usuario" class="form-label">Nombre de Usuario</label></br>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="cosmefulanito">
                    </div>

                    <div class="mb-4">
                        <label for="contrasena" class="form-label">Contraseña</label></br>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" value="blablabla">
                    </div>

                    <div class="mb-4">
                        <label for="cargo" class="form-label">Cargo Asociado</label></br>
                        <input type="text" class="form-control" id="cargo" name="cargo" value="Vice Presidente Junior">
                    </div>

                    <div class="mb-4">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label></br>
                        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="01/01/1980" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="lugar_nacimiento" class="form-label">Lugar de Nacimiento</label></br>
                        <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" value="Bahia Blanca, Buenos Aires, Argentina" readonly>
                    </div>

                    <div class="mb-4">
                        <label for="domicilio" class="form-label">Domicilio</label></br>
                        <input type="text" class="form-control" id="domicilio" name="domicilio" value="Avenida Siempre Viva 742">
                    </div>

                    <div class="mb-4">
                        <label for="telefono" class="form-label">Teléfono</label></br>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="555-123-4567">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label></br>
                        <input type="text" class="form-control" id="email" name="email" value="cfulanito@example.com">
                    </div>

                    <!-- Botones -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar</button>
                        <button type="button" class="btn btn-secondary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Cancelar</button>
                        <a href="/employeeHome" class="btn btn-info border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Volver</a>
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
