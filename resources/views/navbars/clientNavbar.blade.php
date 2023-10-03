<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-3">
    <div class="flex justify-around">

        <x-navbarButton title="Home" route="{{ route('clientHome') }}">
            <x-navbarIcons.home/>
        </x-navbarButton>

        <x-navbarButton title="Solicitudes" route="{{ route('solicitudesCliente') }}">
            <x-navbarIcons.solicitud/>
        </x-navbarButton>

        <x-navbarButton title="Cupón de Pago" route="{{ route('cupon') }}">
            <x-navbarIcons.cupon/>
        </x-navbarButton>

        <x-navbarButton title="Perfil" route="{{ route('clientProfile') }}">
            <x-navbarIcons.perfil/>
        </x-navbarButton>

        <x-logoutButton />

    </div>
</nav>
