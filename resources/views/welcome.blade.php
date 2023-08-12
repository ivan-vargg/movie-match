<x-app-layout>

    {{-- https://www.youtube.com/embed/wT0EXirvFIo --}}
    <div class="content">
        <div class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-50 z-0">
                {{-- Agregar banner imagen de la vista general del proyecto --}}
            </div>
            <div class="absolute inset-0 flex items-center justify-center z-10">

                <div class="text-white text-center">
                    <h1 class="text-4xl font-bold">Movie Match</h1>
                </div>
            </div>
        </div>

        {{-- DIV descripcion de suscripcion --}}
        <div class="py-16 px-4 dark:text-white">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-4">Elige tu plan</h2>
                <h3 class="text-xl font-medium mb-8">¿QUÉ ESTÁ INCLUIDO?</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="p-6 rounded-lg">
                        <h4 class="text-lg font-semibold mb-4">Suscripción básica</h4>
                        <ul class="list-disc list-inside">
                            <li>Detalle 1</li>
                            <li>Detalle 2</li>
                            <li>Detalle 3</li>
                        </ul>
                    </div>
                    <div class="p-6 rounded-lg">
                        <h4 class="text-lg font-semibold mb-4">Suscripción premium</h4>
                        <ul class="list-disc list-inside">
                            <li>Detalle 1</li>
                            <li>Detalle 2</li>
                            <li>Detalle 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- DIV Suscripcion --}}
        <div class="flex flex-col items-center md:flex-row justify-center mt-5">
            <div class="max-w-sm w-full mx-4 overflow-hidden bg-white rounded shadow-lg md:w-1/2">
                <div class="py-2 text-center text-white bg-blue-500 dark:bg-gray-700">
                    <span class="font-bold">Plan mensual</span>
                </div>
                <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold">Suscripción básica</div>
                    <p class="text-base text-gray-700">
                        Obtén acceso a funciones básicas y contenido exclusivo.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <p class="text-base text-gray-700">
                        Precio: $10/mes
                    </p>
                    <button class="px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Suscribirse
                    </button>
                </div>
            </div>

            <div class="max-w-sm w-full mx-4 mt-4 md:mt-0 overflow-hidden bg-white rounded shadow-lg md:w-1/2">
                <div class="py-2 text-center text-white bg-yellow-500">
                    <span class="font-bold">Ahorra 5 meses</span>
                </div>
                <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold">Suscripción premium</div>
                    <p class="text-base text-gray-700">
                        Obtén acceso completo a todas las funciones y contenido premium.
                    </p>
                </div>
                <div class="px-6 py-4">
                    <p class="text-base text-gray-700">
                        Precio: $20/mes
                    </p>
                    <button class="px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Suscribirse
                    </button>
                </div>
            </div>
        </div>

    </div>

    {{-- Pie de pagina --}}
    <footer class="text-center p-5 font-bold uppercase mt-10 text-white bg-black">

        <div class="inline-block md:flex items-center justify-around">
            <a href="http://www.twitter.com/DIFGUADALAJARA" class="inline-flex">
                <span class="m-1 block">Twitter</span>
                <img src="https://img.icons8.com/ios-glyphs/30/ffffff/twitter--v1.png" alt="Twitter"
                    class="w-6 h-6 m-1" />
            </a>
            <span class="text-white text-sm">Copyright &copy;
                <a class="link-light" href="https://difgdl.gob.mx" target="_blank">Movie Match
                    {{ now()->year }}</a>
            </span>
            <a href="https://www.facebook.com/dif.guadalajara" class="inline-flex">
                <span class="m-1 block">Facebook</span>
                <img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook.png" alt="Facebook"
                    class="w-6 h-6 m-1" />
            </a>
        </div>

    </footer>
</x-app-layout>
