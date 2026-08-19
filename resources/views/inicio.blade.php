@extends('layout')

{{-- ====================================================== --}}
{{-- SEO DE LA PÁGINA DE INICIO --}}
{{-- ====================================================== --}}

@section('title', 'Instalaciones Electromecánicas en Cancún | CABOMEP Solutions')

@section('description', 'CABOMEP Solutions desarrolla instalaciones eléctricas, mecánicas, hidrosanitarias y de plomería para hoteles, residenciales, comercios y proyectos de construcción en Cancún y Riviera Maya.')

@section('keywords', 'instalaciones electromecánicas Cancún, instalaciones eléctricas Cancún, instalaciones hidrosanitarias Cancún, plomería para hoteles, ingeniería MEP Cancún, instalaciones mecánicas Riviera Maya, contratista electromecánico Quintana Roo')

@section('canonical', url('/'))

@section('og_title', 'CABOMEP Solutions | Ingeniería e Instalaciones Electromecánicas')

@section('og_description', 'Soluciones eléctricas, mecánicas, hidrosanitarias y de plomería para hoteles, residenciales y proyectos comerciales en Cancún y Riviera Maya.')

@section('og_image', asset('images/logo-cabomep.png'))


{{-- ====================================================== --}}
{{-- DATOS ESTRUCTURADOS PARA GOOGLE --}}
{{-- ====================================================== --}}

@push('structured-data')

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    '@id' => url('/') . '#empresa',

    'name' => 'CABOMEP Solutions',

    'url' => url('/'),

    'logo' => asset('images/logo-cabomep.png'),

    'image' => asset('images/logo-cabomep.png'),

    'description' => 'Empresa especializada en instalaciones eléctricas, mecánicas, hidrosanitarias y de plomería para proyectos hoteleros, residenciales, comerciales e industriales.',

    'telephone' => '+52 998 694 7838',

    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Cancún',
        'addressRegion' => 'Quintana Roo',
        'addressCountry' => 'MX',
    ],

    'areaServed' => [
        [
            '@type' => 'City',
            'name' => 'Cancún',
        ],
        [
            '@type' => 'Place',
            'name' => 'Riviera Maya',
        ],
        [
            '@type' => 'State',
            'name' => 'Quintana Roo',
        ],
    ],

    'serviceType' => [
        'Instalaciones eléctricas',
        'Instalaciones electromecánicas',
        'Instalaciones mecánicas',
        'Instalaciones hidrosanitarias',
        'Instalaciones de plomería',
        'Ingeniería MEP',
    ],

    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+52 998 694 7838',
        'contactType' => 'customer service',
        'availableLanguage' => [
            'Spanish',
        ],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>


<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',

    'mainEntity' => [
        [
            '@type' => 'Question',

            'name' => '¿Qué servicios ofrece CABOMEP Solutions?',

            'acceptedAnswer' => [
                '@type' => 'Answer',

                'text' => 'CABOMEP Solutions ofrece instalaciones eléctricas, mecánicas, hidrosanitarias, hidráulicas, sanitarias y de plomería para proyectos hoteleros, residenciales, comerciales e industriales.',
            ],
        ],

        [
            '@type' => 'Question',

            'name' => '¿Realizan instalaciones para hoteles y desarrollos residenciales?',

            'acceptedAnswer' => [
                '@type' => 'Answer',

                'text' => 'Sí. CABOMEP Solutions desarrolla soluciones electromecánicas para hoteles, condominios, complejos residenciales, edificios corporativos, comercios y proyectos de construcción.',
            ],
        ],

        [
            '@type' => 'Question',

            'name' => '¿En qué zonas ofrece servicios CABOMEP Solutions?',

            'acceptedAnswer' => [
                '@type' => 'Answer',

                'text' => 'CABOMEP Solutions atiende principalmente proyectos en Cancún, Riviera Maya y distintas zonas de Quintana Roo.',
            ],
        ],

        [
            '@type' => 'Question',

            'name' => '¿Cómo puedo solicitar una cotización?',

            'acceptedAnswer' => [
                '@type' => 'Answer',

                'text' => 'Puede solicitar una cotización mediante WhatsApp, proporcionando la ubicación, el tipo de proyecto, el alcance aproximado y el servicio requerido.',
            ],
        ],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@endpush


{{-- ====================================================== --}}
{{-- CONTENIDO DE LA PÁGINA --}}
{{-- ====================================================== --}}

@section('contenido')


{{-- ====================================================== --}}
{{-- HERO PRINCIPAL --}}
{{-- ====================================================== --}}

<section
    id="inicio"
    class="relative min-h-screen flex items-center overflow-hidden bg-black"
>

    {{-- VIDEO DE FONDO --}}
<!-- ========================= -->
<!-- VIDEO PARA COMPUTADORA -->
<!-- ========================= -->

<video
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    id="hero-video-desktop"
    class="hidden md:block absolute inset-0 w-full h-full object-cover object-center"
>

    <source
        src="{{ asset('images/video/VIDEO PRUEBA 90.mp4') }}"
        type="video/mp4">

</video>


<!-- ========================= -->
<!-- VIDEO PARA CELULAR -->
<!-- ========================= -->

<video
    autoplay
    muted
    loop
    playsinline
    preload="metadata"
    id="hero-video-mobile"
    class="block md:hidden absolute inset-0 w-full h-full object-cover object-center"
>

    <source
        src="{{ asset('images/video/INSTALACIÓN CABOMEP VERTICAL.mp4') }}"
        type="video/mp4">

</video>



    {{-- INDICADOR DE SCROLL --}}
    <a
        href="#servicios"
        aria-label="Desplazarse a nuestros servicios"
        class="absolute bottom-8 left-1/2
               -translate-x-1/2
               hidden sm:flex flex-col
               items-center gap-2
               text-white/70 z-20"
    >
        <span class="text-xs uppercase tracking-[0.25em]">
            Desliza
        </span>

        <span
            class="w-6 h-10 border-2 border-white/50
                   rounded-full flex justify-center pt-2"
            aria-hidden="true"
        >
            <span
                class="w-1.5 h-1.5
                       bg-yellow-500 rounded-full
                       animate-scroll"
            ></span>
        </span>
    </a>

</section>


{{-- ====================================================== --}}
{{-- SERVICIOS Y EXPERIENCIA --}}
{{-- ====================================================== --}}

<section
    id="servicios"
    class="relative overflow-hidden
           bg-gray-100 py-16 sm:py-20 md:py-24"
    aria-labelledby="titulo-servicios"
>

    <div
        class="absolute -left-24 top-20
               w-64 h-64
               bg-yellow-500/10 rounded-full blur-3xl"
        aria-hidden="true"
    ></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="text-center mb-12 sm:mb-16">

            <span

                class="inline-block
                       text-yellow-500 text-sm font-bold
                       uppercase tracking-[0.25em]"
                data-aos="fade-down"
                data-aos-duration="700"
            >
                Soluciones integrales
            </span>

            <h2
                id="titulo-servicios"
                class="text-3xl sm:text-4xl
                       font-bold text-gray-900 mt-3"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                Especialistas en instalaciones MEP
            </h2>

            <div
                class="w-16 h-1
                       bg-yellow-500 mx-auto mt-5 rounded-full"
                data-aos="zoom-in"
                data-aos-delay="200"
                aria-hidden="true"
            ></div>

            {{-- <p
                class="max-w-3xl mx-auto mt-6
                       text-gray-600 leading-relaxed"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                Integramos sistemas eléctricos, mecánicos, hidráulicos,
                sanitarios y de plomería para proyectos hoteleros,
                residenciales, comerciales e industriales. Nuestro trabajo
                se adapta a las necesidades técnicas y operativas de cada
                construcción.
            </p> --}}

        </div>

        {{-- TARJETAS DE SERVICIOS --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

             {{-- SERVICIO 4 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="100"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    ⚙️
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Instalaciones mecánicas
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Soluciones mecánicas para cuartos de máquinas, sistemas
                    de bombeo, tuberías especiales, equipos técnicos y
                    requerimientos de operación en proyectos de gran escala.
                </p>

            </article>

            {{-- SERVICIO 1 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="100"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    ⚡
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Instalaciones eléctricas
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Diseño, ejecución y adecuación de sistemas eléctricos,
                    canalizaciones, cableado, tableros, iluminación y
                    distribución de energía para hoteles, residenciales,
                    comercios y edificios corporativos.
                </p>

            </article>



            {{-- SERVICIO 3 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="300"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    🔧
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Instalaciones de plomería
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Instalación de tuberías, conexiones, accesorios,
                    alimentación hidráulica, drenajes y sistemas de plomería
                    para proyectos nuevos, remodelaciones y ampliaciones.
                </p>

            </article>

            {{-- SERVICIO 2 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="200"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    💧
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Instalaciones hidrosanitarias
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Desarrollo de redes hidráulicas y sanitarias,
                    alimentación de agua, drenaje, distribución, bombeo y
                    sistemas necesarios para el funcionamiento eficiente de
                    complejos residenciales y hoteleros.
                </p>

            </article>



            {{-- SERVICIO 5 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="200"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    📐
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Ingeniería MEP
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Integración de especialidades mecánicas, eléctricas y de
                    plomería para mejorar la coordinación, funcionalidad,
                    construcción y operación de cada proyecto.
                </p>

            </article>

            {{-- SERVICIO 6 --}}
            <article
                class="group relative bg-white p-7
                       rounded-2xl overflow-hidden
                       border border-gray-100 shadow-md
                       transition-all duration-500
                       hover:-translate-y-3 hover:shadow-2xl"
                data-aos="fade-up"
                data-aos-delay="300"
            >

                <div
                    class="absolute inset-x-0 bottom-0 h-1
                           bg-yellow-500 scale-x-0 origin-left
                           transition-transform duration-500
                           group-hover:scale-x-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="w-14 h-14
                           bg-yellow-500 text-gray-950 text-2xl
                           flex items-center justify-center
                           rounded-xl mb-5
                           shadow-lg shadow-yellow-500/20
                           transition-all duration-500
                           group-hover:rotate-6 group-hover:scale-110"
                    aria-hidden="true"
                >
                    🏗️
                </div>

                <h3
                    class="font-bold text-xl mb-3 text-gray-900
                           transition-colors duration-300
                           group-hover:text-yellow-500"
                >
                    Ejecución y supervisión
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed">
                    Coordinación y seguimiento de instalaciones durante la
                    obra para mantener el alcance técnico, la calidad de
                    ejecución y el funcionamiento correcto de los sistemas.
                </p>

            </article>

        </div>



    </div>
</section>


{{-- ====================================================== --}}
{{-- SECTORES ATENDIDOS --}}
{{-- ====================================================== --}}

<section
    class="bg-black py-16 sm:py-20"
    aria-labelledby="titulo-sectores"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="max-w-3xl mb-12"
            data-aos="fade-right"
        >
            <span
                class="text-yellow-500 text-sm font-bold
                       uppercase tracking-[0.25em]"
            >
                Sectores
            </span>

            <h2
                id="titulo-sectores"
                class="text-3xl sm:text-4xl
                       font-bold text-white mt-3"
            >
                Soluciones para proyectos hoteleros, residenciales y
                comerciales
            </h2>

            <p class="mt-5 text-gray-300 leading-relaxed">
                Adaptamos cada instalación a las características técnicas,
                operativas y constructivas del proyecto, desde complejos
                residenciales hasta desarrollos hoteleros de gran escala.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

            <article
                class="border border-white/10
                       bg-white/5 rounded-2xl
                       p-6 text-center
                       transition-all duration-300
                       hover:border-yellow-500/60
                       hover:-translate-y-2"
                data-aos="zoom-in"
                data-aos-delay="100"
            >
                <span
                    class="block text-4xl mb-4"
                    aria-hidden="true"
                >
                    🏨
                </span>

                <h3 class="font-bold text-white">
                    Hoteles
                </h3>

                <p class="text-gray-400 text-sm mt-2">
                    Resorts y desarrollos turísticos.
                </p>
            </article>

            <article
                class="border border-white/10
                       bg-white/5 rounded-2xl
                       p-6 text-center
                       transition-all duration-300
                       hover:border-yellow-500/60
                       hover:-translate-y-2"
                data-aos="zoom-in"
                data-aos-delay="200"
            >
                <span
                    class="block text-4xl mb-4"
                    aria-hidden="true"
                >
                    🏢
                </span>

                <h3 class="font-bold text-white">
                    Residenciales
                </h3>

                <p class="text-gray-400 text-sm mt-2">
                    Condominios y complejos habitacionales.
                </p>
            </article>

            <article
                class="border border-white/10
                       bg-white/5 rounded-2xl
                       p-6 text-center
                       transition-all duration-300
                       hover:border-yellow-500/60
                       hover:-translate-y-2"
                data-aos="zoom-in"
                data-aos-delay="300"
            >
                <span
                    class="block text-4xl mb-4"
                    aria-hidden="true"
                >
                    🏬
                </span>

                <h3 class="font-bold text-white">
                    Comerciales
                </h3>

                <p class="text-gray-400 text-sm mt-2">
                    Oficinas, locales y centros comerciales.
                </p>
            </article>

            <article
                class="border border-white/10
                       bg-white/5 rounded-2xl
                       p-6 text-center
                       transition-all duration-300
                       hover:border-yellow-500/60
                       hover:-translate-y-2"
                data-aos="zoom-in"
                data-aos-delay="400"
            >
                <span
                    class="block text-4xl mb-4"
                    aria-hidden="true"
                >
                    🏭
                </span>

                <h3 class="font-bold text-white">
                    Industriales
                </h3>

                <p class="text-gray-400 text-sm mt-2">
                    Infraestructura y áreas técnicas.
                </p>
            </article>

        </div>

    </div>
</section>


{{-- ====================================================== --}}
{{-- PROYECTOS --}}
{{-- ====================================================== --}}

<section
    id="proyectos"
    class="relative py-16 sm:py-20 md:py-24 overflow-hidden bg-white"
    aria-labelledby="titulo-proyectos"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div
            class="flex flex-col sm:flex-row
                   sm:justify-between sm:items-end
                   gap-5 mb-10"
        >

            <div>

                <span
                    class="inline-block
                           text-yellow-500 text-sm font-bold
                           uppercase tracking-[0.25em]"
                    data-aos="fade-right"
                >
                    Nuestro trabajo
                </span>

                <h2
                    id="titulo-proyectos"
                    class="text-3xl sm:text-4xl
                           font-bold text-gray-900 mt-2"
                    data-aos="fade-right"
                    data-aos-delay="100"
                >
                    Proyectos de instalaciones e infraestructura
                </h2>

                <div
                    class="w-16 h-1
                           bg-yellow-500 mt-4 rounded-full"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                    aria-hidden="true"
                ></div>

                <p
                    class="max-w-2xl mt-5
                           text-gray-600 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="250"
                >
                    Conoce algunas de las soluciones que desarrollamos para
                    proyectos eléctricos, hidrosanitarios, mecánicos y de
                    plomería.
                </p>

            </div>

            <a
                href="{{ route('proyectos') }}"
                data-aos="fade-left"
                data-aos-delay="200"
                class="group inline-flex
                       items-center justify-center gap-2
                       border-2 border-yellow-500
                       text-yellow-600
                       px-5 py-2.5 rounded-lg
                       font-semibold
                       transition-all duration-300
                       hover:bg-yellow-500 hover:text-gray-950
                       hover:-translate-y-1 hover:shadow-lg
                       w-full sm:w-auto"
            >
                Ver todos los proyectos

                <span
                    class="transition-transform duration-300
                           group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    →
                </span>
            </a>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 md:gap-8">

            {{-- PROYECTO 1 --}}
            <a
                href="{{ route('proyectos') }}"
                aria-label="Ver proyectos de instalaciones eléctricas"
                class="group relative block
                       rounded-2xl overflow-hidden shadow-lg"
                data-aos="zoom-in-up"
                data-aos-delay="200"
            >
 <img
                        src="{{ asset('images/WESTIN CANCUN/WESTIN 6_20_11zon.webp') }}"
                        alt="The Zenith Office Hub"
                        class="proyecto-img"
                    >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-black/95 via-black/30 to-transparent
                           opacity-80
                           transition-opacity duration-500
                           group-hover:opacity-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute inset-x-0 bottom-0 p-6
                           translate-y-4
                           transition-transform duration-500
                           group-hover:translate-y-0"
                >
                    <span
                        class="text-yellow-400 text-xs font-bold
                               uppercase tracking-widest"
                    >
                        Proyecto Instalaciones eléctricas, hidrosanitarias y HVAC
                    </span>

                    <h3 class="text-white text-xl font-bold mt-2">
                        Hotel Westin Regina
                    </h3>

                    <p
                        class="text-gray-200 text-sm mt-2
                               opacity-0
                               transition-all duration-500
                               group-hover:opacity-100"
                    >
                        Desarrollo integral para garantizar climatización eficiente, distribución segura y óptimo funcionamiento de la infraestructura hotelera.
                    </p>
                </div>
            </a>

            {{-- PROYECTO 2 --}}
            <a
                href="{{ route('proyectos') }}"
                aria-label="Ver proyectos hidrosanitarios residenciales"
                class="group relative block
                       rounded-2xl overflow-hidden shadow-lg"
                data-aos="zoom-in-up"
                data-aos-delay="200"
            >
                    <img
                         src="{{ asset('images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 10.webp') }}"
                        alt="Oceanic Sands Villas"
                        class="proyecto-img"
                    >


                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-black/95 via-black/30 to-transparent
                           opacity-80
                           transition-opacity duration-500
                           group-hover:opacity-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute inset-x-0 bottom-0 p-6
                           translate-y-4
                           transition-transform duration-500
                           group-hover:translate-y-0"
                >
                    <span
                        class="text-yellow-400 text-xs font-bold
                               uppercase tracking-widest"
                    >
                       Suministro e instalación de equipos eléctricos
                    </span>

                    <h3 class="text-white text-xl font-bold mt-2">
                        Hotel Royalton
                    </h3>

                    <p
                        class="text-gray-200 text-sm mt-2
                               opacity-0
                               transition-all duration-500
                               group-hover:opacity-100"
                    >
                        Montaje y puesta en operación de equipos especializados para asegurar el rendimiento de la infraestructura hotelera.
                    </p>
                </div>
            </a>

            {{-- PROYECTO 3 --}}
            <a
                href="{{ route('proyectos') }}"
                aria-label="Ver proyectos electromecánicos hoteleros"
                class="group relative block
                       rounded-2xl overflow-hidden shadow-lg"
                data-aos="zoom-in-up"
                data-aos-delay="300"
            >
   <img
                         src="{{ asset('images/PLANET HOLLYWOOD/planet 3_9_11zon.webp') }}"
                        alt="Skyline Luxury Apartments"
                        class="proyecto-img"
                    >

                <div
                    class="absolute inset-0
                           bg-gradient-to-t
                           from-black/95 via-black/30 to-transparent
                           opacity-80
                           transition-opacity duration-500
                           group-hover:opacity-100"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute inset-x-0 bottom-0 p-6
                           translate-y-4
                           transition-transform duration-500
                           group-hover:translate-y-0"
                >
                    <span
                        class="text-yellow-400 text-xs font-bold
                               uppercase tracking-widest"
                    >
                        Instalaciones eléctricas, hidrosanitarias y HVAC
                    </span>

                    <h3 class="text-white text-xl font-bold mt-2">
                        Planet Hollywood
                    </h3>

                    <p
                        class="text-gray-200 text-sm mt-2
                               opacity-0
                               transition-all duration-500
                               group-hover:opacity-100"
                    >
                        Integración técnica orientada a garantizar eficiencia energética, climatización y funcionamiento confiable del complejo hotelero.
                    </p>
                </div>
            </a>

        </div>
    </div>
</section>


{{-- ====================================================== --}}
{{-- POR QUÉ ELEGIR CABOMEP --}}
{{-- ====================================================== --}}

<section
    class="relative overflow-hidden
           bg-gray-100 py-16 sm:py-20 md:py-24"
    aria-labelledby="titulo-ventajas"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div data-aos="fade-right">

                <span
                    class="text-yellow-500 text-sm font-bold
                           uppercase tracking-[0.25em]"
                >
                    Nuestra propuesta
                </span>

                <h2
                    id="titulo-ventajas"
                    class="text-3xl sm:text-4xl
                           font-bold text-gray-900 mt-3"
                >
                    ¿Por qué elegir CABOMEP Solutions?
                </h2>

                <div
                    class="w-16 h-1
                           bg-yellow-500 mt-5 rounded-full"
                    aria-hidden="true"
                ></div>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Un proyecto requiere coordinación entre
                    diferentes especialidades. Nuestro enfoque integra las
                    instalaciones eléctricas, mecánicas, hidráulicas,
                    sanitarias y de plomería para reducir interferencias y
                    facilitar una ejecución ordenada.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Trabajamos en proyectos hoteleros, residenciales,
                    comerciales e industriales, considerando las
                    características técnicas de la obra, sus necesidades
                    operativas y las condiciones específicas de cada
                    instalación.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Desde la planeación hasta la ejecución, buscamos que cada
                    sistema sea funcional, eficiente y adecuado para el uso
                    previsto dentro del proyecto.
                </p>

                <a
                    href="{{ route('quienes') }}"
                    class="group inline-flex
                           items-center gap-2 mt-8
                           text-gray-900 font-bold
                           transition-colors duration-300
                           hover:text-yellow-600"
                >
                    Conoce más sobre nosotros

                    <span
                        class="transition-transform duration-300
                               group-hover:translate-x-1"
                        aria-hidden="true"
                    >
                        →
                    </span>
                </a>

            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 gap-5"
                data-aos="fade-left"
            >

                <article
                    class="bg-white rounded-2xl
                           border border-gray-100
                           p-6 shadow-sm
                           transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl"
                >
                    <span
                        class="flex items-center justify-center
                               w-12 h-12 mb-4
                               bg-yellow-100
                               text-yellow-600 text-xl
                               rounded-xl"
                        aria-hidden="true"
                    >
                        ✓
                    </span>

                    <h3 class="font-bold text-gray-900 text-lg">
                        Atención integral
                    </h3>

                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                        Coordinación de distintas especialidades dentro de
                        una misma solución.
                    </p>
                </article>

                <article
                    class="bg-white rounded-2xl
                           border border-gray-100
                           p-6 shadow-sm
                           transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl"
                >
                    <span
                        class="flex items-center justify-center
                               w-12 h-12 mb-4
                               bg-yellow-100
                               text-yellow-600 text-xl
                               rounded-xl"
                        aria-hidden="true"
                    >
                        ✓
                    </span>

                    <h3 class="font-bold text-gray-900 text-lg">
                        Soluciones a la medida
                    </h3>

                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                        Cada instalación se adapta al tipo y alcance del
                        proyecto.
                    </p>
                </article>

                <article
                    class="bg-white rounded-2xl
                           border border-gray-100
                           p-6 shadow-sm
                           transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl"
                >
                    <span
                        class="flex items-center justify-center
                               w-12 h-12 mb-4
                               bg-yellow-100
                               text-yellow-600 text-xl
                               rounded-xl"
                        aria-hidden="true"
                    >
                        ✓
                    </span>

                    <h3 class="font-bold text-gray-900 text-lg">
                        Calidad de ejecución
                    </h3>

                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                        Supervisión y seguimiento de los trabajos durante la
                        obra.
                    </p>
                </article>

                <article
                    class="bg-white rounded-2xl
                           border border-gray-100
                           p-6 shadow-sm
                           transition-all duration-300
                           hover:-translate-y-2 hover:shadow-xl"
                >
                    <span
                        class="flex items-center justify-center
                               w-12 h-12 mb-4
                               bg-yellow-100
                               text-yellow-600 text-xl
                               rounded-xl"
                        aria-hidden="true"
                    >
                        ✓
                    </span>

                    <h3 class="font-bold text-gray-900 text-lg">
                        Cobertura regional
                    </h3>

                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                        Atención de proyectos en Cabo San Lucas, Cancun y resto del País
                    </p>
                </article>

            </div>

        </div>

    </div>
</section>


{{-- ====================================================== --}}
{{-- SEO LOCAL --}}
{{-- ====================================================== --}}

<section
    class="bg-white py-16 sm:py-20"
    aria-labelledby="titulo-cancun"
>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <span
            class="text-yellow-500 text-sm font-bold
                   uppercase tracking-[0.25em]"
            data-aos="fade-down"
        >
            Cobertura
        </span>

        <h2
            id="titulo-cancun"
            class="text-3xl sm:text-4xl
                   font-bold text-gray-900 mt-3"
            data-aos="fade-up"
        >
            Empresa de instalaciones Mecánica, Eléctrica y Plomería
        </h2>

        <div
            class="w-16 h-1
                   bg-yellow-500 mx-auto mt-5 rounded-full"
            aria-hidden="true"
        ></div>

        <div
            class="mt-7 text-left
                   text-gray-600 leading-relaxed space-y-4"
            data-aos="fade-up"
            data-aos-delay="100"
        >

            <p>
                CABOMEP Solutions brinda servicios de instalaciones
                MEP en Cabo San Lucas y resto de México para proyectos de construcción,
                ampliación y adecuación. Integramos soluciones eléctricas,
                mecánicas, hidrosanitarias y de plomería para diferentes
                tipos de inmuebles.
            </p>

            <p>
                Nuestra experiencia se enfoca en desarrollos residenciales,
                hoteles, condominios, edificios corporativos, espacios
                comerciales e infraestructura técnica. Cada proyecto se
                analiza de acuerdo con su alcance, ubicación y necesidades
                de funcionamiento.
            </p>

            <p>
                También atendemos proyectos en Riviera Maya y otras zonas de
                Quintana Roo. Para preparar una propuesta, es recomendable
                compartir la ubicación de la obra, planos disponibles,
                especialidad requerida y una descripción general de los
                trabajos.
            </p>

        </div>

    </div>
</section>

<!-- ============================================
     CLIENTES / EMPRESAS QUE HAN CONFIADO
============================================= -->
<section class="bg-gray-50 border-y border-gray-100 py-10 sm:py-12 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ENCABEZADO -->
        <div class="text-center mb-8"
             data-aos="fade-up">

            <span class="text-yellow-500 text-xs sm:text-sm font-bold
                         uppercase tracking-[0.25em]">
                Cumplimiento fiscal y normativo
            </span>

        </div>


        <!-- LOGOS -->
        <div class="flex flex-wrap items-center justify-center
                    gap-x-10 gap-y-8 sm:gap-x-14 lg:gap-x-16">

            <!-- LOGO 1 -->
            <div class="flex items-center justify-center
                        w-28 sm:w-32 lg:w-36 h-16
                        opacity-60 hover:opacity-100
                        grayscale hover:grayscale-0
                        transition-all duration-300">

                <img
                    src="{{ asset('images/clientes/IMSS.webp') }}"
                    alt="Cliente CABOMEP Solutions"
                    class="max-w-full max-h-12 object-contain"
                    loading="lazy"
                >

            </div>


            <!-- LOGO 2 -->
            <div class="flex items-center justify-center
                        w-28 sm:w-32 lg:w-36 h-16
                        opacity-60 hover:opacity-100
                        grayscale hover:grayscale-0
                        transition-all duration-300">

                <img
                    src="{{ asset('images/clientes/LOGO REPSE.webp') }}"
                    alt="Cliente CABOMEP Solutions"
                    class="max-w-full max-h-12 object-contain"
                    loading="lazy"
                >

            </div>


            <!-- LOGO 3 -->
            <div class="flex items-center justify-center
                        w-28 sm:w-32 lg:w-36 h-16
                        opacity-60 hover:opacity-100
                        grayscale hover:grayscale-0
                        transition-all duration-300">

                <img
                    src="{{ asset('images/clientes/SEMARNAT.webp') }}"
                    alt="Cliente CABOMEP Solutions"
                    class="max-w-full max-h-12 object-contain"
                    loading="lazy"
                >

            </div>


            <!-- LOGO 4 -->
            <div class="flex items-center justify-center
                        w-28 sm:w-32 lg:w-36 h-16
                        opacity-60 hover:opacity-100
                        grayscale hover:grayscale-0
                        transition-all duration-300">

                <img
                    src="{{ asset('images/clientes/STPS LOGO.webp') }}"
                    alt="Cliente CABOMEP Solutions"
                    class="max-w-full max-h-12 object-contain"
                    loading="lazy"
                >

            </div>





        </div>

    </div>

</section>

{{-- ====================================================== --}}
{{-- PREGUNTAS FRECUENTES --}}
{{-- ====================================================== --}}

<section
    id="preguntas-frecuentes"
    class="bg-gray-100 py-16 sm:py-20 md:py-24"
    aria-labelledby="titulo-preguntas"
>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">

            <span
                class="text-yellow-500 text-sm font-bold
                       uppercase tracking-[0.25em]"
                data-aos="fade-down"
            >
                Información
            </span>

            <h2
                id="titulo-preguntas"
                class="text-3xl sm:text-4xl
                       font-bold text-gray-900 mt-3"
                data-aos="fade-up"
            >
                Preguntas frecuentes
            </h2>

            <div
                class="w-16 h-1
                       bg-yellow-500 mx-auto mt-5 rounded-full"
                aria-hidden="true"
            ></div>

            <p
                class="mt-6 text-gray-600"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                Resolvemos algunas dudas comunes sobre nuestros servicios y
                proceso de cotización.
            </p>

        </div>

        <div class="space-y-4">

            <details
                class="group bg-white
                       border border-gray-200
                       rounded-xl shadow-sm
                       overflow-hidden"
                data-aos="fade-up"
            >
                <summary
                    class="flex items-center justify-between
                           gap-4 p-5 sm:p-6
                           font-bold text-gray-900
                           cursor-pointer
                           list-none"
                >
                    ¿Qué servicios ofrece CABOMEP Solutions?

                    <span
                        class="text-yellow-500 text-2xl
                               transition-transform duration-300
                               group-open:rotate-45"
                        aria-hidden="true"
                    >
                        +
                    </span>
                </summary>

                <div
                    class="px-5 sm:px-6 pb-6
                           text-gray-600 leading-relaxed"
                >
                    Ofrecemos instalaciones eléctricas, mecánicas,
                    hidrosanitarias, hidráulicas, sanitarias y de plomería,
                    además de coordinación de especialidades MEP para
                    proyectos de construcción.
                </div>
            </details>

            <details
                class="group bg-white
                       border border-gray-200
                       rounded-xl shadow-sm
                       overflow-hidden"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <summary
                    class="flex items-center justify-between
                           gap-4 p-5 sm:p-6
                           font-bold text-gray-900
                           cursor-pointer
                           list-none"
                >
                    ¿Realizan instalaciones para hoteles y residenciales?

                    <span
                        class="text-yellow-500 text-2xl
                               transition-transform duration-300
                               group-open:rotate-45"
                        aria-hidden="true"
                    >
                        +
                    </span>
                </summary>

                <div
                    class="px-5 sm:px-6 pb-6
                           text-gray-600 leading-relaxed"
                >
                    Sí. Atendemos hoteles, complejos residenciales,
                    condominios, oficinas, comercios y proyectos de
                    infraestructura que requieren instalaciones
                    especializadas.
                </div>
            </details>

            <details
                class="group bg-white
                       border border-gray-200
                       rounded-xl shadow-sm
                       overflow-hidden"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <summary
                    class="flex items-center justify-between
                           gap-4 p-5 sm:p-6
                           font-bold text-gray-900
                           cursor-pointer
                           list-none"
                >
                    ¿En qué zonas ofrecen sus servicios?

                    <span
                        class="text-yellow-500 text-2xl
                               transition-transform duration-300
                               group-open:rotate-45"
                        aria-hidden="true"
                    >
                        +
                    </span>
                </summary>

                <div
                    class="px-5 sm:px-6 pb-6
                           text-gray-600 leading-relaxed"
                >
                    Atendemos principalmente proyectos en Cabo San Lucas, Quintana Roo y Resto del país. La cobertura final
                    dependerá de la ubicación y las características del
                    proyecto.
                </div>
            </details>

            <details
                class="group bg-white
                       border border-gray-200
                       rounded-xl shadow-sm
                       overflow-hidden"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <summary
                    class="flex items-center justify-between
                           gap-4 p-5 sm:p-6
                           font-bold text-gray-900
                           cursor-pointer
                           list-none"
                >
                    ¿Cómo puedo solicitar una cotización?

                    <span
                        class="text-yellow-500 text-2xl
                               transition-transform duration-300
                               group-open:rotate-45"
                        aria-hidden="true"
                    >
                        +
                    </span>
                </summary>

                <div
                    class="px-5 sm:px-6 pb-6
                           text-gray-600 leading-relaxed"
                >
                    Puedes comunicarte mediante WhatsApp y compartir la
                    ubicación, tipo de proyecto, especialidad requerida,
                    planos disponibles y una descripción general de los
                    trabajos.
                </div>
            </details>

        </div>

    </div>
</section>


{{-- ====================================================== --}}
{{-- LLAMADO A LA ACCIÓN --}}
{{-- ====================================================== --}}

<section
    class="relative overflow-hidden
           bg-gray-950 py-16 sm:py-20"
    aria-labelledby="titulo-cotizacion"
>

    <div
        class="absolute inset-0
               bg-gradient-to-r
               from-yellow-500/10 via-transparent to-yellow-500/10"
        aria-hidden="true"
    ></div>

    <div
        class="relative max-w-5xl mx-auto
               px-4 sm:px-6 lg:px-8 text-center"
    >

        <span
            class="inline-block
                   text-yellow-500 text-sm font-bold
                   uppercase tracking-[0.25em]"
            data-aos="fade-down"
        >
            Cuéntanos sobre tu proyecto
        </span>

        <h2
            id="titulo-cotizacion"
            class="text-3xl sm:text-4xl lg:text-5xl
                   font-bold text-white mt-4"
            data-aos="fade-up"
        >
            Solicita una cotización para tus instalaciones
        </h2>

        <p
            class="max-w-3xl mx-auto mt-5
                   text-gray-300 leading-relaxed"
            data-aos="fade-up"
            data-aos-delay="100"
        >
            Comparte los datos generales de tu proyecto y conoce las
            soluciones eléctricas, mecánicas, hidrosanitarias y de plomería
            que podemos desarrollar para tu obra.
        </p>

        <div
            class="flex flex-col sm:flex-row
                   items-center justify-center gap-4 mt-8"
            data-aos="fade-up"
            data-aos-delay="200"
        >

            <a
                href="https://wa.me/529981362855?text=Hola,%20quiero%20solicitar%20una%20cotización%20para%20un%20proyecto."
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center justify-center gap-2
                       w-full sm:w-auto
                       bg-yellow-500 text-gray-950
                       px-7 py-3.5 rounded-lg
                       font-bold
                       transition-all duration-300
                       hover:bg-yellow-400
                       hover:-translate-y-1 hover:shadow-xl"
            >
                Solicitar por WhatsApp
                <span aria-hidden="true">→</span>
            </a>

            <a
                href="{{ route('contacto') }}"
                class="inline-flex items-center justify-center gap-2
                       w-full sm:w-auto
                       border-2 border-white/60
                       text-white
                       px-7 py-3.5 rounded-lg
                       font-semibold
                       transition-all duration-300
                       hover:bg-white hover:text-gray-950
                       hover:-translate-y-1"
            >
                Ir a contacto
            </a>

        </div>

    </div>
</section>


@endsection


{{-- ====================================================== --}}
{{-- ESTILOS --}}
{{-- ====================================================== --}}

@push('styles')

<style>
    html {
        scroll-behavior: smooth;
    }

    summary::-webkit-details-marker {
        display: none;
    }

    /* Video para celular */
    @media (max-width: 768px) {
        #hero-video {
            width: 100%;
            height: 100%;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            object-position: center center;
        }
    }

    /* Video para computadora */
    @media (min-width: 769px) {
        #hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
        }
    }

    /* Reduce animaciones para usuarios que lo soliciten */
    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>

@endpush


{{-- ====================================================== --}}
{{-- SCRIPTS --}}
{{-- ====================================================== --}}

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.addEventListener('DOMContentLoaded', function () {

    const videos = document.querySelectorAll('video');

    videos.forEach(function(video){

        video.playbackRate = 0.75;

        video.play().catch(function(){

        });

    });

});

        if (!heroVideo) {
            return;
        }

        heroVideo.playbackRate = 0.75;

        const playPromise = heroVideo.play();

        if (playPromise !== undefined) {
            playPromise.catch(function () {
                // Algunos navegadores pueden bloquear la reproducción
                // automática. El sitio seguirá funcionando normalmente.
            });
        }
    });
</script>

@endpush
