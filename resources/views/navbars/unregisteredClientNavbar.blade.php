<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex justify-between">
        <div>
            <x-navbarButton title="Home" route="{{ route('dashboard') }}" class="justify-self-start">
                <x-navbarIcons.home/>
            </x-navbarButton>
        </div>
        <div class="flex">
            <x-navbarButton title="Registrarse" route="{{ route('dashboard') }}">
                <x-navbarIcons.register/>
            </x-navbarButton>

            <x-navbarButton title="Iniciar Sesion" route="{{ route('dashboard') }}">
                <x-navbarIcons.perfil/>
            </x-navbarButton>
        </div>
        
    </div>
</nav>
