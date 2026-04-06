@extends('layout')

@section('contenido')
    <!-- BANNER -->
    <section class="relative h-64 sm:h-80 md:h-96 flex items-center justify-center text-center">

        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd"
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative text-white px-4 sm:px-6">

            <h1 class="text-2xl sm:text-4xl md:text-6xl font-bold mb-4">
                ¿Quiénes somos?
            </h1>

            <p class="text-gray-200 max-w-xl mx-auto text-sm sm:text-lg">
                A legacy of integrity, quality, and safety in every square foot we build.
            </p>

        </div>

    </section>


    <!-- MISION / VISION -->
    <section class="bg-gray-50 py-12 sm:py-16" data-aos="fade-up">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-6 sm:gap-8">

            <!-- MISIÓN -->
            <div class="relative bg-white p-6 sm:p-8 rounded-lg shadow-sm hover:shadow-md transition group overflow-hidden">

                <!-- Efecto lateral -->
                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-gray-500 to-gray-300"></div>

                <div class="flex items-center mb-4">
                    <div class="text-gray-600 text-xl sm:text-2xl mr-3 group-hover:scale-110 transition">
                        🎯
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">
                        Misión
                    </h3>
                </div>

                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    CABO MEP SOLUTIONS es tu aliado estratégico en soluciones de ingeniería e instalaciones electromecánicas
                    para proyectos turísticos, comerciales y residenciales.
                    Diseñamos, ejecutamos y optimizamos cada proyecto con altos estándares de calidad, eficiencia y
                    cumplimiento.
                </p>

                <p class="text-gray-600 mt-3 text-sm sm:text-base leading-relaxed">
                    A través de innovación, procesos estructurados y un equipo especializado, transformamos cada desarrollo
                    en una solución funcional, rentable y sostenible.
                    Más que proveedores, somos socios comprometidos con el éxito de nuestros clientes y el crecimiento de la
                    infraestructura en México.
                </p>

            </div>

            <!-- VISIÓN -->
            <div class="relative bg-white p-6 sm:p-8 rounded-lg shadow-sm hover:shadow-md transition group overflow-hidden">

                <!-- Efecto lateral -->
                <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-orange-500 to-yellow-400"></div>

                <div class="flex items-center mb-4">
                    <div class="text-orange-500 text-xl sm:text-2xl mr-3 group-hover:scale-110 transition">
                        👁
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">
                        Visión
                    </h3>
                </div>

                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    Ser una empresa líder a nivel nacional en soluciones de ingeniería e instalaciones electromecánicas,
                    destacando por nuestra capacidad técnica, confiabilidad y ejecución en proyectos de alto nivel.
                </p>

                <p class="text-gray-600 mt-3 text-sm sm:text-base leading-relaxed">
                    Buscamos consolidar nuestra presencia en destinos clave de México y expandirnos estratégicamente,
                    integrando innovación, herramientas digitales y un modelo escalable.
                </p>

                <p class="text-gray-600 mt-3 text-sm sm:text-base leading-relaxed">
                    Aspiramos a posicionarnos como un referente del sector, impulsando proyectos de alto impacto y liderando
                    la evolución hacia soluciones más eficientes, profesionales y orientadas a resultados.
                </p>

            </div>

        </div>

    </section>




    <!-- SOBRE NOSOTROS -->
    <section class="py-16 sm:py-24 bg-gradient-to-r from-gray-50 to-gray-100">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-10 sm:gap-16 items-center">

            <!-- IMAGEN -->
            <div class="relative order-1 md:order-none">

                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                    class="rounded-xl shadow-lg w-full h-72 sm:h-[420px] object-cover" data-aos="fade-right">

                <!-- Badge flotante -->
                <div
                    class="absolute top-4 right-4 bg-orange-600 text-white px-4 py-2 rounded-lg shadow-md text-sm font-semibold">
                    +10 años de experiencia
                </div>

            </div>

            <!-- TEXTO -->
            <div>

                <!-- Etiqueta -->
                <span class="text-orange-600 font-semibold uppercase text-sm tracking-wide">
                    Sobre nosotros
                </span>

                <!-- Título -->
                <h2 class="text-2xl sm:text-3xl font-bold mt-2 mb-6 leading-tight text-gray-800">
                    Ingeniería de alto nivel para proyectos exigentes
                </h2>

                <!-- Línea decorativa -->
                <div class="w-20 h-1 bg-orange-600 mb-6 rounded-full"></div>

                <!-- Texto -->
                <p class="text-gray-600 mb-4 text-base leading-relaxed">
                    En <strong>CABO MEP SOLUTIONS</strong> somos un aliado estratégico en soluciones de ingeniería e
                    instalaciones electromecánicas para proyectos turísticos, comerciales y residenciales de alto nivel.
                </p>

                <p class="text-gray-600 mb-4 text-base leading-relaxed">
                    Diseñamos, ejecutamos y optimizamos cada proyecto con un enfoque técnico especializado, garantizando
                    calidad, eficiencia y cumplimiento.
                </p>

                <p class="text-gray-600 mb-6 text-base leading-relaxed">
                    Más que un proveedor, somos un socio estratégico comprometido con el éxito de nuestros clientes.
                </p>

                <!-- VALORES / FEATURES -->
                <div class="grid grid-cols-2 gap-4 mb-6">

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-sm border hover:shadow-md transition">
                        <span class="text-orange-600 text-lg mr-3">✔</span>
                        <div>
                            <p class="font-semibold text-gray-800">Calidad</p>
                            <p class="text-sm text-gray-500">Procesos certificados</p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-sm border hover:shadow-md transition">
                        <span class="text-orange-600 text-lg mr-3">✔</span>
                        <div>
                            <p class="font-semibold text-gray-800">Eficiencia</p>
                            <p class="text-sm text-gray-500">Optimización total</p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-sm border hover:shadow-md transition">
                        <span class="text-orange-600 text-lg mr-3">✔</span>
                        <div>
                            <p class="font-semibold text-gray-800">Experiencia</p>
                            <p class="text-sm text-gray-500">Equipo especializado</p>
                        </div>
                    </div>

                    <div class="flex items-center bg-white p-4 rounded-lg shadow-sm border hover:shadow-md transition">
                        <span class="text-orange-600 text-lg mr-3">✔</span>
                        <div>
                            <p class="font-semibold text-gray-800">Compromiso</p>
                            <p class="text-sm text-gray-500">Resultados garantizados</p>
                        </div>
                    </div>

                </div>

                <!-- BOTÓN -->
                <a href="/contacto"
                    class="inline-block bg-orange-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-orange-700 transition">
                    Contáctanos
                </a>

            </div>

        </div>

    </section>



    <!-- VALORES -->
    <section class="bg-gray-100 py-14 sm:py-20">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">

            <h2 class="text-2xl sm:text-3xl font-bold mb-4">
                VALORES
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">

                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/chart_1024791.png') }}" class="w-10 h-10 object-contain">

                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Excelencia y especialización técnica
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Altos estándares de calidad, precisión y eficiencia en cada proyecto.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/deadline_3419083.png') }}" class="w-10 h-10 object-contain">
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Cumplimiento y confiabilidad
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Compromisos cumplidos en tiempo, forma y presupuesto.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/social-responsibility_4914837.png') }}"
                            class="w-10 h-10 object-contain">

                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Enfoque estratégico al cliente
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Entendemos objetivos y aportamos soluciones de valor.
                    </p>

                </div>

                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/solar-energy_2573846.png') }}" class="w-10 h-10 object-contain">
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Innovación y evolución constante
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Mejora continua mediante tecnología y procesos.
                    </p>

                </div>

                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/building_2771387.png') }}" class="w-10 h-10 object-contain">

                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Estructura y profesionalización
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Trabajo basado en procesos y crecimiento ordenado.
                    </p>

                </div>

                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up">

                    <div class="mb-4 flex justify-center">
                        <img src="{{ asset('images/icons/lawyer_7238322.png') }}" class="w-10 h-10 object-contain">
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Integridad y transparencia
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Actuamos con ética y claridad en cada decisión.
                    </p>

                </div><!-- (TODO TU CONTENIDO IGUAL, SOLO CAMBIÉ GRID Y PADDING) -->

            </div>

        </div>

    </section>
@endsection
