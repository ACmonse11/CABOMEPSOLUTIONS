@extends('layout')

@section('contenido')

<section class="relative overflow-hidden py-16 md:py-20 bg-gray-100">

    <!-- DECORACIÓN DE FONDO -->
    <div class="absolute -top-28 -right-24 w-72 h-72 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-24 w-80 h-80 bg-yellow-500/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- ENCABEZADO -->
        <div class="mb-10 md:mb-12">

            <span
                class="inline-block text-sm font-bold uppercase tracking-[0.25em] text-[#FFB400] mb-3"
                data-aos="fade-down"
                data-aos-duration="700"
            >
                Nuestro trabajo
            </span>

            <h1
                class="text-3xl md:text-5xl font-bold text-gray-900 mb-4"
                data-aos="fade-right"
                data-aos-delay="100"
            >
                PROYECTOS
            </h1>

            <div
                class="w-20 h-1 bg-[#FFB400] rounded-full mb-5"
                data-aos="zoom-in"
                data-aos-delay="200"
            ></div>

            <p
                class="text-gray-600 max-w-2xl text-base md:text-lg leading-relaxed"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                Explora nuestros proyectos en construcción, Instalaciones,
                sistemas eléctricos y soluciones hidrosanitarias.
            </p>

        </div>

        <!-- FILTROS -->
        <div
            class="flex flex-wrap gap-3 mb-12"
            data-aos="fade-up"
            data-aos-delay="350"
        >

            <button class="filtro active" data-filtro="todo">
                General
            </button>

            <button class="filtro" data-filtro="Hoteles">
                Hoteles
            </button>

            <button class="filtro" data-filtro="Residenciales">
                Residenciales
            </button>

            <button class="filtro" data-filtro="Edificios">
                Edificios
            </button>

            <button class="filtro" data-filtro="Restaurante">
                Restaurante
            </button>

            <button class="filtro" data-filtro="Escuelas">
                Escuelas
            </button>

            <button class="filtro" data-filtro="Hospital">
                Hospital
            </button>

            <button class="filtro" data-filtro="Obras Publicas">
                Obras Publicas
            </button>

            <button class="filtro" data-filtro="Otros">
                Otros
            </button>

        </div>

        <!-- GRID -->
        <div
            id="proyectosGrid"
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
        >

            <!-- CARD 1 -->
            <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <a
                    href="{{ route('proyectos.show', 1) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/WESTIN CANCUN/WESTIN 6_20_11zon.webp') }}"
                        alt="Skyline Luxury Apartments"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones hidrosanitarias y HVAC
                        </span>

                        <h3>
                            Westin Regina
                        </h3>

                        <p>
                            Cancún, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 2 -->
            <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <a
                    href="{{ route('proyectos.show', 2) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 10.webp') }}"
                        alt="The Zenith Office Hub"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Suministro e instalación de equipos eléctricos
                        </span>

                        <h3>
                            Royalton
                        </h3>

                        <p>
                            Puerto Morelos, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 3 -->
            <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 3) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/PLANET HOLLYWOOD/planet 3_9_11zon.webp') }}"
                        alt="Global Logistics Center"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones eléctricas, hidrosanitarias y HVAC
                        </span>

                        <h3>
                            Planet Hollywood
                        </h3>

                        <p>
                            Cancún, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 4 -->
            <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <a
                    href="{{ route('proyectos.show', 4) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA PORTADA_6_11zon.webp') }}"
                        alt="Oceanic Sands Villas"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                             Instalaciones eléctricas e hidrosanitarias
                        </span>

                        <h3>
                            Departamentos Carmen Chavira
                        </h3>

                        <p>
                            Cabo San Lucas, Baja California Sur
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 5 -->
            <div
                class="proyecto"
                data-categoria="Edificios"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <a
                    href="{{ route('proyectos.show', 5) }}"
                    class="proyecto-card group"
                >

                    <img
                         src="{{ asset('images/EDIFICIO SANTA FE CDMX/PORTADA OBRA SANTA FE CDMX_12_11zon.webp') }}"
                        alt="Heavy Industry Plant"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Edificios
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                             Instalación hidrosanitaria e hidrosanitaria
                        </span>

                        <h3>
                            Torre Santa Fe
                        </h3>

                        <p>
                            Ciudad de México
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 6 -->
            <div
                class="proyecto"
                data-categoria="Restaurante"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 6) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS PORTADA_7_11zon.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Restaurante
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones hidrosanitarias
                        </span>

                        <h3>
                            Rosa Negra
                        </h3>

                        <p>
                            Cabo San Lucas, Baja California Sur
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 7 -->
                        <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 7) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_02_PORTADA.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanitario Y Electrico, Albercas
                        </span>

                        <h3>
                            Hotel Único
                        </h3>

                        <p>
                            Playa Del Carmen
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

             <!-- CARD 8 -->
                        <div
                class="proyecto"
                data-categoria="Otros"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 8) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_04.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Otros
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones hidrosanitarias
                        </span>

                        <h3>
                            Lavamatic
                        </h3>

                        <p>
                            Cancún, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 9 -->
                        <div
                class="proyecto"
                data-categoria="Escuelas"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 9) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/CBTIS CANCUN/CBTIS 07.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Escuelas
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones hidrosanitarias
                        </span>

                        <h3>
                            CBTIS Cancún
                        </h3>

                        <p>
                            Cancún, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 10 -->
                        <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 10) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\ATELIER\CABOMEP_FOTO_38.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación hidrosanitaria en alberca
                        </span>

                        <h3>
                            Atelier
                        </h3>

                        <p>
                            Isla Mujeres, Quintana Roo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 11 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 11) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_05.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones eléctricas e hidrosanitarias
                        </span>

                        <h3>
                            Complejo Santa Maria Lote 6
                        </h3>

                        <p>
                            San José del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 12 -->
                        <div
                class="proyecto"
                data-categoria="Otros"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 12) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LAGO\LAGO 02.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Otros
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Limpieza
                        </span>

                        <h3>
                            Limpieza de lago
                        </h3>

                        <p>
                            San José del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 13 -->
                        <div
                class="proyecto"
                data-categoria="Hospital"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 13) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_08.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hospital
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones eléctricas
                        </span>

                        <h3>
                            ISSSTE
                        </h3>

                        <p>
                            Cabo San Lucas
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                         <!-- CARD 14 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 14) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_01.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones eléctricas e hidrosanitarias
                        </span>

                        <h3>
                            Costa Palma La Rivera, Villas 21
                        </h3>

                        <p>
                            Baja california
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 15 -->
                        <div
                class="proyecto"
                data-categoria="Restaurante"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 15) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\CHAMBAO\CHAMBAO_03.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Restaurante
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanittario Y Electrico
                        </span>

                        <h3>
                            Chambao
                        </h3>

                        <p>
                            San José Del Cabo,Baja California
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 16 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 16) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_02.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanitario Y Albercas
                        </span>

                        <h3>
                            Condominios Estereo
                        </h3>

                        <p>
                            San José Del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 17 -->
                        <div
                class="proyecto"
                data-categoria="Restaurante"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 17) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\HOTEL ME, CABO\HOTEL_ME_CABO_04.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Restaurante
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Eléctrica E Hidrosanitario
                        </span>

                        <h3>
                            Restaurantes
                        </h3>

                        <p>
                            Cabo San Lucas, Playa El Medano
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 18 -->
                        <div
                class="proyecto"
                data-categoria="Hoteles"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 18) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\HOTEL SAN REGIS\HOTEL SAN REGIS 04.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Hoteles
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanitaria Y Eléctrica
                        </span>

                        <h3>
                            San Regis
                        </h3>

                        <p>
                            Cabo San Lucas, Pueblo Bonito
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 19 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 19) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 02.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanitaria, Eléctrica Y Alberca
                        </span>

                        <h3>
                            Lote 80, La Playita
                        </h3>

                        <p>
                            San José Del Cabo, Lote 80, La Playita
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 20 -->
                        <div
                class="proyecto"
                data-categoria="Otros"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 20) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_04.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Otros
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                           Instalación Eléctrica
                        </span>

                        <h3>
                            Nave Industrial
                        </h3>

                        <p>
                            San Luis Potosi
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 21 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 21) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 08.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Suministro, Instalación Y Equipamiento De Alberca
                        </span>

                        <h3>
                            Querencia Lote 24 Querencia
                        </h3>

                        <p>
                            San José Del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

                 <!-- CARD 22 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 22) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 21\LOTE 27 09.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalación Hidrosanitario Y Abercas
                        </span>

                        <h3>
                            Costa Palma, Lote 27
                        </h3>

                        <p>
                            Baja California
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

             <!-- CARD 23 -->
                        <div
                class="proyecto"
                data-categoria="Otros"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 23) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\ANIMAS PLAZA\PLAZA ANIMAS 18.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Otros
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones Hvac E Hidrosanitario, Eléctrico
                        </span>

                        <h3>
                            Plaza Animas
                        </h3>

                        <p>
                            Baja California
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

             <!-- CARD 24 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 24) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 14.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones Hidrosanitario Y Albercas
                        </span>

                        <h3>
                            LOTE 21
                        </h3>

                        <p>
                            Baja California
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 25 -->
                        <div
                class="proyecto"
                data-categoria="Residenciales"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 25) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\LOTE 306\306 02.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Residenciales
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Instalaciones Hidráulica y Suministro De Equipamiento De Alberca
                        </span>

                        <h3>
                            Complejo Santa Maria,Lote 306
                        </h3>

                        <p>
                            San José Del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>

            <!-- CARD 26 -->
                        <div
                class="proyecto"
                data-categoria="Obras Publicas"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                <a
                    href="{{ route('proyectos.show', 26) }}"
                    class="proyecto-card group"
                >

                    <img
                        src="{{ asset('images\OBRA PUBLICA\OBRA PÚBLICA 01.webp') }}"
                        alt="Installation Project"
                        class="proyecto-img"
                    >

                    <div class="proyecto-overlay"></div>

                    <div class="proyecto-brillo"></div>

                    <span class="proyecto-badge">
                        Obras Públicas
                    </span>

                    <div class="proyecto-info">

                        <span class="proyecto-categoria">
                            Red De Drenaje Alcantarillado
                        </span>

                        <h3>
                            Obra Pública, Colonia Vista Hermosa
                        </h3>

                        <p>
                            San José Del Cabo
                        </p>

                        <span class="proyecto-enlace">
                            Ver proyecto
                            <span>→</span>
                        </span>

                    </div>

                </a>
            </div>


        </div>

        <!-- MENSAJE SIN RESULTADOS -->
        <div
            id="sinResultados"
            class="hidden text-center bg-white rounded-2xl py-14 px-6 shadow-sm"
        >
            <p class="text-gray-500">
                No hay proyectos disponibles en esta categoría.
            </p>
        </div>

    </div>

</section>


@endsection
