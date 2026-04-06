@extends('layout')

@section('contenido')
    <!-- HERO -->
    <section
  class="relative min-h-screen py-20 flex items-center bg-cover bg-top"
  style="background-image: url('/images/prueba1.jpeg');"
>
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 md:py-24">
            <div class="max-w-2xl text-white">

                <div class="w-16 sm:w-24 h-1 bg-orange-500 mb-5"></div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-4">
                    Construyendo
                </h1>

                <p class="text-gray-200 text-sm sm:text-base md:text-lg mb-8 leading-relaxed">
                    ConstruX delivers high-quality modern construction solutions
                </p>

                <a href="https://wa.me/9986947838?text=Hola,%20quiero%20información"
                    class="inline-flex items-center justify-center bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                    Cotización
                </a>

            </div>
        </div>
    </section>

    <!-- EXPERIENCIA -->
    <section class="bg-gray-100 py-14 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10 sm:mb-14" data-aos="fade-up">
                Experiencia
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">
                    <div class="w-12 h-12 bg-orange-500 text-white flex items-center justify-center rounded mb-4">
                        🏢
                    </div>
                    <h3 class="font-bold text-lg mb-2">Commercial Building</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        High-performance office complexes, retail centers,
                        and hospitality structures designed for business success.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">
                    <div class="w-12 h-12 bg-orange-500 text-white flex items-center justify-center rounded mb-4">
                        🏠
                    </div>
                    <h3 class="font-bold text-lg mb-2">Residential Design</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Custom luxury homes and multi-family developments
                        tailored to modern lifestyles.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">
                    <div class="w-12 h-12 bg-orange-500 text-white flex items-center justify-center rounded mb-4">
                        🔧
                    </div>
                    <h3 class="font-bold text-lg mb-2">Renovations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Transformative interior and structural upgrades that breathe
                        new life into existing spaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROYECTOS -->
    <section class="py-14 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-8">
                <h2 class="text-2xl font-bold">
                    PROYECTOS
                </h2>

                <a href="/proyectos"
                    class="inline-flex items-center justify-center border px-4 py-2 rounded hover:bg-orange-600 transition w-full sm:w-auto">
                    Ver más →
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" alt="Proyecto 1"
                        class="w-full h-56 sm:h-64 object-cover transition duration-300 hover:scale-110">
                </div>

                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625" alt="Proyecto 2"
                        class="w-full h-56 sm:h-64 object-cover transition duration-300 hover:scale-110">
                </div>

                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5" alt="Proyecto 3"
                        class="w-full h-56 sm:h-64 object-cover transition duration-300 hover:scale-110">
                </div>
            </div>
        </div>
    </section>
@endsection
