@extends('layout')

@section('contenido')

<!-- =========================
     BANNER
========================= -->
<section
    class="banner-contacto relative
           h-[420px] sm:h-[500px] md:h-[600px] lg:h-[680px] xl:h-[720px]
           flex items-center justify-center text-center overflow-hidden"
>

    <!-- IMAGEN -->
    <img
        src="{{ asset('images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_04.webp') }}"
        alt="Contacto CABO MEP Solutions"
        class="banner-contacto-img absolute inset-0 w-full h-full
               object-cover object-[center_25%]"
    >

    <!-- CAPA OSCURA -->
    <div
        class="absolute inset-0
               bg-gradient-to-r
               from-black/80
               via-black/50
               to-black/70"
    ></div>

    <!-- SOMBRA INFERIOR -->
    <div
        class="absolute inset-0
               bg-gradient-to-t
               from-black/40
               via-transparent
               to-black/10"
    ></div>

    <!-- LUZ DECORATIVA SUPERIOR -->
    <div
        class="absolute -top-32 -right-32
               w-[450px] h-[450px]
               bg-[#FFB400]/15
               rounded-full
               blur-3xl"
    ></div>

    <!-- LUZ DECORATIVA INFERIOR -->
    <div
        class="absolute -bottom-32 -left-32
               w-[400px] h-[400px]
               bg-white/5
               rounded-full
               blur-3xl"
    ></div>


    <!-- CONTENIDO -->
    <div
        class="relative z-10
               text-white
               px-5 sm:px-6 md:px-8
               w-full max-w-5xl mx-auto"
    >

        <!-- ETIQUETA -->
        <span
            class="banner-contacto-etiqueta
                   inline-block
                   text-[#FFB400]
                   text-xs sm:text-sm
                   font-bold uppercase
                   tracking-[0.20em] sm:tracking-[0.3em]
                   mb-5"
        >
            Estamos para ayudarte
        </span>


        <!-- TÍTULO -->
        <h1
            class="banner-contacto-titulo
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl
                   font-bold
                   mb-6
                   leading-tight"
        >
            Contáctanos
        </h1>


        <!-- LÍNEA AMARILLA -->
        <div
            class="banner-contacto-linea
                   w-20 sm:w-24
                   h-1
                   bg-[#FFB400]
                   rounded-full
                   mx-auto
                   mb-6"
        ></div>


        <!-- DESCRIPCIÓN -->
        <p
            class="banner-contacto-texto
                   text-gray-200
                   max-w-3xl
                   mx-auto
                   text-sm sm:text-lg md:text-xl
                   leading-relaxed"
        >
            Construyamos el futuro juntos. Nuestro equipo está preparado para ayudarte
            a desarrollar tu próximo proyecto.
        </p>

    </div>


    <!-- INDICADOR INFERIOR -->
    <div
        class="absolute bottom-8 left-1/2 -translate-x-1/2
               hidden sm:flex
               flex-col items-center
               gap-2
               text-white/70"
    >

        <span
            class="text-[10px]
                   uppercase
                   tracking-[0.25em]"
        >
            Escríbenos
        </span>

        <div
            class="w-6 h-10
                   border-2 border-white/40
                   rounded-full
                   flex justify-center
                   pt-2"
        >

            <span
                class="w-1.5 h-1.5
                       bg-[#FFB400]
                       rounded-full
                       contacto-scroll"
            ></span>

        </div>

    </div>

</section>


<!-- =========================
     FORMULARIO
========================= -->
<section
    class="relative bg-gray-100
           py-12 sm:py-16 md:py-20 lg:py-24
           overflow-hidden"
>

    <!-- DECORACIÓN -->
    <div
        class="absolute -top-24 -left-24
               w-60 h-60 sm:w-72 sm:h-72
               bg-yellow-500/10
               rounded-full blur-3xl"
    ></div>

    <div
        class="absolute -bottom-24 -right-24
               w-64 h-64 sm:w-80 sm:h-80
               bg-gray-300/40
               rounded-full blur-3xl"
    ></div>


    <div
        class="relative max-w-7xl mx-auto
               px-4 sm:px-6 lg:px-8"
    >

        <!-- =========================
             ENCABEZADO
        ========================= -->
        <div class="text-center mb-10 sm:mb-12">

            <span
                class="inline-block
                       text-[#FDB000]
                       font-semibold uppercase
                       text-xs sm:text-sm
                       tracking-[0.20em] sm:tracking-[0.25em]"
                data-aos="fade-down"
            >
                Hablemos de tu proyecto
            </span>

            <h2
                class="text-2xl sm:text-3xl md:text-4xl
                       font-bold text-gray-900 mt-3
                       leading-tight"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                Estamos listos para escucharte
            </h2>

            <div
                class="w-16 h-1
                       bg-[#FDB000]
                       mx-auto mt-5 rounded-full"
                data-aos="zoom-in"
                data-aos-delay="200"
            ></div>

            <p
                class="max-w-2xl mx-auto mt-5
                       text-sm sm:text-base
                       text-gray-600 leading-relaxed"
                data-aos="fade-up"
                data-aos-delay="300"
            >
                Compártenos la información de tu proyecto y nuestro equipo se pondrá
                en contacto contigo.
            </p>

        </div>


        <!-- =========================
             GRID PRINCIPAL
        ========================= -->
        <div
            class="grid grid-cols-1 lg:grid-cols-2
                   gap-10 lg:gap-14
                   items-start"
        >

            <!-- =========================
                 FORMULARIO
            ========================= -->
            <div
                class="formulario-contacto
                       relative w-full min-w-0
                       bg-white
                       p-5 sm:p-7 md:p-10
                       rounded-2xl shadow-xl
                       border border-gray-100
                       overflow-hidden"
                data-aos="fade-right"
                data-aos-duration="1000"
            >

                <!-- LÍNEA SUPERIOR -->
                <div
                    class="absolute top-0 left-0
                           w-full h-1
                           bg-[#FDB000]"
                ></div>

                <!-- CÍRCULO DECORATIVO -->
                <div
                    class="absolute
                           -right-20 -top-20
                           w-48 h-48
                           bg-yellow-50 rounded-full"
                ></div>


                <div class="relative z-10">

                    <span
                        class="text-yellow-600
                               text-xs sm:text-sm
                               font-semibold uppercase
                               tracking-widest"
                    >
                        Formulario de contacto
                    </span>

                    <h2
                        class="text-2xl sm:text-3xl
                               font-bold mt-2 mb-3
                               text-gray-900"
                    >
                        Escríbenos
                    </h2>

                    <p
                        class="text-gray-500
                               mb-7
                               text-sm sm:text-base
                               leading-relaxed"
                    >
                        Completa el siguiente formulario y nos pondremos en contacto
                        contigo lo antes posible.
                    </p>


                    <!-- MENSAJE DE ÉXITO -->
                    @if (session('success'))

                        <div
                            class="mensaje-exito
                                   flex items-start sm:items-center
                                   gap-3
                                   bg-green-50
                                   border border-green-200
                                   text-green-700
                                   p-4 rounded-xl mb-6"
                            data-aos="zoom-in"
                        >

                            <div
                                class="w-9 h-9
                                       flex-shrink-0
                                       flex items-center justify-center
                                       bg-green-500 text-white
                                       rounded-full"
                            >
                                ✓
                            </div>

                            <p
                                class="text-sm font-medium
                                       break-words min-w-0"
                            >
                                {{ session('success') }}
                            </p>

                        </div>

                    @endif


                    <!-- =========================
                         FORM
                    ========================= -->
                    <form
                        action="/contacto"
                        method="POST"
                        class="space-y-5"
                    >

                        @csrf


                        <!-- NOMBRE Y APELLIDO -->
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-5"
                        >

                            <!-- NOMBRE -->
                            <div class="grupo-campo min-w-0">

                                <label
                                    for="nombre"
                                    class="label-contacto"
                                >
                                    Nombre
                                </label>

                                <div
                                    class="campo-wrapper w-full min-w-0"
                                >

                                    <span
                                        class="campo-icono flex-shrink-0"
                                    >
                                        👤
                                    </span>

                                    <input
                                        id="nombre"
                                        type="text"
                                        name="nombre"
                                        value="{{ old('nombre') }}"
                                        required
                                        placeholder="Tu nombre"
                                        class="input-contacto w-full min-w-0"
                                    >

                                </div>

                                @error('nombre')

                                    <p
                                        class="text-red-500
                                               text-xs mt-1"
                                    >
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>


                            <!-- APELLIDO -->
                            <div class="grupo-campo min-w-0">

                                <label
                                    for="apellido"
                                    class="label-contacto"
                                >
                                    Apellido
                                </label>

                                <div
                                    class="campo-wrapper w-full min-w-0"
                                >

                                    <span
                                        class="campo-icono flex-shrink-0"
                                    >
                                        👤
                                    </span>

                                    <input
                                        id="apellido"
                                        type="text"
                                        name="apellido"
                                        value="{{ old('apellido') }}"
                                        required
                                        placeholder="Tu apellido"
                                        class="input-contacto w-full min-w-0"
                                    >

                                </div>

                                @error('apellido')

                                    <p
                                        class="text-red-500
                                               text-xs mt-1"
                                    >
                                        {{ $message }}
                                    </p>

                                @enderror

                            </div>

                        </div>


                        <!-- =========================
                             CORREO
                        ========================= -->
                        <div class="grupo-campo min-w-0">

                            <label
                                for="correo"
                                class="label-contacto"
                            >
                                Correo electrónico
                            </label>

                            <div
                                class="campo-wrapper w-full min-w-0"
                            >

                                <span
                                    class="campo-icono flex-shrink-0"
                                >
                                    ✉
                                </span>

                                <input
                                    id="correo"
                                    type="email"
                                    name="correo"
                                    value="{{ old('correo') }}"
                                    required
                                    placeholder="nombre@correo.com"
                                    class="input-contacto w-full min-w-0"
                                >

                            </div>

                            @error('correo')

                                <p
                                    class="text-red-500
                                           text-xs mt-1"
                                >
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- =========================
                             TIPO DE PROYECTO
                        ========================= -->
                        <div class="grupo-campo min-w-0">

                            <label
                                for="tipo_proyecto"
                                class="label-contacto"
                            >
                                Tipo de proyecto
                            </label>

                            <div
                                class="campo-wrapper w-full min-w-0"
                            >

                                <span
                                    class="campo-icono flex-shrink-0"
                                >
                                    🏗
                                </span>

                                <select
                                    id="tipo_proyecto"
                                    name="tipo_proyecto"
                                    required
                                    class="input-contacto apariencia-select
                                           w-full min-w-0"
                                >

                                    <option value="">
                                        Selecciona una opción
                                    </option>

                                    <option
                                        value="Hidrosanitarios"
                                        {{ old('tipo_proyecto') === 'Hidrosanitarios' ? 'selected' : '' }}
                                    >
                                        Hidrosanitarios
                                    </option>

                                    <option
                                        value="Electrico"
                                        {{ old('tipo_proyecto') === 'Electrico' ? 'selected' : '' }}
                                    >
                                        Eléctrico
                                    </option>

                                    <option
                                        value="Plomeria"
                                        {{ old('tipo_proyecto') === 'Plomeria' ? 'selected' : '' }}
                                    >
                                        Plomería
                                    </option>

                                    <option
                                        value="PCI"
                                        {{ old('tipo_proyecto') === 'PCI' ? 'selected' : '' }}
                                    >
                                        PCI
                                    </option>

                                    <option
                                        value="CCTV"
                                        {{ old('tipo_proyecto') === 'CCTV' ? 'selected' : '' }}
                                    >
                                        CCTV
                                    </option>

                                    <option
                                        value="Suministros de instalaciones"
                                        {{ old('tipo_proyecto') === 'Suministros de instalaciones' ? 'selected' : '' }}
                                    >
                                        Suministros de instalaciones
                                    </option>

                                    <option
                                        value="Ingenieria y proyectos"
                                        {{ old('tipo_proyecto') === 'Ingenieria y proyectos' ? 'selected' : '' }}
                                    >
                                        Ingeniería y proyectos
                                    </option>

                                    <option
                                        value="Sanitario"
                                        {{ old('tipo_proyecto') === 'Sanitario' ? 'selected' : '' }}
                                    >
                                        Instalaciones sanitarias
                                    </option>

                                    <option
                                        value="Hidraulico"
                                        {{ old('tipo_proyecto') === 'Hidraulico' ? 'selected' : '' }}
                                    >
                                        Instalaciones hidráulicas
                                    </option>

                                    <option
                                        value="Gas LP"
                                        {{ old('tipo_proyecto') === 'Gas LP' ? 'selected' : '' }}
                                    >
                                        Gas LP
                                    </option>

                                    <option
                                        value="AA industriales"
                                        {{ old('tipo_proyecto') === 'AA industriales' ? 'selected' : '' }}
                                    >
                                        Instalaciones AA industriales
                                    </option>

                                    <option
                                    value="Otros"
                                    {{ old('tipo_proyecto')== 'Otros' ? 'selected' : ''}}
                                    >
                                    Otros

                                    </option>

                                </select>

                            </div>

                            @error('tipo_proyecto')

                                <p
                                    class="text-red-500
                                           text-xs mt-1"
                                >
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- =========================
                             MENSAJE
                        ========================= -->
                        <div class="grupo-campo min-w-0">

                            <label
                                for="mensaje"
                                class="label-contacto"
                            >
                                Mensaje
                            </label>

                            <div
                                class="campo-wrapper
                                       items-start
                                       w-full min-w-0"
                            >

                                <span
                                    class="campo-icono
                                           campo-icono-textarea
                                           flex-shrink-0"
                                >
                                    ✎
                                </span>

                                <textarea
                                    id="mensaje"
                                    name="mensaje"
                                    rows="5"
                                    required
                                    placeholder="Cuéntanos brevemente sobre tu proyecto..."
                                    class="input-contacto
                                           textarea-contacto
                                           w-full min-w-0
                                           resize-y"
                                >{{ old('mensaje') }}</textarea>

                            </div>

                            @error('mensaje')

                                <p
                                    class="text-red-500
                                           text-xs mt-1"
                                >
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        <!-- =========================
                             BOTÓN
                        ========================= -->
                        <button
                            type="submit"
                            class="boton-enviar group
                                   relative w-full
                                   overflow-hidden
                                   bg-yellow-600
                                   text-white
                                   py-3.5 px-5 sm:px-6
                                   rounded-xl
                                   font-semibold
                                   shadow-lg shadow-yellow-600/20"
                        >

                            <span
                                class="relative z-10
                                       flex items-center
                                       justify-center gap-2"
                            >

                                Enviar mensaje

                                <span
                                    class="transition-transform
                                           duration-300
                                           group-hover:translate-x-1"
                                >
                                    →
                                </span>

                            </span>

                            <span class="brillo-enviar"></span>

                        </button>

                    </form>

                </div>

            </div>


            <!-- =========================
                 INFORMACIÓN DE CONTACTO
            ========================= -->
            <div
                class="informacion-contacto
                       w-full min-w-0"
                data-aos="fade-left"
                data-aos-duration="1000"
            >

                <span
                    class="text-yellow-600
                           font-semibold uppercase
                           text-xs sm:text-sm
                           tracking-[0.20em] sm:tracking-[0.25em]"
                >
                    Información de contacto
                </span>

                <h2
                    class="text-2xl sm:text-3xl
                           font-bold mt-3 mb-4
                           text-gray-900"
                >
                    Conecta con nuestro equipo
                </h2>

                <p
                    class="text-sm sm:text-base
                           text-gray-600
                           leading-relaxed mb-8"
                >
                    Comunícate con nosotros para recibir información, resolver dudas
                    o solicitar una cotización personalizada.
                </p>


                <!-- =========================
                     TARJETAS
                ========================= -->
                <div class="space-y-5">


                <!-- UBICACIÓN -->
<a
    href="https://maps.app.goo.gl/YyGTGmVkieefBVQV8"
    target="_blank"
    rel="noopener noreferrer"
    class="contacto-card group
           flex items-center
           gap-3 sm:gap-4
           p-4 sm:p-5
           w-full min-w-0
           cursor-pointer"
    data-aos="fade-up"
    data-aos-delay="100"
>

    <div class="contacto-icono flex-shrink-0">

        <img
            src="{{ asset('images/icons/viajar.webp') }}"
            alt="Ubicación"
            class="w-8 h-8 sm:w-9 sm:h-9
                   object-contain"
        >

    </div>

    <div class="min-w-0 flex-1">

        <span
            class="text-[10px] sm:text-xs
                   uppercase tracking-widest
                   text-yellow-600
                   font-semibold"
        >
            Visítanos
        </span>

        <h4
            class="font-bold
                   text-gray-900 mt-1"
        >
            Oficina Cancún
        </h4>

        <p
            class="text-gray-500
                   text-sm mt-1
                   leading-relaxed"
        >
            Cancún, Quintana Roo, México
        </p>

    </div>

    <span
        class="contacto-flecha
               hidden sm:block
               flex-shrink-0"
    >
        →
    </span>

</a>

<!-- UBICACIÓN CABO -->
<a
    href="https://maps.google.com/?q=23.106812,-109.725166"
    target="_blank"
    rel="noopener noreferrer"
    class="contacto-card group
           flex items-center
           gap-3 sm:gap-4
           p-4 sm:p-5
           w-full min-w-0
           cursor-pointer"
    data-aos="fade-up"
    data-aos-delay="150"
>

    <div class="contacto-icono flex-shrink-0">

        <img
            src="{{ asset('images/icons/viajar.webp') }}"
            alt="Ubicación Cabo San Lucas"
            class="w-8 h-8 sm:w-9 sm:h-9
                   object-contain"
        >

    </div>

    <div class="min-w-0 flex-1">

        <span
            class="text-[10px] sm:text-xs
                   uppercase tracking-widest
                   text-yellow-600
                   font-semibold"
        >
            Visítanos
        </span>

        <h4
            class="font-bold
                   text-gray-900 mt-1"
        >
            Oficina Cabo
        </h4>

        <p
            class="text-gray-500
                   text-sm mt-1
                   leading-relaxed"
        >
            Cabo San Lucas, Baja California Sur, México
        </p>

    </div>

    <span
        class="contacto-flecha
               hidden sm:block
               flex-shrink-0"
    >
        →
    </span>

</a>

                    <!-- =========================
                         TELÉFONO
                    ========================= -->
                    <div
                        class="contacto-card group
                               flex items-center
                               gap-3 sm:gap-4
                               p-4 sm:p-5
                               w-full min-w-0"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >

                        <div
                            class="contacto-icono flex-shrink-0"
                        >

                            <img
                                src="{{ asset('images/icons/viber.webp') }}"
                                alt="Teléfono"
                                class="w-8 h-8 sm:w-9 sm:h-9
                                       object-contain"
                            >

                        </div>

                        <div class="min-w-0 flex-1">

                            <span
                                class="text-[10px] sm:text-xs
                                       uppercase tracking-widest
                                       text-yellow-600
                                       font-semibold"
                            >
                                Llámanos
                            </span>

                            <h4
                                class="font-bold
                                       text-gray-900 mt-1"
                            >
                                Teléfono
                            </h4>

                            <p
                                class="text-gray-500
                                       text-sm mt-1
                                       leading-relaxed"
                            >

                                <a
                                    href="tel:+529981362855"
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

                            </p>

                        </div>

                        <span
                            class="contacto-flecha
                                   hidden sm:block
                                   flex-shrink-0"
                        >
                            →
                        </span>

                    </div>


                    <!-- =========================
                         CORREO
                    ========================= -->
                    <div
                        class="contacto-card group
                               flex items-center
                               gap-3 sm:gap-4
                               p-4 sm:p-5
                               w-full min-w-0"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >

                        <div
                            class="contacto-icono flex-shrink-0"
                        >

                            <img
                                src="{{ asset('images/icons/message.webp') }}"
                                alt="Correo electrónico"
                                class="w-8 h-8 sm:w-9 sm:h-9
                                       object-contain"
                            >

                        </div>

                        <div class="min-w-0 flex-1">

                            <span
                                class="text-[10px] sm:text-xs
                                       uppercase tracking-widest
                                       text-yellow-600
                                       font-semibold"
                            >
                                Escríbenos
                            </span>

                            <h4
                                class="font-bold
                                       text-gray-900 mt-1"
                            >
                                Correo electrónico
                            </h4>

                            <p
                                class="text-gray-500
                                       text-xs sm:text-sm
                                       mt-1 leading-relaxed
                                       min-w-0"
                            >

                                <a
                                    href="mailto:ventasycotizaciones@cabomepsolutions.com"
                                    class="block
                                           break-all sm:break-normal
                                           hover:text-[#FDB000]
                                           transition-colors
                                           duration-300"
                                >
                                    ventasycotizaciones@cabomepsolutions.com
                                </a>

                            </p>

                        </div>

                        <span
                            class="contacto-flecha
                                   hidden sm:block
                                   flex-shrink-0"
                        >
                            →
                        </span>

                    </div>

                </div>


                <!-- =========================
                     HORARIO
                ========================= -->
                <div
                    class="horario-card
                           mt-7
                           p-5 sm:p-6
                           rounded-2xl
                           bg-gray-900 text-white
                           overflow-hidden relative"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >

                    <div
                        class="absolute
                               -right-14 -top-14
                               w-40 h-40
                               bg-yellow-500/20
                               rounded-full"
                    ></div>


                    <div class="relative z-10">

                        <span
                            class="text-yellow-400
                                   text-xs sm:text-sm
                                   font-semibold uppercase
                                   tracking-widest"
                        >
                            Horario de atención
                        </span>


                        <div class="mt-4 space-y-3 text-sm">

                            <div
                                class="flex flex-col sm:flex-row
                                       sm:items-center
                                       sm:justify-between
                                       gap-1 sm:gap-4
                                       border-b border-white/10
                                       pb-3"
                            >

                                <span class="text-gray-300">
                                    Lunes a viernes
                                </span>

                                <span class="font-semibold">
                                    9:00 AM – 6:00 PM
                                </span>

                            </div>


                            <div
                                class="flex flex-col sm:flex-row
                                       sm:items-center
                                       sm:justify-between
                                       gap-1 sm:gap-4"
                            >

                                <span class="text-gray-300">
                                    Sábado
                                </span>

                                <span class="font-semibold">
                                    9:00 AM – 2:00 PM
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
