@extends('layout')

@section('contenido')
    <!-- BANNER -->
    <section class="relative h-96 flex items-center justify-center text-center">

        <!-- Imagen -->
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 "></div>

        <!-- Texto -->
        <div class="relative text-white px-6">

            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                ¿Quiénes somos?
            </h1>

            <p class="text-gray-200 max-w-xl mx-auto text-lg">
                A legacy of integrity, quality, and safety in every square foot we build.
            </p>

        </div>

    </section>


    <!-- MISION / VISION -->
    <section class="bg-gray-100 py-20">

        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10" data-aos="fade-left">

            <!-- MISIÓN -->
            <div class="bg-white p-10 rounded-xl shadow hover:shadow-lg transition" >

                <div class="text-blue-600 text-3xl mb-4">
                    🎯
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Misión
                </h3>

                <p class="text-gray-600">
                    CABO MEP SOLUTIONS es tu aliado estratégico en soluciones de ingeniería e instalaciones electromecánicas para proyectos turísticos, comerciales y residenciales.
Diseñamos, ejecutamos y optimizamos cada proyecto con altos estándares de calidad, eficiencia y cumplimiento.
                </p>
                <p class="text-gray-600 mt-4">
                   A través de innovación, procesos estructurados y un equipo especializado, transformamos cada desarrollo en una solución funcional, rentable y sostenible.
Más que proveedores, somos socios comprometidos con el éxito de nuestros clientes y el crecimiento de la infraestructura en México.
                </p>

            </div>


            <!-- VISIÓN -->
            <div class="bg-white p-10 rounded-xl shadow hover:shadow-lg transition">

                <div class="text-orange-500 text-3xl mb-4">
                    👁
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Visión
                </h3>

                <p class="text-gray-600">
                Ser una empresa líder a nivel nacional en soluciones de ingeniería e instalaciones electromecánicas, destacando por nuestra capacidad técnica, confiabilidad y ejecución en proyectos de alto nivel.
                </p>
                <p class="text-gray-600 mt-4">
                Buscamos consolidar nuestra presencia en destinos clave de México y expandirnos estratégicamente, integrando innovación, herramientas digitales y un modelo escalable.

                </p>
                <p class="text-gray-600 mt-4">
                 Aspiramos a posicionarnos como un referente del sector, impulsando proyectos de alto impacto y liderando la evolución hacia soluciones más eficientes, profesionales y orientadas a resultados.
                </p>

            </div>

        </div>

    </section>


    <!-- SOBRE NOSOTROS -->
    <section class="py-20">

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>

                <h2 class="text-3xl font-bold mb-6">
                    Sobre nosotros
                </h2>

                <p class="text-gray-600 mb-6">
En CABO MEP SOLUTIONS somos un aliado estratégico en soluciones de ingeniería e instalaciones electromecánicas para proyectos turísticos, comerciales y residenciales de alto nivel.
                </p>

                <p class="text-gray-600 mb-8">
Diseñamos, ejecutamos y optimizamos cada proyecto con un enfoque técnico especializado, garantizando calidad, eficiencia y cumplimiento. Nos apoyamos en la innovación, procesos estructurados y un equipo altamente capacitado para ofrecer soluciones funcionales, rentables y sostenibles.
                </p>

                <p class="text-gray-600 mb-8">
Trabajamos para consolidarnos como una empresa líder a nivel nacional, destacando por nuestra confiabilidad, capacidad de ejecución y presencia en los principales destinos turísticos de México.
                </p>

                <p class="text-gray-600 mb-8">
Más que un proveedor, somos un socio estratégico comprometido con el éxito de nuestros clientes y el desarrollo de infraestructura de alto impacto.
                </p>

                {{-- <div class="flex gap-12">

                    <div>
                        <h3 class="text-3xl font-bold text-blue-600">
                            500+
                        </h3>
                        <p class="text-gray-500 text-sm">
                            Projects completed
                        </p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-orange-500">
                            28+
                        </h3>
                        <p class="text-gray-500 text-sm">
                            Years experience
                        </p>
                    </div>

                </div> --}}

            </div>


            <div>
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" class="rounded-xl shadow-lg" data-aos="fade-up">
            </div>

        </div>

    </section>

    <!-- VALORES -->
    <section class="bg-gray-100 py-20" >

        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-3xl font-bold mb-4">
                VALORES
            </h2>

            <p class="text-gray-500 mb-12">
                The principles that guide every decision we make.
            </p>

            <div class="grid md:grid-cols-3 gap-8 ">

                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up" >

                    <div class="text-blue-600 text-3xl mb-4">
                        ⚖
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Respeto
                    </h3>

                    <p class="text-gray-600 text-sm">
                        We believe in transparent communication and honest business practices.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up" >

                    <div class="text-orange-500 text-3xl mb-4">
                        ⭐
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Responsabilidad
                    </h3>

                    <p class="text-gray-600 text-sm">
                        We don't just build structures; we build excellence with the finest materials.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow transition" data-aos="fade-up" >

                    <div class="text-gray-600 text-3xl mb-4">
                        🛡
                    </div>

                    <h3 class="font-bold text-lg mb-2">
                        Compromiso
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Safety and quality are our top priorities in every project.
                    </p>

                </div>

            </div>

        </div>

    </section>
@endsection
