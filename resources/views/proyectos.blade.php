@extends('layout')

@section('contenido')

<section class="py-14 sm:py-16 md:py-20 bg-gray-100">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- TITULO -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4" data-aos="fade-down">
        PROYECTOS
    </h1>

    <p class="text-gray-600 max-w-2xl mb-8 text-sm sm:text-base" data-aos="fade-down">
        Explore our diverse range of successful projects across residential
        development, commercial hubs, and industrial facilities.
    </p>

    <!-- FILTROS -->
    <div class="flex flex-wrap gap-2 sm:gap-3 mb-10 sm:mb-12 overflow-x-auto pb-2">

        <button type="button" class="filtro bg-orange-600 text-white px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm whitespace-nowrap" data-filtro="todo">
            Todo
        </button>

        <button type="button" class="filtro bg-gray-200 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm whitespace-nowrap" data-filtro="instalaciones">
            Instalaciones
        </button>

        <button type="button" class="filtro bg-gray-200 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm whitespace-nowrap" data-filtro="construcciones">
            Construcciones
        </button>

        <button type="button" class="filtro bg-gray-200 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm whitespace-nowrap" data-filtro="electricas">
            Eléctricas
        </button>

        <button type="button" class="filtro bg-gray-200 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm whitespace-nowrap" data-filtro="hidrosanitarias">
            Hidrosanitarias
        </button>

    </div>

    <!-- GRID -->
   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="construcciones">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e"
           alt="Skyline Luxury Apartments"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <!-- Badge -->
      <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Construcción
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-blue-600 transition">
        Skyline Luxury Apartments
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Manhattan, New York
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-blue-600 hover:text-blue-800 transition">
        Ver proyecto →
      </a>
    </div>

  </div>

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="construcciones">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625"
           alt="The Zenith Office Hub"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Construcción
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-blue-600 transition">
        The Zenith Office Hub
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Chicago, Illinois
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-blue-600 hover:text-blue-800 transition">
        Ver proyecto →
      </a>
    </div>

  </div>

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="electricas">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5"
           alt="Global Logistics Center"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Eléctrica
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-green-600 transition">
        Global Logistics Center
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Houston, Texas
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-green-600 hover:text-green-800 transition">
        Ver proyecto →
      </a>
    </div>

  </div>

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="hidrosanitarias">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
           alt="Oceanic Sands Villas"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <span class="absolute top-3 left-3 bg-cyan-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Hidrosanitaria
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-cyan-600 transition">
        Oceanic Sands Villas
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Miami, Florida
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-cyan-600 hover:text-cyan-800 transition">
        Ver proyecto →
      </a>
    </div>

  </div>

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="hidrosanitarias">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c"
           alt="Heavy Industry Plant"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <span class="absolute top-3 left-3 bg-cyan-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Hidrosanitaria
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-cyan-600 transition">
        Heavy Industry Plant
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Detroit, Michigan
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-cyan-600 hover:text-cyan-800 transition">
        Ver proyecto →
      </a>
    </div>

  </div>

  <!-- CARD -->
  <div class="proyecto bg-white rounded-lg shadow-sm overflow-hidden group transition"
       data-aos="fade-up" data-categoria="instalaciones">

    <div class="relative overflow-hidden">
      <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625"
           alt="Installation Project"
           class="w-full h-48 sm:h-56 md:h-64 object-cover transform transition duration-500 group-hover:scale-110 group-hover:brightness-75">
      <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
      <span class="absolute top-3 left-3 bg-purple-600 text-white text-xs px-3 py-1 rounded-full shadow">
        Instalación
      </span>
    </div>

    <div class="p-5">
      <h3 class="font-semibold text-lg text-gray-800 group-hover:text-purple-600 transition">
        Installation Project
      </h3>
      <p class="text-gray-500 text-sm mt-1">
        Chicago, Illinois
      </p>
      <a href="#"
         class="inline-block mt-3 text-sm font-medium text-purple-600 hover:text-purple-800 transition">
        Ver proyecto →
      </a>
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

            botones.forEach(b => {
                b.classList.remove('bg-orange-600','text-white');
                b.classList.add('bg-gray-200');
            });

            boton.classList.remove('bg-gray-200');
            boton.classList.add('bg-orange-600','text-white');

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
