<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex justify-around">

        <x-navbarButton title="Home" route="{{ route('adminHome') }}">
            <x-navbarIcons.home/>
        </x-navbarButton>

        <x-navbarButton title="Clientes" route="{{ route('admin.adminCliente.index') }}">
            <x-navbarIcons.clients/>
        </x-navbarButton>

        <x-navbarButton title="Empleados" route="{{ route('admin.adminEmpleado.index') }}">
            <x-navbarIcons.employee/>
        </x-navbarButton>

        <x-navbarButton title="Solicitudes" route="{{ route('admin.solicitudes') }}">
            <x-navbarIcons.solicitud/>
        </x-navbarButton>

        <x-navbarButton title="Planes" route="{{ route('plans.index') }}">
            <x-navbarIcons.planes/>
        </x-navbarButton>

        <x-navbarButton title="Perfil" route="{{ route('profile.edit')}}">
            <x-navbarIcons.perfil/>
        </x-navbarButton>
        
        <x-logoutButton />
    </div>
</nav>
