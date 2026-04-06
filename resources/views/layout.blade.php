<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio web</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body class="bg-white text-gray-800">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <a href="/" class="text-lg sm:text-2xl font-bold text-orange-600">
                    MiSitio
                </a>

                <button id="menu-btn" type="button" class="md:hidden text-2xl text-gray-700">
                    ☰
                </button>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="hover:text-orange-600 transition">Inicio</a>
                    <a href="/proyectos" class="hover:text-orange-600 transition">Proyectos</a>
                    <a href="/quienes-somos" class="hover:text-orange-600 transition">Quiénes somos</a>
                    <a href="/contacto" class="hover:text-orange-600 transition">Contáctanos</a>
                </div>
            </div>

            <div id="menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="/" class="py-2 hover:text-orange-600 transition">Inicio</a>
                    <a href="/proyectos" class="py-2 hover:text-orange-600 transition">Proyectos</a>
                    <a href="/quienes-somos" class="py-2 hover:text-orange-600 transition">Quiénes somos</a>
                    <a href="/contacto" class="py-2 hover:text-orange-600 transition">Contáctanos</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <h2 class="text-white text-2xl font-bold mb-4">MiSitio</h2>
                <p class="text-gray-400 text-sm">
                    Construimos proyectos modernos con calidad y diseño innovador.
                </p>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Navegación</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-white">Inicio</a></li>
                    <li><a href="/proyectos" class="hover:text-white">Proyectos</a></li>
                    <li><a href="/quienes-somos" class="hover:text-white">Quiénes somos</a></li>
                    <li><a href="/contacto" class="hover:text-white">Contacto</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold mb-4">Contacto</h3>
                <p class="text-sm">📍 Ciudad, País</p>
                <p class="text-sm">📞 +52 000 000 000</p>
                <p class="text-sm">✉ contacto@misitio.com</p>
            </div>
        </div>

        <div class="border-t border-gray-700 text-center py-4 text-sm text-gray-500">
            © 2026 MiSitio
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true
            });

            const btn = document.getElementById('menu-btn');
            const menu = document.getElementById('menu');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {

            const text = document.getElementById('whatsapp-text');

            function mostrarMensaje() {
                text.style.opacity = '1';
                text.style.display = 'block';

                // Se oculta después de 5 segundos
                setTimeout(() => {
                    text.style.opacity = '0';

                    setTimeout(() => {
                        text.style.display = 'none';
                    }, 500);

                }, 5000);
            }

            // Mostrar al cargar
            mostrarMensaje();

            // Repetir cada 20 segundos
            setInterval(mostrarMensaje, 20000);

        });
    </script>

    <!-- Contenedor WhatsApp -->
    <div class="fixed bottom-5 right-5 z-50 flex items-center gap-3">

        <!-- Burbuja -->
        <div id="whatsapp-text"
            class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg shadow-md text-sm hidden md:block transition-opacity duration-500">
            <span class="font-semibold text-blue-600">¿Necesitas ayuda?</span><br>
            Chatea con nosotros
        </div>

        <!-- Botón -->
        <a href="https://wa.me/9986947838?text=Hola,%20quiero%20información" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg flex items-center justify-center">

            <!-- Icono -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M20.52 3.48A11.79 11.79 0 0012.01 0C5.38 0 .02 5.36.02 11.99c0 2.11.55 4.17 1.6 6l-1.7 6.21 6.36-1.67a11.94 11.94 0 005.72 1.46h.01c6.63 0 12-5.36 12-11.99 0-3.2-1.25-6.21-3.49-8.52z" />
            </svg>
        </a>

    </div>

</body>

</html>
