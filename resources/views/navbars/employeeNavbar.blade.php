<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex justify-around">

        <x-navbarButton title="Home" route="">
            <x-navbarIcons.home/>
        </x-navbarButton>

        <x-navbarButton title="Clientes" route="">
            <x-navbarIcons.clients/>
        </x-navbarButton>

        <x-navbarButton title="Solicitudes" route="{{ route('empleado.solicitudes') }}">
            <x-navbarIcons.solicitud/>
        </x-navbarButton>

        <x-navbarButton title="Perfil" route="{{ route('employeeProfile') }}">
            <x-navbarIcons.perfil/>
        </x-navbarButton>

        <x-logoutButton />

    </div>
</nav>
