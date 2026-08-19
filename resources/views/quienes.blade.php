@extends('layout')

@section('contenido')

    <!-- BANNER -->
<section class="banner-nosotros relative
                h-[420px] sm:h-[500px] md:h-[600px] lg:h-[680px] xl:h-[720px]
                flex items-center justify-center text-center overflow-hidden">

    <!-- IMAGEN -->
    <img
        src="{{ asset('images/EDIFICIO SANTA FE CDMX/OBRA SANTA FE CDMX 2_9_11zon.webp') }}"
        alt="Equipo de construcción"
        class="banner-contacto-img absolute inset-0 w-full h-full
               object-cover object-[center_25%]"
    >

    <!-- OVERLAY -->
    <div class="absolute inset-0
                bg-gradient-to-r
                from-black/80
                via-black/50
                to-black/70">
    </div>

    <!-- SOMBRA INFERIOR -->
    <div class="absolute inset-0
                bg-gradient-to-t
                from-black/40
                via-transparent
                to-black/10">
    </div>

    <!-- LUZ DECORATIVA -->
    <div class="absolute -top-32 -right-32
                w-[450px] h-[450px]
                bg-[#FDB000]/15
                rounded-full blur-3xl">
    </div>

    <!-- CONTENIDO -->
    <div class="relative z-10 text-white px-4 sm:px-6 max-w-5xl mx-auto">

        <span class="banner-etiqueta inline-block
                     text-[#FDB000]
                     text-xs sm:text-sm
                     font-bold uppercase
                     tracking-[0.3em]
                     mb-5">

            Cabo MEP Solutions

        </span>

        <!-- TÍTULO COMO ESTABA -->
        <h1 class="banner-titulo
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl
                   font-bold
                   mb-6
                   leading-tight">

            ¿Quiénes somos?

        </h1>

        <!-- LÍNEA -->
        <div class="banner-linea
                    w-20 sm:w-24
                    h-1
                    bg-[#FDB000]
                    rounded-full
                    mx-auto
                    mb-6">
        </div>

        <!-- TEXTO -->
        <p class="banner-texto
                  text-gray-200
                  max-w-3xl
                  mx-auto
                  text-sm sm:text-lg md:text-xl
                  leading-relaxed">

            Ingeniería, integridad, calidad y seguridad en cada proyecto que desarrollamos.

        </p>

    </div>

    <!-- INDICADOR -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2
                hidden sm:flex flex-col items-center gap-2 text-white/70">

        <span class="text-[10px] uppercase tracking-[0.25em]">
            Descubre
        </span>

        <div class="w-6 h-10 border-2 border-white/40
                    rounded-full flex justify-center pt-2">

            <span class="w-1.5 h-1.5
                         bg-[#FDB000]
                         rounded-full
                         animacion-scroll">
            </span>

        </div>

    </div>

</section>


    <!-- MISIÓN / VISIÓN -->
    <section class="relative bg-gray-50 py-16 sm:py-20 overflow-hidden">

        <!-- Fondos decorativos -->
        <div class="absolute -left-28 top-10 w-72 h-72 bg-gray-300/30 rounded-full blur-3xl"></div>
        <div class="absolute -right-28 bottom-0 w-72 h-72 bg-yellow-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6">

            <!-- Encabezado -->
            <div class="text-center mb-10 sm:mb-14">

                <span
                    class="inline-block text-[#FDB000] font-semibold uppercase text-sm tracking-[0.25em]"
                    data-aos="fade-down"
                >
                    Nuestra esencia
                </span>

                <h2
                    class="text-3xl sm:text-4xl font-bold text-gray-900 mt-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    Propósito y dirección
                </h2>

                <div
                    class="w-16 h-1 bg-[#FDB000] mx-auto mt-5 rounded-full"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                ></div>

            </div>

            <div class="grid md:grid-cols-2 gap-7 sm:gap-8">

                <!-- MISIÓN -->
                <div
                    class="tarjeta-mision-vision group relative bg-white p-7 sm:p-8 rounded-2xl shadow-md border border-gray-100 overflow-hidden"
                    data-aos="fade-right"
                    data-aos-delay="100"
                >

                    <div class="absolute left-0 top-0 h-full w-1.5 bg-gradient-to-b from-gray-700 to-gray-300"></div>

                    <div class="absolute -right-16 -top-16 w-40 h-40 bg-gray-200 rounded-full opacity-40 transition-transform duration-700 group-hover:scale-150"></div>

                    <div class="relative z-10">

                        <div class="flex items-center mb-5">

                            <div class="icono-mision w-14 h-14 bg-gray-100 text-gray-700 text-2xl flex items-center justify-center rounded-xl mr-4">
                                🎯
                            </div>

                            <div>
                                <span class="text-xs uppercase tracking-[0.2em] text-gray-400 font-semibold">
                                    Nuestro propósito
                                </span>

                                <h3 class="text-xl sm:text-2xl font-bold text-gray-800">
                                    Misión
                                </h3>
                            </div>

                        </div>

                        <p class="texto-animado text-gray-600 text-sm sm:text-base leading-relaxed">
                            CABOMEP Solutions es tu aliado estratégico en soluciones de ingeniería e Instalaciones
                            electromecánicas para proyectos turísticos, comerciales y residenciales.
                            Diseñamos, ejecutamos y optimizamos cada proyecto con altos estándares de calidad,
                            eficiencia y cumplimiento.
                        </p>

                        <p class="texto-animado text-gray-600 mt-4 text-sm sm:text-base leading-relaxed">
                            A través de innovación, procesos estructurados y un equipo especializado, transformamos
                            cada desarrollo en una solución funcional, rentable y sostenible. Más que proveedores,
                            somos socios comprometidos con el éxito de nuestros clientes y el crecimiento de la
                            infraestructura en México.
                        </p>

                    </div>

                </div>


                <!-- VISIÓN -->
                <div
                    class="tarjeta-mision-vision group relative bg-white p-7 sm:p-8 rounded-2xl shadow-md border border-gray-100 overflow-hidden"
                    data-aos="fade-left"
                    data-aos-delay="200"
                >

                    <div class="absolute left-0 top-0 h-full w-1.5 bg-gradient-to-b from-yellow-600 to-[#FDB000]"></div>

                    <div class="absolute -right-16 -top-16 w-40 h-40 bg-yellow-100 rounded-full opacity-50 transition-transform duration-700 group-hover:scale-150"></div>

                    <div class="relative z-10">

                        <div class="flex items-center mb-5">

                            <div class="icono-vision w-14 h-14 bg-yellow-50 text-[#FDB000] text-2xl flex items-center justify-center rounded-xl mr-4">
                                👁
                            </div>

                            <div>
                                <span class="text-xs uppercase tracking-[0.2em] text-[#FDB000] font-semibold">
                                    Hacia dónde vamos
                                </span>

                                <h3 class="text-xl sm:text-2xl font-bold text-gray-800">
                                    Visión
                                </h3>
                            </div>

                        </div>

                        <p class="texto-animado text-gray-600 text-sm sm:text-base leading-relaxed">
                            Ser una empresa líder a nivel nacional en soluciones de ingeniería e Instalaciones
                            electromecánicas, destacando por nuestra capacidad técnica, confiabilidad y ejecución
                            en proyectos de alto nivel.
                        </p>

                        <p class="texto-animado text-gray-600 mt-4 text-sm sm:text-base leading-relaxed">
                            Buscamos consolidar nuestra presencia en destinos clave de México y expandirnos
                            estratégicamente, integrando innovación, herramientas digitales y un modelo escalable.
                        </p>

                        <p class="texto-animado text-gray-600 mt-4 text-sm sm:text-base leading-relaxed">
                            Aspiramos a posicionarnos como un referente del sector, impulsando proyectos de alto
                            impacto y liderando la evolución hacia soluciones más eficientes, profesionales y
                            orientadas a resultados.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- SOBRE NOSOTROS -->
    <section class="relative py-16 sm:py-24 bg-gradient-to-r from-white via-gray-50 to-gray-100 overflow-hidden">

        <div class="absolute -right-24 top-20 w-72 h-72 bg-[#FDB000]/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-10 sm:gap-16 items-center">

            <!-- IMAGEN -->
<div
    class="relative order-1 md:order-none grupo-imagen"
    data-aos="fade-right"
    data-aos-duration="1000"
>

    <div class="relative rounded-2xl overflow-hidden shadow-2xl">

        <!-- CARRUSEL DE IMÁGENES -->
        <div class="relative w-full h-72 sm:h-[440px]">

            <img
                src="{{ asset('images\ROYALTON PUERTO MORELOS QROO\ROYALTON PTO JUAREZ 07.webp') }}"
                alt="Proyecto Cabo MEP Solutions"
                class="imagen-carrusel-nosotros absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000"
            >

            <img
                src="{{ asset('images\REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS\RS HACIENDA ENCANTANDA CABO SAN LUCAS 6_5_11zon.webp') }}"
                alt="Instalaciónes Cabo MEP Solutions"
                class="imagen-carrusel-nosotros absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
            >

            <img
                src="{{ asset('images\PLANET HOLLYWOOD\PLANET 1_7_11zon.webp') }}"
                alt="Proyecto de ingeniería Cabo MEP Solutions"
                class="imagen-carrusel-nosotros absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
            >

            <img
                src="{{ asset('images\EDIFICIO SANTA FE CDMX\OBRA SANTA FE CDMX 1_8_11zon.webp') }}"
                alt="Obra Cabo MEP Solutions"
                class="imagen-carrusel-nosotros absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
            >

        </div>

        <!-- Degradado -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>

        <div class="brillo-imagen"></div>

    </div>

    <!-- Marco amarillo -->
    <div class="absolute -bottom-5 -left-5 w-28 h-28 border-l-4 border-b-4 border-[#FDB000] rounded-bl-2xl -z-10"></div>

    <!-- Badge -->
    <div
        class="badge-experiencia absolute top-4 right-4 bg-[#FDB000]/95 backdrop-blur-sm text-white px-5 py-3 rounded-xl shadow-xl"
        data-aos="zoom-in"
        data-aos-delay="400"
    >
        <p class="text-xl font-bold leading-none">
            +20
        </p>

        <p class="text-xs mt-1">
            años de experiencia
        </p>
    </div>

</div>


            <!-- TEXTO -->
            <div class="order-2">

                <span
                    class="inline-block text-[#FDB000] font-semibold uppercase text-sm tracking-[0.25em]"
                    data-aos="fade-down"
                >
                    Sobre nosotros
                </span>

                <h2
                    class="text-3xl sm:text-4xl font-bold mt-3 mb-5 leading-tight text-gray-900"
                    data-aos="fade-left"
                    data-aos-delay="100"
                >
                    Ingeniería de alto nivel para proyectos exigentes
                </h2>

                <div
                    class="w-20 h-1 bg-[#FDB000] mb-7 rounded-full"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                ></div>

                <p
                    class="text-gray-600 mb-4 text-base leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    La historia de <strong class="text-gray-800">CABOMEP Solutions</strong> comenzó hace más de 20 años, cuando Diego Chuc, actual Director de obra
                    inició su trayectoria como ayudante de obra. Mediante el trabajo constante y la experiencia adquirida directamente en campo, desarrolló los conocimientos técnicos y la visión necesarios para crecer en el sector de la construcción y las Instalaciónes electromecánicas.                </p>

                <p
                    class="text-gray-600 mb-4 text-base leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    Con el paso del tiempo, Diego Chuc se trasladó a Cabo San Lucas, donde consolidó su experiencia y, junto con el Ing.
                    Jorge Silva Ortega y el Ing. Jairo Arias Cruz como cofundadores, creó lo que hoy es CABOMEP Solutions: una empresa especializada
                     en soluciones de ingeniería e Instalaciónes electromecánicas para proyectos turísticos, hoteleros, comerciales y residenciales de
                     alto nivel.
                </p>

                <p
                    class="text-gray-600 mb-7 text-base leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                   Actualmente, CABOMEP Solutions diseña, ejecuta y optimiza Instalaciónes mecánicas, eléctricas, de plomería e hidrosanitarias.
                    Desde su sede principal en Cabo San Lucas, desarrolla proyectos en Los Cabos y amplía su cobertura hacia Cancún, Riviera Maya
                    y otras ciudades de México.
                </p>

                <p class="text-gray-600 mb-7 text-base leading-relaxed"
                data-aos="fade-up"
                data-aos-delay="400">
                Más que un proveedor de servicios electromecánicos, CABOMEP Solutions es un aliado estratégico que combina experiencia en campo,
                capacidad técnica, calidad y compromiso para desarrollar soluciones eficientes y orientadas a resultados.

                    <!-- Contenido adicional si es necesario -->
                </p>

                <!-- CARACTERÍSTICAS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">

                    <div
                        class="caracteristica group flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <span class="check-icono w-10 h-10 flex items-center justify-center bg-yellow-50 text-[#FDB000] rounded-lg text-lg mr-3">
                            ✔
                        </span>

                        <div>
                            <p class="font-semibold text-gray-800">
                                Calidad
                            </p>
                            <p class="text-sm text-gray-500">
                                Procesos certificados
                            </p>
                        </div>
                    </div>

                    <div
                        class="caracteristica group flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <span class="check-icono w-10 h-10 flex items-center justify-center bg-yellow-50 text-[#FDB000] rounded-lg text-lg mr-3">
                            ✔
                        </span>

                        <div>
                            <p class="font-semibold text-gray-800">
                                Eficiencia
                            </p>
                            <p class="text-sm text-gray-500">
                                Optimización total
                            </p>
                        </div>
                    </div>

                    <div
                        class="caracteristica group flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <span class="check-icono w-10 h-10 flex items-center justify-center bg-yellow-50 text-[#FDB000] rounded-lg text-lg mr-3">
                            ✔
                        </span>

                        <div>
                            <p class="font-semibold text-gray-800">
                                Experiencia
                            </p>
                            <p class="text-sm text-gray-500">
                                Equipo especializado
                            </p>
                        </div>
                    </div>

                    <div
                        class="caracteristica group flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100"
                        data-aos="fade-up"
                        data-aos-delay="400"
                    >
                        <span class="check-icono w-10 h-10 flex items-center justify-center bg-yellow-50 text-[#FDB000] rounded-lg text-lg mr-3">
                            ✔
                        </span>

                        <div>
                            <p class="font-semibold text-gray-800">
                                Compromiso
                            </p>
                            <p class="text-sm text-gray-500">
                                Resultados garantizados
                            </p>
                        </div>
                    </div>

                </div>

                <!-- BOTÓN -->
                <a
                    href="/contacto"
                    data-aos="fade-up"
                    data-aos-delay="500"
                    class="boton-contacto group relative inline-flex items-center justify-center gap-2 overflow-hidden bg-[#FDB000] text-white px-7 py-3.5 rounded-lg font-semibold shadow-lg shadow-[#FDB000]/20"
                >
                    <span class="relative z-10">
                        Contáctanos
                    </span>

                    <span class="relative z-10 transition-transform duration-300 group-hover:translate-x-1">
                        →
                    </span>

                    <span class="brillo-boton"></span>
                </a>

            </div>

        </div>

    </section>


    <!-- VALORES -->
    <section class="relative bg-gray-100 py-16 sm:py-24 overflow-hidden">

        <div class="absolute -left-24 top-24 w-72 h-72 bg-yellow-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Encabezado -->
            <div class="text-center mb-12">

                <span
                    class="inline-block text-[#FDB000] font-semibold uppercase text-sm tracking-[0.25em]"
                    data-aos="fade-down"
                >
                    Lo que nos define
                </span>

                <h2
                    class="text-3xl sm:text-4xl font-bold mt-3 text-gray-900"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    Valores
                </h2>

                <div
                    class="w-16 h-1 bg-[#FDB000] mx-auto mt-5 rounded-full"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                ></div>

                <p
                    class="max-w-2xl mx-auto mt-5 text-gray-600 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    Principios que guían cada decisión, proceso y proyecto que desarrollamos.
                </p>

            </div>


            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- VALOR 1 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-excelencia-tecnica.webp') }}"
                            alt="Excelencia técnica"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                        Excelencia técnica
                    </h3>

                    <p>
                        Ingeniería electromecánica con calidad y precisión.
                    </p>

                    <div class="valor-linea"></div>
                </div>


                <!-- VALOR 2 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-confiabilidad.webp') }}"
                            alt="Cumplimiento"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                        Confiabilidad
                    </h3>

                    <p>
                        Cumplimos cada proyecto con seguridad y resultados
                    </p>

                    <div class="valor-linea"></div>
                </div>


                <!-- VALOR 3 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-innovacion.webp') }}"
                            alt="Enfoque al cliente"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                        Innovación
                    </h3>

                    <p>
                        Integramos tecnología en soluciones electromecánicas.
                    </p>

                    <div class="valor-linea"></div>
                </div>


                <!-- VALOR 4 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-eficiencia.webp') }}"
                            alt="Innovación"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                        Eficiencia
                    </h3>

                    <p>
                        Optimizamos costos, tiempos y recursos en cada obra.
                    </p>

                    <div class="valor-linea"></div>
                </div>


                <!-- VALOR 5 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-compromiso.webp') }}"
                            alt="Profesionalización"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                        Compromiso
                    </h3>

                    <p>
                        Aliados estratégicos en proyectos de alto nivel.
                    </p>

                    <div class="valor-linea"></div>
                </div>


                <!-- VALOR 6 -->
                <div
                    class="valor-card group"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div class="valor-icono">
                        <img
                            src="{{ asset('images\VECTORES VALORES\valor-liderazgo.webp') }}"
                            alt="Integridad"
                            class="w-11 h-11 object-contain"
                        >
                    </div>

                    <h3>
                         Liderazgo
                    </h3>

                    <p>
                        Impulsamos ingeniería de alto impacto en México.
                    </p>

                    <div class="valor-linea"></div>
                </div>

            </div>

        </div>

    </section>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const imagenes = document.querySelectorAll('.imagen-carrusel-nosotros');

    let imagenActual = 0;

    setInterval(() => {

        // Ocultar imagen actual
        imagenes[imagenActual].classList.remove('opacity-100');
        imagenes[imagenActual].classList.add('opacity-0');

        // Pasar a la siguiente
        imagenActual++;

        // Volver a la primera al terminar
        if (imagenActual >= imagenes.length) {
            imagenActual = 0;
        }

        // Mostrar siguiente imagen
        imagenes[imagenActual].classList.remove('opacity-0');
        imagenes[imagenActual].classList.add('opacity-100');

    }, 4000);

});
</script>

    <!-- ESTILOS -->


@endsection
