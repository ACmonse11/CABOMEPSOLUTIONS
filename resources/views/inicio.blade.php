@extends('layout')

@section('contenido')
    <!-- HERO -->
    <section class="relative h-screen flex items-center bg-gradient-to-r from-gray-900 to-gray-500">

        <div class="max-w-7xl mx-auto px-6 text-white">

            <div class="max-w-xl">

                <div class="w-40 h-2 bg-orange-500 mb-6"></div>

                <h1 class="text-6xl font-bold mb-6">
                    Construyendo
                </h1>

                <p class="text-gray-300 mb-8">
                    ConstruX delivers high-quality modern construction solutions
                    for commercial, industrial, and luxury residential projects.
                </p>

                <div class="flex gap-4">

                    <a href="#" class="bg-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                        Cotización
                    </a>

                </div>

            </div>

        </div>

    </section>
    <!-- EXPERIENCIA -->
    <section class="bg-gray-100 py-20">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-16" data-aos="fade-up">
                Experiencia
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">

                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded mb-4">
                        🏢
                    </div>

                    <h3 class="font-bold text-lg mb-2">Commercial Building</h3>

                    <p class="text-gray-600 text-sm mb-4">
                        High-performance office complexes, retail centers,
                        and hospitality structures designed for business success.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">

                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded mb-4">
                        🏠
                    </div>

                    <h3 class="font-bold text-lg mb-2">Residential Design</h3>

                    <p class="text-gray-600 text-sm mb-4">
                        Custom luxury homes and multi-family developments
                        tailored to modern lifestyles.
                    </p>

                </div>


                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">

                    <div class="w-12 h-12 bg-blue-600 text-white flex items-center justify-center rounded mb-4">
                        🔧
                    </div>

                    <h3 class="font-bold text-lg mb-2">Renovations</h3>

                    <p class="text-gray-600 text-sm mb-4">
                        Transformative interior and structural upgrades that breathe
                        new life into existing spaces.
                    </p>
                    
                </div>

            </div>

        </div>



    </section>

    <!-- PROYECTOS -->
    <section class="py-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex justify-between items-center mb-10">

                <h2 class="text-2xl font-bold">
                    PROYECTO
                </h2>

                <a class="border px-4 py-2 rounded hover:bg-gray-100" href="/proyectos">
                    Ver más →
                </a>

            </div>


            <div class="grid md:grid-cols-3 gap-8">

                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" class="w-full h-64 object-cover">
                </div>

                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625"
                        class="w-full h-64 object-cover">
                </div>

                <div class="rounded-xl overflow-hidden shadow" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5"
                        class="w-full h-64 object-cover">
                </div>

            </div>

        </div>

    </section>
@endsection
