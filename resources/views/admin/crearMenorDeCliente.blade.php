<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.adminNavbar')
    </x-slot>

    <div class="grow flex items-center justify-center"  >
        <form method="POST" action="{{ route('admin.storeMinorAdmin', $clientId)}}">
            <h3 class="m-5 font-bold dark:text-white">Asignar menor a {{ $clientName }}</h3>
            @csrf

            <div class="mb-4">
                <label for="nombre" class="form-label">Nombre del Menor</label><br>
                <input type="text" class="form-control" name="firstName">
            </div>

            <div class="mb-4">
                <label for="apellido" class="form-label">Apellido del Menor</label><br>
                <input type="text" class="form-control" name="lastName">
            </div>

            <div class="mb-4">
                <label for="DNI" class="form-label">DNI del Menor</label><br>
                <input type="number" class="form-control" name="DNI">
            </div>

            <div class="mb-4">
                <label for="Plan" class="form-label">Planes</label>
                <select class="form-select" name="plan">
                    @foreach($plans as $plan)
                    <option value="{{$plan->name}}">{{$plan->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="usuario" class="form-label">Fecha de nacimiento</label><br>
                <input type="date" class="form-control" name="birthDate">
            </div>

            <div class="mb-4">
                <label for="domicilio" class="form-label">Domicilio</label><br>
                <input type="text" class="form-control" name="address">
            </div>

            <div class="mb-4">
                <label for="telefono" class="form-label">Teléfono</label><br>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email</label><br>
                <input type="text" class="form-control" name="email" >
            </div>

            <input type="hidden" name="clientId" value="{{ $clientId }}">


            <div class="text-center">
                <button type="submit" class="btn btn-primary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Guardar</button>
                <a href="{{ route('admin.showClientMinors', $clientId) }}" class="btn btn-secondary border border-gray-700 rounded-full px-4 py-2 mr-2 hover:bg-gray-700 hover:text-white transition duration-300 ease-in-out">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
