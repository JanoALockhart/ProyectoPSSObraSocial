<x-app-layout>
    <x-slot name="header">
        @switch($role)
            @case("client")
                @include('navbars.clientNavbar')
                @break
            @case("admin")
                @include('navbars.adminNavbar')
                @break 
            @case("employee")
                @include('navbars.employeeNavbar')
                @break
            @default
                @break
        @endswitch
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
