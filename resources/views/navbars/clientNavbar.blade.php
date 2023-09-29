<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex justify-around">
        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.home/>
                <h2>Home</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.solicitud/>
                <h2>Solicitudes</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.cupon/>
                <h2>Cupón de Pago</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.perfil/>
                <h2>Perfil</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('logout') }}" class="flex flex-col items-center">
                <x-navbarIcons.cerrarSesion/>
                <h2>Cerrar Sesión</h2>
            </a>
        </div>

    </div>
</nav>
