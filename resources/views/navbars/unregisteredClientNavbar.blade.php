<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex">
        <div class="grow flex items-start p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.home/>
                <h2>Home</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.register/>
                <h2>Registrarse</h2>
            </a>
        </div>

        <div class="p-3">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <x-navbarIcons.perfil/>
                <h2>Iniciar Sesión</h2>
            </a>
        </div>
    </div>
</nav>
