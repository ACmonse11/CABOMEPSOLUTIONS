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
                Contáctanos
            </h1>

            <p class="text-gray-200 max-w-xl mx-auto text-lg">
                Building the future together. Reach out to our team of experts for your next
                project.
            </p>

        </div>

    </section>

    <!-- FORMULARIO DE CONTACTO -->
    <section class="bg-gray-100 py-20">

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

            <!-- FORMULARIO -->
            <div class="bg-white p-10 rounded-xl shadow" data-aos="flip-right">

                <h2 class="text-2xl font-bold mb-2">
                    Escríbenos!!
                </h2>

                <p class="text-gray-500 mb-6">
                    Fill out the form below and we'll get back to you within 24 hours.
                </p>

                <!-- MENSAJE DE EXITO -->
                @if (session('success'))
                    <div class="bg-green-500 text-white p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/contacto" method="POST" class="space-y-5">

                    @csrf

                    <div class="grid md:grid-cols-2 gap-4">

                        <div>
                            <label class="text-sm text-gray-600">Nombre</label>

                            <input type="text" name="nombre" value="{{ old('nombre') }}" required placeholder="John"
                                class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Apellido</label>

                            <input type="text" name="apellido" value="{{ old('apellido') }}" required placeholder="Doe"
                                class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>

                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Correo</label>

                        <input type="email" name="correo" value="{{ old('correo') }}" required
                            placeholder="noelyaguilar1234@gmail.com"
                            class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Tipo de proyecto</label>

                        <select name="tipo_proyecto" required
                            class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">

                            <option value="">Seleccionar</option>
                            <option>Commercial Construction</option>
                            <option>Residential</option>
                            <option>Industrial</option>

                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Mensaje</label>

                        <textarea name="mensaje" rows="4" required placeholder="How can we help you?"
                            class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('mensaje') }}</textarea>

                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">

                        Enviar

                    </button>

                </form>

            </div>
            <!-- INFORMACION CONTACTO -->
            <div data-aos="flip-right">

                <h2 class="text-2xl font-bold mb-6">
                    Contacto
                </h2>

                <div class="space-y-6">

                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">
                            📍
                        </div>
                        <div>
                            <h4 class="font-semibold">Ubicación</h4>
                            <p class="text-gray-500 text-sm">
                                123 Construction Plaza, Suite 500<br>
                                New York, NY 10001
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">
                            📞
                        </div>
                        <div>
                            <h4 class="font-semibold">Teléfono</h4>
                            <p class="text-gray-500 text-sm">
                                +1 (555) 012-3456<br>
                                +1 (555) 987-6543
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">
                            ✉️
                        </div>
                        <div>
                            <h4 class="font-semibold">Email</h4>
                            <p class="text-gray-500 text-sm">
                                info@buildcorp.com<br>
                                tenders@buildcorp.com
                            </p>
                        </div>
                    </div>

                </div>

                <!-- REDES -->
                <div class="mt-10">

                    <h3 class="font-semibold mb-4">
                        Síguenos
                    </h3>

                    <div class="flex gap-4 text-xl">

                        <div
                            class="bg-gray-200 w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 hover:text-white transition">
                            in
                        </div>

                        <div
                            class="bg-gray-200 w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 hover:text-white transition">
                            tw
                        </div>

                        <div
                            class="bg-gray-200 w-10 h-10 flex items-center justify-center rounded-full hover:bg-blue-500 hover:text-white transition">
                            ig
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
