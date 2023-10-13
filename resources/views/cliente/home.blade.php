<x-app-layout>
    <x-slot name="navbar">
        @include('navbars.clientNavbar')
    </x-slot>

    <!-- Add Carroussel -->

    <div id="default-carousel" class="relative m-4" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://dummyimage.com/1024x480/555/aaa" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://dummyimage.com/1024x480/000/aaa" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://dummyimage.com/1024x480/777/aaa" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Contenedor del formulario y la lista de planes -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 text-gray-700">
                <h1>Planes</h1>
                <ul id="listaPlanes" class="list-group ml-4"> <!-- Agregamos margen izquierdo -->
                    <!-- Elemento 1 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Nombre del Plan 1</span>
                                <!-- Subítemes dentro del primer elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Prestación 1</li>
                                    <li>Prestación 2</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- Elemento 2 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Nombre del Plan 2</span>
                                <!-- Subítemes dentro del segundo elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Prestación 3</li>
                                    <li>Prestación 4</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

                <h1>Promociones</h1>
                <ul id="listaPlanes" class="list-group ml-4"> <!-- Agregamos margen izquierdo -->
                    <!-- Elemento 1 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Promocion 1</span>
                                <!-- Subítemes dentro del primer elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Item 1 </li>
                                    <li>Item 2 </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- Elemento 2 con margen superior e inferior -->
                    <li class="custom-list-item mt-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-semibold">Promocion 2</span>
                                <!-- Subítemes dentro del primer elemento -->
                                <ul class="custom-sub-list ml-8">
                                    <li>Item 1 </li>
                                    <li>Item 2 </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Estilo personalizado para los encabezados -->
<style>
    h1 {
        font-size: 24px; /* Tamaño de fuente personalizado */
        font-weight: bold; /* Negrita */
        margin-top: 20px; /* Margen superior */
        margin-bottom: 10px; /* Margen inferior */
    }
</style>
