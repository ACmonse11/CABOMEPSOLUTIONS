@extends('layout')

@section('contenido')

<section class="proyecto-page relative overflow-hidden bg-[#F6F6F4]">

    {{-- =========================================================
        HERO / IMAGEN PRINCIPAL
    ========================================================== --}}
    <div class="relative">

        {{-- Imagen --}}
        <div class="relative h-[520px] sm:h-[620px] lg:h-[720px] overflow-hidden">

            <img
                src="{{ str_starts_with($proyecto['imagen'], 'http') ? $proyecto['imagen'] : asset($proyecto['imagen']) }}"
                alt="{{ $proyecto['titulo'] }}"
                class="hero-proyecto-imagen absolute inset-0 w-full h-full object-cover"
                loading="eager"
            >

            {{-- Overlay elegante --}}
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-black/10"></div>

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/10"></div>

            {{-- Línea amarilla decorativa --}}
            <div class="absolute left-0 top-0 h-full w-[5px] bg-[#FDB000]"></div>

            {{-- Contenido --}}
            <div class="absolute inset-0">

                <div class="max-w-7xl mx-auto h-full px-5 sm:px-6 lg:px-8">

                    <div class="h-full flex flex-col justify-between py-8 sm:py-10 lg:py-14">

                        {{-- Regresar --}}
                        <div data-aos="fade-down">

                            <a
                                href="/proyectos"
                                class="btn-regresar group inline-flex items-center gap-3 text-white/80 hover:text-white transition"
                            >

                                <span class="flex items-center justify-center w-9 h-9 rounded-full border border-white/20 bg-white/5 backdrop-blur-md transition group-hover:bg-[#FDB000] group-hover:border-[#FDB000] group-hover:text-black">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-4 h-4 transition-transform duration-300 group-hover:-translate-x-0.5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M15 18l-6-6 6-6"/>
                                    </svg>

                                </span>

                                <span class="text-sm font-medium tracking-wide">
                                    Volver a proyectos
                                </span>

                            </a>

                        </div>


                        {{-- Información hero --}}
                        <div class="max-w-4xl pb-4 sm:pb-8">

                            <div
                                class="flex items-center gap-3 mb-5"
                                data-aos="fade-up"
                            >

                                <span class="w-8 h-[2px] bg-[#FDB000]"></span>

                                <span class="text-[#FDB000] uppercase tracking-[0.28em] text-[11px] sm:text-xs font-semibold">
                                    {{ $proyecto['tipo'] }}
                                </span>

                            </div>


                            <h1
                                class="text-white font-bold tracking-[-0.04em] leading-[0.98]
                                       text-4xl sm:text-5xl md:text-6xl lg:text-[72px]"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                {{ $proyecto['titulo'] }}
                            </h1>


                            <div
                                class="flex flex-wrap items-center gap-x-7 gap-y-3 mt-7 text-white/75"
                                data-aos="fade-up"
                                data-aos-delay="180"
                            >

                                {{-- Ubicación --}}
                                <div class="flex items-center gap-2">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-[18px] h-[18px] text-[#FDB000]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1116 0z"/>
                                        <circle cx="12" cy="10" r="2.5"/>
                                    </svg>

                                    <span class="text-sm sm:text-base">
                                        {{ $proyecto['ubicacion'] }}
                                    </span>

                                </div>


                                {{-- Estado --}}
                                <div class="flex items-center gap-2">

                                    <span class="relative flex w-2.5 h-2.5">
                                        <span class="absolute inline-flex h-full w-full rounded-full bg-[#FDB000] opacity-40 animate-ping"></span>
                                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#FDB000]"></span>
                                    </span>

                                    <span class="text-sm sm:text-base">
                                        {{ $proyecto['estado'] ?? 'Completado' }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Número / detalle visual --}}
        <div class="hidden lg:block absolute right-10 xl:right-16 bottom-[-42px] z-20">

            <div class="w-[150px] h-[84px] bg-[#FDB000] flex items-center justify-center">

                <div class="text-center">

                    <span class="block text-black/60 text-[9px] tracking-[0.28em] uppercase font-bold">
                        Proyecto
                    </span>

                    <span class="block text-black font-black text-2xl mt-1">
                        CABOMEP
                    </span>

                </div>

            </div>

        </div>

    </div>



    {{-- =========================================================
        CONTENIDO
    ========================================================== --}}
    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">

        {{-- Elemento de fondo --}}
        <div class="absolute right-0 top-32 hidden lg:block text-[170px] font-black text-black/[0.025] leading-none select-none pointer-events-none">
            MEP
        </div>


        <div class="relative grid lg:grid-cols-[minmax(0,1fr)_360px] gap-12 lg:gap-16 xl:gap-20">

            {{-- =====================================================
                IZQUIERDA
            ====================================================== --}}
            <main>

                {{-- Intro --}}
                <div
                    class="max-w-3xl"
                    data-aos="fade-up"
                >

                    <p class="text-[#FDB000] text-xs font-bold uppercase tracking-[0.25em] mb-4">
                        Sobre el proyecto
                    </p>

                    <h2 class="text-[#171717] text-3xl sm:text-4xl lg:text-[44px] leading-[1.1] tracking-[-0.03em] font-bold">
                        Ingeniería ejecutada con
                        <span class="text-gray-400">
                            precisión y experiencia.
                        </span>
                    </h2>


                    <div class="mt-8 flex">

                        <div class="w-[4px] bg-[#FDB000] shrink-0"></div>

                        <p class="pl-6 sm:pl-8 text-gray-600 text-base sm:text-lg leading-8">
                            {{ $proyecto['descripcion'] }}
                        </p>

                    </div>

                </div>



                {{-- =====================================================
                    GALERÍA
                ====================================================== --}}
                <section class="mt-16 sm:mt-20">

                    <div
                        class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-5 mb-8"
                        data-aos="fade-up"
                    >

                        <div>

                            <p class="text-[#FDB000] uppercase tracking-[0.25em] text-xs font-bold mb-3">
                                Registro fotográfico
                            </p>

                            <h2 class="text-[#171717] text-3xl sm:text-4xl font-bold tracking-[-0.03em]">
                                Galería del proyecto
                            </h2>

                        </div>


                        <p class="max-w-[290px] text-sm leading-6 text-gray-500">
                            Explora los detalles de ejecución y desarrollo de este proyecto.
                        </p>

                    </div>


                    {{-- Galería --}}
                    <div class="galeria-grid">

                        @foreach ($proyecto['galeria'] as $index => $imagen)

                            <button
                                type="button"
                                class="galeria-item group"
                                data-aos="fade-up"
                                data-aos-delay="{{ min(($index + 1) * 70, 350) }}"
                                onclick="abrirGaleria(this)"
                                aria-label="Ver imagen {{ $index + 1 }} de {{ $proyecto['titulo'] }}"
                            >

                                <img
                                    src="{{ str_starts_with($imagen, 'http') ? $imagen : asset($imagen) }}"
                                    alt="Galería de {{ $proyecto['titulo'] }}"
                                    class="galeria-imagen"
                                    loading="lazy"
                                >


                                {{-- Degradado --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-30 group-hover:opacity-70 transition duration-500"></div>


                                {{-- Número --}}
                                <span class="absolute left-4 top-4 text-white/90 text-[10px] font-semibold tracking-[0.18em]">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>


                                {{-- Botón --}}
                                <div class="galeria-zoom">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                    >
                                        <circle cx="11" cy="11" r="7"/>
                                        <path d="M20 20l-4-4"/>
                                        <path d="M11 8v6M8 11h6"/>
                                    </svg>

                                </div>

                            </button>

                        @endforeach

                    </div>

                </section>

            </main>



            {{-- =====================================================
                ASIDE / FICHA TÉCNICA
            ====================================================== --}}
            <aside>

                <div
                    class="ficha-proyecto lg:sticky lg:top-28"
                    data-aos="fade-left"
                >

                    {{-- Cabecera --}}
                    <div class="bg-[#171717] px-7 py-7 relative overflow-hidden">

                        <div class="absolute right-[-25px] top-[-35px] text-[92px] font-black text-white/[0.035] leading-none">
                            4
                        </div>

                        <p class="relative text-[#FDB000] uppercase tracking-[0.24em] text-[10px] font-bold">
                            Ficha técnica
                        </p>

                        <h3 class="relative text-white text-2xl font-semibold tracking-[-0.02em] mt-2">
                            Información
                            <br>
                            del proyecto
                        </h3>

                    </div>


                    {{-- Información --}}
                    <div class="bg-white px-7 py-7">

                        <div class="divide-y divide-gray-100">

                            {{-- TIPO --}}
                            <div class="info-row py-5 first:pt-0">

                                <div class="info-svg">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    >
                                        <path d="M4 21V9l8-5 8 5v12"/>
                                        <path d="M9 21v-7h6v7"/>
                                    </svg>

                                </div>

                                <div>

                                    <span class="info-label">
                                        Categoría
                                    </span>

                                    <p class="info-value">
                                        {{ $proyecto['categoria'] }}
                                    </p>

                                </div>

                            </div>


                            {{-- UBICACIÓN --}}
                            <div class="info-row py-5">

                                <div class="info-svg">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    >
                                        <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1116 0z"/>
                                        <circle cx="12" cy="10" r="2.5"/>
                                    </svg>

                                </div>

                                <div>

                                    <span class="info-label">
                                        Ubicación
                                    </span>

                                    <p class="info-value">
                                        {{ $proyecto['ubicacion'] }}
                                    </p>

                                </div>

                            </div>


                            {{-- ESTADO --}}
                            <div class="info-row py-5">

                                <div class="info-svg">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    >
                                        <circle cx="12" cy="12" r="9"/>
                                        <path d="M8 12l2.5 2.5L16 9"/>
                                    </svg>

                                </div>

                                <div>

                                    <span class="info-label">
                                        Estado
                                    </span>

                                    <p class="info-value">
                                        {{ $proyecto['estado'] ?? 'Completado' }}
                                    </p>

                                </div>

                            </div>


                            {{-- AÑO --}}
                            @if(isset($proyecto['anio']))

                                <div class="info-row py-5">

                                    <div class="info-svg">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                        >
                                            <rect x="3" y="5" width="18" height="16" rx="2"/>
                                            <path d="M16 3v4M8 3v4M3 10h18"/>
                                        </svg>

                                    </div>

                                    <div>

                                        <span class="info-label">
                                            Año
                                        </span>

                                        <p class="info-value">
                                            {{ $proyecto['anio'] }}
                                        </p>

                                    </div>

                                </div>

                            @endif

                        </div>


                        {{-- CTA --}}
                        <div class="pt-3">

                            <a
                                href="/contacto"
                                class="cta-proyecto group"
                            >

                                <span>
                                    Cotizar un proyecto
                                </span>

                                <span class="cta-flecha">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-[17px] h-[17px]"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M5 12h14M13 6l6 6-6 6"/>
                                    </svg>

                                </span>

                            </a>

                        </div>

                    </div>


                    {{-- Footer ficha --}}
                    <div class="border-t border-gray-100 bg-white px-7 py-5">

                        <p class="text-[11px] leading-5 text-gray-400">
                            Soluciones integrales de ingeniería e Instalaciónes electromecánicas.
                        </p>

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>



{{-- =========================================================
    MODAL DE GALERÍA
========================================================== --}}
<div
    id="modalGaleria"
    class="modal-galeria fixed inset-0 z-[9999] hidden"
    onclick="cerrarGaleria(event)"
>

    <div class="absolute inset-0 bg-black/95 backdrop-blur-sm"></div>


    {{-- Header modal --}}
    <div class="absolute z-20 top-0 left-0 right-0 flex justify-between items-center p-5 sm:p-7">

        <div class="text-white/50 text-xs tracking-[0.18em] uppercase font-medium">
            {{ $proyecto['titulo'] }}
        </div>

        <button
            type="button"
            onclick="cerrarGaleria()"
            class="modal-cerrar"
            aria-label="Cerrar galería"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
            >
                <path d="M6 6l12 12M18 6L6 18"/>
            </svg>

        </button>

    </div>


    {{-- Imagen --}}
    <div class="relative z-10 w-full h-full flex items-center justify-center p-5 sm:p-12 lg:p-16">

        <img
            id="imagenModal"
            src=""
            alt="Vista ampliada de {{ $proyecto['titulo'] }}"
            class="modal-imagen max-w-full max-h-[86vh] object-contain"
        >

    </div>

</div>



<style>

    /* ======================================================
       BASE
    ====================================================== */

    .proyecto-page {
        font-family: inherit;
    }


    /* ======================================================
       HERO
    ====================================================== */

    .hero-proyecto-imagen {
        transform: scale(1.01);
        transition:
            transform 7s cubic-bezier(.2,.6,.2,1),
            filter .8s ease;
    }

    .proyecto-page:hover .hero-proyecto-imagen {
        transform: scale(1.045);
    }


    /* ======================================================
       GALERÍA
    ====================================================== */

    .galeria-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
    }


    .galeria-item {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 220px;
        background: #111;
        cursor: pointer;
        border-radius: 2px;
        outline: none;
        transition:
            transform .45s cubic-bezier(.2,.8,.2,1),
            box-shadow .45s ease;
    }


    .galeria-item:nth-child(5n + 1) {
        grid-column: span 2;
        height: 360px;
    }


    .galeria-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 24px 50px rgba(0,0,0,.14);
    }


    .galeria-imagen {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition:
            transform .75s cubic-bezier(.2,.8,.2,1),
            filter .5s ease;
    }


    .galeria-item:hover .galeria-imagen {
        transform: scale(1.06);
    }


    .galeria-zoom {
        position: absolute;
        right: 16px;
        bottom: 16px;

        width: 44px;
        height: 44px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #111;
        background: #FDB000;

        opacity: 0;
        transform: translateY(8px);

        transition:
            opacity .35s ease,
            transform .35s ease,
            background-color .3s ease;
    }


    .galeria-item:hover .galeria-zoom {
        opacity: 1;
        transform: translateY(0);
    }


    .galeria-zoom:hover {
        background: white;
    }



    /* ======================================================
       FICHA TÉCNICA
    ====================================================== */

    .ficha-proyecto {
        overflow: hidden;
        border: 1px solid rgba(0,0,0,.06);
        box-shadow: 0 20px 60px rgba(0,0,0,.07);

        transition:
            transform .45s ease,
            box-shadow .45s ease;
    }


    .ficha-proyecto:hover {
        transform: translateY(-4px);
        box-shadow: 0 30px 70px rgba(0,0,0,.11);
    }


    .info-row {
        display: flex;
        align-items: center;
        gap: 15px;
    }


    .info-svg {
        width: 42px;
        height: 42px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #E8E8E6;
        background: #F8F8F6;

        color: #191919;

        transition:
            background .3s ease,
            border-color .3s ease,
            color .3s ease;
    }


    .info-svg svg {
        width: 19px;
        height: 19px;
    }


    .info-row:hover .info-svg {
        background: #FDB000;
        border-color: #FDB000;
        color: #111;
    }


    .info-label {
        display: block;

        color: #A1A1A1;

        font-size: 9px;
        line-height: 1.4;

        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .18em;

        margin-bottom: 3px;
    }


    .info-value {
        color: #252525;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.45;
    }



    /* ======================================================
       BOTÓN CTA
    ====================================================== */

    .cta-proyecto {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: space-between;

        width: 100%;

        margin-top: 18px;
        padding: 6px 6px 6px 20px;

        background: #FDB000;
        color: #111;

        font-size: 13px;
        font-weight: 700;

        overflow: hidden;

        transition:
            background-color .3s ease,
            transform .3s ease,
            box-shadow .3s ease;
    }


    .cta-proyecto:hover {
        background: #171717;
        color: white;

        transform: translateY(-2px);

        box-shadow: 0 16px 28px rgba(0,0,0,.16);
    }


    .cta-flecha {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #171717;
        color: white;

        transition:
            transform .3s ease,
            background-color .3s ease,
            color .3s ease;
    }


    .cta-proyecto:hover .cta-flecha {
        transform: translateX(1px);
        background: #FDB000;
        color: #111;
    }



    /* ======================================================
       MODAL
    ====================================================== */

    .modal-galeria.activo {
        display: block;
        animation: modalEntrada .3s ease both;
    }


    .modal-galeria.activo .modal-imagen {
        animation: imagenEntrada .45s cubic-bezier(.2,.8,.2,1) both;
    }


    .modal-cerrar {
        width: 46px;
        height: 46px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: white;

        border: 1px solid rgba(255,255,255,.2);
        background: rgba(255,255,255,.06);

        transition:
            background .3s ease,
            border-color .3s ease,
            color .3s ease,
            transform .3s ease;
    }


    .modal-cerrar:hover {
        color: #111;
        background: #FDB000;
        border-color: #FDB000;
        transform: rotate(90deg);
    }


    @keyframes modalEntrada {

        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }

    }


    @keyframes imagenEntrada {

        from {
            opacity: 0;
            transform: scale(.96);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }

    }



    /* ======================================================
       RESPONSIVE
    ====================================================== */

    @media (min-width: 768px) {

        .galeria-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }


        .galeria-item {
            height: 280px;
        }


        .galeria-item:nth-child(5n + 1) {
            height: 430px;
        }

    }


    @media (max-width: 767px) {

        .galeria-item {
            height: 170px;
        }


        .galeria-item:nth-child(5n + 1) {
            height: 260px;
        }


        .galeria-zoom {
            opacity: 1;
            transform: none;

            width: 38px;
            height: 38px;

            right: 12px;
            bottom: 12px;
        }


        .ficha-proyecto:hover {
            transform: none;
        }


        .proyecto-page:hover .hero-proyecto-imagen {
            transform: scale(1.01);
        }

    }



    /* ======================================================
       REDUCIR ANIMACIONES
    ====================================================== */

    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }

    }

</style>



<script>

    function abrirGaleria(elemento) {

        const imagen = elemento.querySelector('img');
        const modal = document.getElementById('modalGaleria');
        const imagenModal = document.getElementById('imagenModal');

        if (!imagen || !modal || !imagenModal) {
            return;
        }

        imagenModal.src = imagen.src;

        modal.classList.remove('hidden');

        requestAnimationFrame(() => {
            modal.classList.add('activo');
        });

        document.body.style.overflow = 'hidden';
    }



    function cerrarGaleria(evento = null) {

        const modal = document.getElementById('modalGaleria');

        if (!modal) {
            return;
        }


        if (
            evento &&
            evento.target !== modal &&
            !evento.target.classList.contains('modal-galeria')
        ) {
            return;
        }


        modal.classList.remove('activo');

        setTimeout(() => {

            modal.classList.add('hidden');

        }, 250);


        document.body.style.overflow = '';
    }



    document.addEventListener('keydown', function (evento) {

        if (evento.key === 'Escape') {
            cerrarGaleria();
        }

    });

</script>

@endsection
