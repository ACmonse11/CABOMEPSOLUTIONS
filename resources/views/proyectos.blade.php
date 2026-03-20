@extends('layout')

@section('contenido')
<section class="py-20 bg-gray-100">

<div class="max-w-7xl mx-auto px-6">

    <!-- TITULO -->
    <h1 class="text-4xl font-bold mb-4" data-aos="fade-down" data-aos-delay="100">
        PROYECTOS
    </h1>

    <p class="text-gray-600 max-w-2xl mb-8" data-aos="fade-down" data-aos-delay="100">
        Explore our diverse range of successful projects across residential
        development, commercial hubs, and industrial facilities.
    </p>

    <!-- FILTROS -->
    <div class="flex flex-wrap gap-3 mb-12" data-aos="fade-left" data-aos-delay="100">

        <button type="button" class="filtro bg-blue-600 text-white px-4 py-2 rounded-full text-sm" data-filtro="todo">
            Todo
        </button>

        <button type="button" class="filtro bg-gray-200 px-4 py-2 rounded-full text-sm" data-filtro="instalaciones">
            Instalaciones
        </button>

        <button type="button" class="filtro bg-gray-200 px-4 py-2 rounded-full text-sm" data-filtro="construcciones">
            Construcciones
        </button>

        <button type="button" class="filtro bg-gray-200 px-4 py-2 rounded-full text-sm" data-filtro="electricas">
            Eléctricas
        </button>

        <button type="button" class="filtro bg-gray-200 px-4 py-2 rounded-full text-sm" data-filtro="hidrosanitarias">
            Hidrosanitarias
        </button>

    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-3 gap-8">

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="0"
            data-categoria="construcciones">

            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Skyline Luxury Apartments</h3>
                <p class="text-gray-500 text-sm">Manhattan, New York</p>
            </div>

        </div>

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="100"
            data-categoria="construcciones">

            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">The Zenith Office Hub</h3>
                <p class="text-gray-500 text-sm">Chicago, Illinois</p>
            </div>

        </div>

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="200"
            data-categoria="electricas">

            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Global Logistics Center</h3>
                <p class="text-gray-500 text-sm">Houston, Texas</p>
            </div>

        </div>

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="300"
            data-categoria="hidrosanitarias">

            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Oceanic Sands Villas</h3>
                <p class="text-gray-500 text-sm">Miami, Florida</p>
            </div>

        </div>

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="400"
            data-categoria="hidrosanitarias">

            <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Heavy Industry Plant</h3>
                <p class="text-gray-500 text-sm">Detroit, Michigan</p>
            </div>

        </div>

        <!-- CARD -->
        <div class="proyecto bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition"
        data-aos="fade-up" data-aos-delay="500"
            data-categoria="instalaciones">

            <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625"
                class="w-full h-48 object-cover">

            <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Installation Project</h3>
                <p class="text-gray-500 text-sm">Chicago, Illinois</p>
            </div>

        </div>

    </div>

</div>

</section>

<!-- SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const botones = document.querySelectorAll('.filtro');
    const proyectos = document.querySelectorAll('.proyecto');

    botones.forEach(boton => {
        boton.addEventListener('click', () => {

            const filtro = boton.dataset.filtro;

            // estilos botones
            botones.forEach(b => {
                b.classList.remove('bg-blue-600','text-white');
                b.classList.add('bg-gray-200');
            });

            boton.classList.remove('bg-gray-200');
            boton.classList.add('bg-blue-600','text-white');

            // filtrar
            proyectos.forEach(proyecto => {
                const categoria = proyecto.dataset.categoria;

                if (filtro === 'todo' || categoria === filtro) {
                    proyecto.style.display = '';
                } else {
                    proyecto.style.display = 'none';
                }
            });

        });
    });

});
</script>

@endsection
