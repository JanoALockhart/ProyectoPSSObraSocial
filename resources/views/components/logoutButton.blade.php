<div class="p-3 hover:bg-gray-200 active:bg-gray-400 active:ring active:ring-black">
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf

        <a href="{{ route('deslogueado.home') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="flex flex-col items-center">
            <x-navbarIcons.cerrarSesion/>
            <h2>Cerrar Sesión</h2>
        </a>
    </form>
</div>