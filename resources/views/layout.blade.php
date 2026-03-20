@vite('resources/css/app.css')
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi sitio web</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-800">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">

                <a href="/" class="text-2xl font-bold text-blue-600">
                    MiSitio
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="hover:text-blue-600 transition">Inicio</a>
                    <a href="/proyectos" class="hover:text-blue-600 transition">Proyectos</a>
                    <a href="/quienes-somos" class="hover:text-blue-600 transition">Quiénes somos</a>
                    <a href="/contacto" class="hover:text-blue-600 transition">
                        Contáctanos
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-20">

        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

            <!-- Logo -->
            <div>
                <h2 class="text-white text-2xl font-bold mb-4">
                    MiSitio
                </h2>
                <p class="text-gray-400 text-sm">
                    Construimos proyectos modernos con calidad
                    y diseño innovador para empresas y hogares.
                </p>
            </div>

            <!-- Links -->
            <div>
                <h3 class="text-white font-semibold mb-4">
                    Navegación
                </h3>

                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-white">Inicio</a></li>
                    <li><a href="/proyectos" class="hover:text-white">Proyectos</a></li>
                    <li><a href="/quienes-somos" class="hover:text-white">Quiénes somos</a></li>
                    <li><a href="/contacto" class="hover:text-white">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h3 class="text-white font-semibold mb-4">
                    Contacto
                </h3>

                <p class="text-sm">📍 Ciudad, País</p>
                <p class="text-sm">📞 +52 000 000 000</p>
                <p class="text-sm">✉ contacto@misitio.com</p>
            </div>

        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 text-center py-4 text-sm text-gray-500">
            © 2026 MiSitio. Todos los derechos reservados.
        </div>

    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <!-- BOTON WHATSAPP -->
    <div class="fixed bottom-6 right-6 flex flex-col items-end gap-2 z-50">

        <!-- Mensajito -->
        <div id="whatsapp-text" class="bg-white text-gray-800 text-sm px-4 py-2 rounded-lg shadow hidden">
            ¿Necesitas ayuda?
        </div>

        <!-- Botón -->
        <a href="https://wa.me/5215512345678?text=Hola%20quiero%20información" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition duration-300 animate-pulse">

            <!-- Icono -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">

                <path
                    d="M20.52 3.48A11.83 11.83 0 0012.05 0C5.49 0 .18 5.3.18 11.86c0 2.09.55 4.13 1.6 5.93L0 24l6.41-1.68a11.8 11.8 0 005.64 1.44h.01c6.56 0 11.87-5.3 11.87-11.86 0-3.17-1.23-6.15-3.41-8.42z" />
            </svg>

        </a>

    </div>

    <!-- SCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const text = document.getElementById("whatsapp-text");

            // Aparece después de 2 segundos
            setTimeout(() => {
                text.classList.remove("hidden");
            }, 2000);

        });
    </script>

</body>

</html>
