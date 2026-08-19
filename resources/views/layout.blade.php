<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Proyectos modernos desarrollados con calidad, innovación y precisión.">

   <title>@yield('titulo', 'CABOMEP Solutions')</title>

<link rel="icon"
      type="image/webp"
      href="{{ asset('images/logos/isotipo-512.webp') }}">

@vite([
    'resources/css/app.css',
    'resources/js/app.js',
])

    <link rel="preconnect" href="https://unpkg.com">

    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">
</head>

<body class="bg-white text-[#000000] antialiased">

    {{-- Barra decorativa superior --}}
    <div class="h-1 bg-[#FFB400]"></div>

    {{-- Navegación --}}
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-black/10 shadow-sm">

        <nav class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between h-20">

                {{-- Logotipo --}}
<a href="{{ url('/') }}" class="group inline-flex items-center">
    <img
        src="{{ asset('images/logos/LOGO-FINAL-HORIZONTAL.webp') }}"
        alt="CABOMEP Solutions"
        class="h-14 sm:h-16 w-auto transition-transform duration-300 group-hover:scale-105">
</a>

                {{-- Navegación de escritorio --}}
                <div class="hidden md:flex items-center gap-1">

                    <a href="/"
                       class="group relative px-4 py-3 text-sm font-semibold text-[#000000]
                              transition-colors duration-300 hover:text-[#FFB400]">

                        Inicio

                        <span class="absolute bottom-1 left-4 right-4 h-0.5 bg-[#FFB400]
                                     scale-x-0 origin-left transition-transform duration-300
                                     group-hover:scale-x-100">
                        </span>
                    </a>

                    <a href="/proyectos"
                       class="group relative px-4 py-3 text-sm font-semibold text-[#000000]
                              transition-colors duration-300 hover:text-[#FFB400]">

                        Proyectos

                        <span class="absolute bottom-1 left-4 right-4 h-0.5 bg-[#FFB400]
                                     scale-x-0 origin-left transition-transform duration-300
                                     group-hover:scale-x-100">
                        </span>
                    </a>

                    <a href="/quienes-somos"
                       class="group relative px-4 py-3 text-sm font-semibold text-[#000000]
                              transition-colors duration-300 hover:text-[#FFB400]">

                        Quiénes somos

                        <span class="absolute bottom-1 left-4 right-4 h-0.5 bg-[#FFB400]
                                     scale-x-0 origin-left transition-transform duration-300
                                     group-hover:scale-x-100">
                        </span>
                    </a>

                    <a href="/contacto"
                       class="ml-4 inline-flex items-center gap-2 bg-[#FFB400] text-[#000000]
                              px-6 py-3 rounded-sm text-sm font-bold shadow-md
                              transition-all duration-300 hover:bg-[#000000]
                              hover:text-[#FFB400] hover:-translate-y-0.5">

                        Contáctanos

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>

                {{-- Botón móvil --}}
                <button
                    id="menu-btn"
                    type="button"
                    class="md:hidden w-11 h-11 flex items-center justify-center
                           bg-[#000000] text-[#FFB400] rounded-sm shadow-md
                           transition-transform duration-300 active:scale-95"
                    aria-label="Abrir menú"
                    aria-expanded="false">

                    <svg id="menu-icon"
                         xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="2">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg id="close-icon"
                         xmlns="http://www.w3.org/2000/svg"
                         class="hidden w-6 h-6"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="2">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

            {{-- Menú móvil --}}
            <div id="menu"
                 class="hidden md:hidden border-t border-black/10 py-5">

                <div class="flex flex-col gap-2">

                    <a href="/"
                       class="px-4 py-3 font-semibold text-[#000000]
                              border-l-4 border-transparent
                              hover:border-[#FFB400] hover:bg-[#FFB400]/10
                              transition-all duration-300">
                        Inicio
                    </a>

                    <a href="/proyectos"
                       class="px-4 py-3 font-semibold text-[#000000]
                              border-l-4 border-transparent
                              hover:border-[#FFB400] hover:bg-[#FFB400]/10
                              transition-all duration-300">
                        Proyectos
                    </a>

                    <a href="/quienes-somos"
                       class="px-4 py-3 font-semibold text-[#000000]
                              border-l-4 border-transparent
                              hover:border-[#FFB400] hover:bg-[#FFB400]/10
                              transition-all duration-300">
                        Quiénes somos
                    </a>

                    <a href="/contacto"
                       class="mt-2 text-center bg-[#FFB400] text-[#000000]
                              px-5 py-3 font-bold rounded-sm
                              hover:bg-[#000000] hover:text-[#FFB400]
                              transition-colors duration-300">
                        Contáctanos
                    </a>

                </div>
            </div>

        </nav>
    </header>

    {{-- Contenido de las vistas --}}
    <main class="min-h-[60vh]">
        @yield('contenido')
    </main>

    {{-- Footer --}}
    <footer class="relative mt-20 bg-[#000000] text-white overflow-hidden">

        {{-- Decoración --}}
        <div class="absolute top-0 right-0 w-64 h-64 bg-[#FFB400]/10 rounded-full blur-3xl"></div>

        <div class="h-1 bg-[#FFB400]"></div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                {{-- Marca --}}
                <div class="lg:col-span-2">

                    <a href="/"
                       class="inline-flex items-center gap-3 mb-6">

<a href="{{ url('/') }}" class="inline-flex items-center">
    <img
        src="{{ asset('images/logos/LOGO FINAL HORIZONTAL FONDO NEGRO (1).webp') }}"
        alt="CABOMEP Solutions"
        class="h-20 w-auto">
</a>
                    </a>
                </div>

                {{-- Navegación --}}
                <div>

                    <h3 class="text-[#FFB400] font-bold uppercase tracking-wider text-sm mb-6">
                        Navegación
                    </h3>

                    <ul class="space-y-4 text-sm">

                        <li>
                            <a href="/"
                               class="inline-flex items-center gap-2 text-[#707070]
                                      hover:text-white hover:translate-x-1
                                      transition-all duration-300">
                                <span class="text-[#FFB400]">—</span>
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="/proyectos"
                               class="inline-flex items-center gap-2 text-[#707070]
                                      hover:text-white hover:translate-x-1
                                      transition-all duration-300">
                                <span class="text-[#FFB400]">—</span>
                                Proyectos
                            </a>
                        </li>

                        <li>
                            <a href="/quienes-somos"
                               class="inline-flex items-center gap-2 text-[#707070]
                                      hover:text-white hover:translate-x-1
                                      transition-all duration-300">
                                <span class="text-[#FFB400]">—</span>
                                Quiénes somos
                            </a>
                        </li>

                        <li>
                            <a href="/contacto"
                               class="inline-flex items-center gap-2 text-[#707070]
                                      hover:text-white hover:translate-x-1
                                      transition-all duration-300">
                                <span class="text-[#FFB400]">—</span>
                                Contacto
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- Contacto --}}
                <div>

                    <h3 class="text-[#FFB400] font-bold uppercase tracking-wider text-sm mb-6">
                        Contacto
                    </h3>

                    <div class="space-y-5 text-sm">

                        <!-- UBICACIÓN 1 -->
<a href="https://maps.app.goo.gl/YyGTGmVkieefBVQV8"
   target="_blank"
   rel="noopener noreferrer"
   class="flex items-start gap-3 group">

    <div class="w-9 h-9 shrink-0 bg-[#FFB400]/10
                flex items-center justify-center text-[#FFB400] rounded-sm
                group-hover:bg-[#FFB400]/20 transition">
        📍
    </div>

    <div>
        <span class="block text-white font-semibold mb-1
                     group-hover:text-[#FFB400] transition">
            Ubicación
        </span>

        <span class="text-[#707070] group-hover:text-white transition">
            Cancún, Q.R.
        </span>
    </div>
</a>


<!-- UBICACIÓN 2 -->
<a href="https://maps.google.com/?q=23.106812,-109.725166"
   target="_blank"
   rel="noopener noreferrer"
   class="flex items-start gap-3 group mt-4">

    <div class="w-9 h-9 shrink-0 bg-[#FFB400]/10
                flex items-center justify-center text-[#FFB400] rounded-sm
                group-hover:bg-[#FFB400]/20 transition">
        📍
    </div>

    <div>
        <span class="block text-white font-semibold mb-1
                     group-hover:text-[#FFB400] transition">
            Ubicación 2
        </span>

        <span class="text-[#707070] group-hover:text-white transition">
            San José del Cabo, B.C.S., México
        </span>
    </div>
</a>

                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 shrink-0 bg-[#FFB400]/10
                                        flex items-center justify-center text-[#FFB400] rounded-sm">
                                📞
                            </div>

                            <div>
                                <span class="block text-white font-semibold mb-1">
                                    Teléfono
                                </span>

                                <a
                                    href="tel:+5219981362855"
                                    class="block
                                           hover:text-[#FDB000]
                                           transition-colors
                                           duration-300"
                                >
                                    +52 1 998 136 2855
                                </a>

                                <a
                                    href="tel:+526242442501"
                                    class="block
                                           hover:text-[#FDB000]
                                           transition-colors
                                           duration-300"
                                >
                                    +52 624 244 2501
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 shrink-0 bg-[#FFB400]/10
                                        flex items-center justify-center text-[#FFB400] rounded-sm">
                                ✉
                            </div>

                            <div>
                                <span class="block text-white font-semibold mb-1">
                                    Correo
                                </span>

                                <a href="mailto:ventasycotizaciones@cabomepsolutions.com"
                                   class="text-[#707070] hover:text-[#FFB400] transition-colors break-all">
                                    ventasycotizaciones@cabomepsolutions.com
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Derechos --}}
        <div class="relative border-t border-white/10">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-5
                        flex flex-col sm:flex-row items-center justify-between gap-3">

                <p class="text-xs text-[#707070]">
                    © {{ date('Y') }} MiSitio. Todos los derechos reservados.
                </p>

                <p class="text-xs text-[#707070]">
                    Diseñado con
                    <span class="text-[#FFB400] font-semibold">calidad y precisión</span>
                </p>
            </div>

        </div>
    </footer>

    {{-- WhatsApp --}}
    <div class="fixed bottom-5 right-5 z-50 flex items-center gap-3">

        {{-- Mensaje --}}
        <div id="whatsapp-text"
             class="hidden opacity-0 bg-[#000000] text-white
                    px-5 py-3 rounded-sm shadow-2xl
                    border-l-4 border-[#FFB400]
                    transition-opacity duration-500">

            <span class="block text-sm font-bold text-[#FFB400]">
                ¿Necesitas ayuda?
            </span>

            <span class="text-xs text-white/70">
                Chatea con nosotros
            </span>
        </div>

        {{-- Botón --}}
        <a href="https://wa.me/9981362855?text=Hola,%20quiero%20información"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="Contactar por WhatsApp"
           class="relative w-14 h-14 bg-[#FFB400] text-[#000000]
                  flex items-center justify-center rounded-full shadow-2xl
                  transition-all duration-300 hover:bg-[#000000]
                  hover:text-[#FFB400] hover:-translate-y-1">

            <span class="absolute inset-0 rounded-full border-2 border-[#FFB400]
                         animate-ping opacity-20">
            </span>

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="relative w-7 h-7"
                 fill="currentColor"
                 viewBox="0 0 24 24">

                <path d="M20.52 3.48A11.79 11.79 0 0012.01 0C5.38 0 .02 5.36.02 11.99c0 2.11.55 4.17 1.6 6l-1.7 6.21 6.36-1.67a11.94 11.94 0 005.72 1.46h.01c6.63 0 12-5.36 12-11.99 0-3.2-1.25-6.21-3.49-8.52z" />
            </svg>
        </a>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /*
             * Animaciones AOS
             */
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 900,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 80,
                    anchorPlacement: 'top-bottom'
                });
            }

            /*
             * Menú móvil
             */
            const menuButton = document.getElementById('menu-btn');
            const menu = document.getElementById('menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            if (menuButton && menu) {
                menuButton.addEventListener('click', function () {

                    const isHidden = menu.classList.toggle('hidden');

                    menuButton.setAttribute(
                        'aria-expanded',
                        String(!isHidden)
                    );

                    menuIcon?.classList.toggle('hidden');
                    closeIcon?.classList.toggle('hidden');
                });
            }

            /*
             * Cerrar el menú móvil al elegir una opción
             */
            const mobileLinks = menu?.querySelectorAll('a');

            mobileLinks?.forEach(function (link) {
                link.addEventListener('click', function () {
                    menu.classList.add('hidden');
                    menuIcon?.classList.remove('hidden');
                    closeIcon?.classList.add('hidden');
                    menuButton?.setAttribute('aria-expanded', 'false');
                });
            });

            /*
             * Mensaje de WhatsApp
             */
            const whatsappText = document.getElementById('whatsapp-text');

            function mostrarMensajeWhatsApp() {
                if (!whatsappText) {
                    return;
                }

                whatsappText.classList.remove('hidden');

                requestAnimationFrame(function () {
                    whatsappText.classList.remove('opacity-0');
                    whatsappText.classList.add('opacity-100');
                });

                setTimeout(function () {
                    whatsappText.classList.remove('opacity-100');
                    whatsappText.classList.add('opacity-0');

                    setTimeout(function () {
                        whatsappText.classList.add('hidden');
                    }, 500);

                }, 5000);
            }

            setTimeout(mostrarMensajeWhatsApp, 1000);
            setInterval(mostrarMensajeWhatsApp, 20000);
        });
    </script>

</body>

</html>
