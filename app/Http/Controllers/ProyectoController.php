<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * LISTADO DE PROYECTOS
     */
    public function index(Request $request)
    {
        $proyectos = $this->obtenerProyectos();

        // Servicio enviado desde las tarjetas de inicio
        $servicio = $request->query('servicio');

        // Si viene un servicio, filtramos los proyectos
        if ($servicio) {
            $proyectos = array_filter($proyectos, function ($proyecto) use ($servicio) {
                return in_array($servicio, $proyecto['servicios'] ?? []);
            });
        }

        return view('proyectos.index', compact('proyectos', 'servicio'));
    }


    /**
     * DETALLE DEL PROYECTO
     */
    public function show($id)
    {
        $proyectos = $this->obtenerProyectos();

        abort_unless(isset($proyectos[$id]), 404);

        $proyecto = $proyectos[$id];

        return view('proyectos.show', compact('proyecto'));
    }


    /**
     * DATOS DE TODOS LOS PROYECTOS
     */
    private function obtenerProyectos()
    {
        return [

            1 => [
                'titulo' => 'Westin Regina',
                'categoria' => 'Hoteles',

                'tipo' => 'Instalaciones hidrosanitarias y HVAC',

                'servicios' => [
                    'hidrosanitarias',
                    'HVAC'
                ],

                'ubicacion' => 'Cancún, Quintana Roo',

                'imagen' => 'images/WESTIN CANCUN/WESTIN 6_20_11zon.webp',

                'descripcion' => 'Desarrollo integral para garantizar climatización eficiente, distribución segura y óptimo funcionamiento de la infraestructura hotelera.',

                'estado' => 'Completado',

                'anio' => 'SEPTIEMBRE,2017',

                'galeria' => [
                    'images/WESTIN CANCUN/WESTIN_21_11zon.webp',
                    'images/WESTIN CANCUN/WESTIN 5_19_11zon.webp',
                    'images/WESTIN CANCUN/WESTIN 4_18_11zon.webp',
                    'images/WESTIN CANCUN/westin 3_17_11zon.webp',
                    'images/WESTIN CANCUN/WESTIN REGINA 06.webp',
                    'images/WESTIN CANCUN/WESTIN REGINA 13.webp',
                    'images/WESTIN CANCUN/WESTIN REGINA 16.webp',
                    'images/WESTIN CANCUN/WESTIN REGINA 18.webp',
                ],
            ],


            2 => [
                'titulo' => 'Royalton',

                'categoria' => 'Hoteles',

                'tipo' => 'Suministro e instalación de equipos eléctricos',

                'servicios' => [
                    'Eléctricas',
                ],

                'ubicacion' => 'Puerto Morelos, Quintana Roo',

                'imagen' => 'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 10.webp',

                'descripcion' => 'Montaje y puesta en operación de equipos especializados para asegurar el rendimiento de la infraestructura hotelera.',

                'estado' => 'Completado',

                'anio' => 'SEPTIEMBRE,2017',

                'galeria' => [
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 01.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 02.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 03.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 04.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 05.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 06.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 07.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 08.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 09.webp',
                    'images/ROYALTON PUERTO MORELOS QROO/ROYALTON PTO JUAREZ 11.webp',

                ],
            ],


            3 => [
                'titulo' => 'Planet Hollywood',

                'categoria' => 'Hoteles',

                'tipo' => 'Instalaciones eléctricas, hidrosanitarias y HVAC',

                'servicios' => [
                    'Eléctricas',
                    'hidrosanitarias',
                    'mecanicas',
                ],

                'ubicacion' => 'Cancún, Quintana Roo',

                'imagen' => 'images/PLANET HOLLYWOOD/planet 3_9_11zon.webp',

                'descripcion' => 'Integración técnica orientada a garantizar eficiencia energética, climatización y funcionamiento confiable del complejo hotelero.',

                'estado' => 'Completado',

                'anio' => 'JUNIO,2019',

                'galeria' => [
                    'images/PLANET HOLLYWOOD/planet 4_10_11zon.webp',
                    'images/PLANET HOLLYWOOD/planet 5_11_11zon.webp',
                    'images/PLANET HOLLYWOOD/PLANET 1_7_11zon.webp',
                    'images/PLANET HOLLYWOOD/planet 2_8_11zon.webp',
                    'images/PLANET HOLLYWOOD/PLANET HOLYWOOD 14.webp',
                    'images/PLANET HOLLYWOOD/PLANET HOLYWOOD 15.webp',
                    'images/PLANET HOLLYWOOD/PLANET HOLYWOOD 18.webp',
                    'images/PLANET HOLLYWOOD/PLANET HOLYWOOD 20.webp'
                ],
            ],


            4 => [
                'titulo' => 'Departamentos Carmen Chavira',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalaciones eléctricas e hidrosanitarias',

                'servicios' => [
                    'Eléctricas',
                    'hidrosanitarias',
                ],

                'ubicacion' => 'Cabo San Lucas, Baja California Sur',

                'imagen' => 'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA PORTADA_6_11zon.webp',

                'descripcion' => 'Implementación de infraestructura funcional y segura para satisfacer las necesidades operativas del desarrollo residencial.',

                'estado' => 'Completado',


                'galeria' => [
                    'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA 1_1_11zon.webp',
                    'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA 2_2_11zon.webp',
                    'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA 3_3_11zon.webp',
                    'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA 4_4_11zon.webp',
                    'images/CABO DEPTOS CARMEN CHAVIRA/DEPTOS CHAVIRA 5_5_11zon.webp'
                ],
            ],


            5 => [
                'titulo' => 'Torre Santa Fe',

                'categoria' => 'Edificios',

                'tipo' => 'Instalaciones eléctricas e hidrosanitarias',

                'servicios' => [
                    'Eléctricas',
                    'hidrosanitarias',
                ],

                'ubicacion' => 'Ciudad de México',

                'imagen' => 'images/EDIFICIO SANTA FE CDMX/PORTADA OBRA SANTA FE CDMX_12_11zon.webp',

                'descripcion' => 'Ejecución de infraestructura especializada, adaptada a las necesidades operativas y de servicio del establecimiento comercial.',

                'estado' => 'Completado',

                'anio' => '2020',

                'galeria' => [
                    'images/EDIFICIO SANTA FE CDMX/OBRA SANTA FE CDMX 1_8_11zon.webp',
                    'images/EDIFICIO SANTA FE CDMX/OBRA SANTA FE CDMX 2_9_11zon.webp',
                    'images/EDIFICIO SANTA FE CDMX/OBRA SANTA FE CDMX 3_10_11zon.webp',
                    'images/EDIFICIO SANTA FE CDMX/OBRA SANTA FE CDMX_11_11zon.webp',
                ],
            ],


            6 => [
                'titulo' => 'Rosa Negra',

                'categoria' => 'Restaurante',

                'tipo' => 'Instalación hidrosanitaria',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cabo San Lucas, Baja California Sur',

                'imagen' => 'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS PORTADA_7_11zon.webp',

                'descripcion' => 'Desarrollo de infraestructura eficiente para distribución de agua, desalojo sanitario y funcionamiento óptimo del edificio.',

                'estado' => 'Completado',

                'anio' => '2021',

                'galeria' => [
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS 3_2_11zon.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS 4_3_11zon.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS 6_5_11zon.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/RS HACIENDA ENCANTANDA CABO SAN LUCAS 2_1_11zon.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/ROSA NEGRA 24.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/ROSA NEGRA 23.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/ROSA NEGRA 19.webp',
                    'images/REST ROSA NEGRA, HACIENDA ENCANTADA, CABO SAN LUCAS/ROSA NEGRA 09.webp'
                ],
            ],

            7 => [
                'titulo' => 'HOTEL UNICO',

                'categoria' => 'Hotel',

                'tipo' => 'Instalación Hidrosanitario Y Electrico, Albercas',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Playa Del Carmen',

                'imagen' => 'images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_02_PORTADA.webp',

                'descripcion' => 'Ingeniería eléctrica, hidrosanitaria y albercas para hoteles.',

                'estado' => 'Completado',

                'anio' => '2021',

                'galeria' => [
                    'images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_04.webp',
                    'images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_09.webp',
                    'images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_01.webp',
                    'images/HOTEL ÙNICO, RM/HOTEL_UNICO_RM_08.webp',
                ],
            ],

            8 => [
                'titulo' => 'Lavamatic',

                'categoria' => 'Otros',

                'tipo' => 'Instalación hidrosanitaria',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cancún, Quintana Roo',

                'imagen' => 'images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_04.webp',

                'descripcion' => 'Instalación hidrosanitaria especializada para lavandería industrial.',

                'estado' => 'Completado',

                'anio' => 'FEBRERO,2020',

                'galeria' => [
                    'images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_05.webp',
                    'images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_03.webp',
                    'images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_02.webp',
                    'images/CANCUN LAVANDERIA/INSTALACIÓN LAVANDERIA INDUSTRIAL CANCUN_01.webp',
                ],
            ],

             9 => [
                'titulo' => 'CBTIS Cancún',

                'categoria' => 'Escuelas',

                'tipo' => 'Instalación hidrosanitaria',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cancún, Quintana Roo',

                'imagen' => 'images/CBTIS CANCUN/CBTIS 07.webp',

                'descripcion' => 'Instalación hidrosanitaria eficiente y segura para infraestructura educativa, con soluciones especializadas para escuelas.',

                'estado' => 'Completado',

                'anio' => ' 2026',

                'galeria' => [
                    'images\CBTIS CANCUN\CBTIS 02.webp',
                    'images\CBTIS CANCUN\CBTIS 03.webp',
                    'images\CBTIS CANCUN\CBTIS 04.webp',
                    'images\CBTIS CANCUN\CBTIS 05.webp',
                ],
            ],

             10 => [
                'titulo' => 'Atelier',

                'categoria' => 'Hoteles',

                'tipo' => 'Instalación hidrosanitaria en alberca',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Isla Mujeres, Quintana Roo',

                'imagen' => 'images\ATELIER\CABOMEP_FOTO_38.webp',

                'descripcion' => 'Sistema De Calentamiento Para Albercas (Intercambiadores De Calor)',

                'estado' => 'Completado',

                'anio' => 'SEPTIEMBRE 2021',

                'galeria' => [
                    'images\ATELIER\CABOMEP_FOTO_10.webp',
                    'images\ATELIER\CABOMEP_FOTO_36.webp',
                    'images\ATELIER\CABOMEP_FOTO_05.webp',
                    'images\ATELIER\CABOMEP_FOTO_07.webp',
                    'images\ATELIER\CABOMEP_FOTO_02.webp',
                    'images\ATELIER\CABOMEP_FOTO_11.webp',
                    'images\ATELIER\CABOMEP_FOTO_28.webp',
                    'images\ATELIER\CABOMEP_FOTO_31.webp',
                    'images\ATELIER\CABOMEP_FOTO_32.webp',
                ],
            ],

             11 => [
                'titulo' => 'Complejo Santa Maria Lote 6 ',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalación Hidraulico, Instalación Y Sumisnitro De Equipamiento De Alberca',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José del Cabo',

                'imagen' => 'images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_05.webp',

                'descripcion' => 'Instalación hidráulica, suministro y equipamiento de alberca con soluciones eficientes y especializadas para desarrollos residenciales de alto nivel.',

                'estado' => 'OBRA EN PROCESO ',

                'anio' => '2026',

                'galeria' => [
                    'images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_04.webp',
                    'images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_06.webp',
                    'images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_07.webp',
                    'images\LOTE 6 CONDOMINIO SANTA MARIA, SAN JOSE DEL CABO\LOTE_6_CONDOMINIO_STA_MARIA_13.webp',
                ],
            ],

             12 => [
                'titulo' => 'Limpieza de lago',

                'categoria' => 'Otros',

                'tipo' => 'Limpieza De Lago',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José del Cabo',

                'imagen' => 'images\LAGO\LAGO 02.webp',

                'descripcion' => 'Limpieza De Lago, Sistema De Ariadores Descripcion: Dragar El Lodo De Profundidad, Filtrar El Lodo En Bolsas Filtrantes E Instalación De Nanoburbujas Y Areadores',

                'estado' => 'Completado',

                'anio' => '2026',

                'galeria' => [
                    'images\LAGO\LAGO 01.webp',
                    'images\LAGO\LAGO 03.webp',
                    'images\LAGO\LAGO 04.webp',
                    'images\LAGO\LAGO 05.webp',
                    'images\LAGO\LAGO 06.webp',
                    'images\LAGO\LAGO 10.webp',
                    'images\LAGO\LAGO 14.webp',
                    'images\LAGO\LAGO 24.webp',
                    'images\LAGO\LAGO 19.webp',
                    'images\LAGO\LAGO 20.webp',
                    'images\LAGO\LAGO 21.webp',
                ],
            ],

             13 => [
                'titulo' => 'ISSSTE',

                'categoria' => 'Hospital',

                'tipo' => 'Instalación Eléctrica',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cabo San Lucas',

                'imagen' => 'images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_08.webp',

                'descripcion' => 'Instalaciones eléctricas especializadas para infraestructura hospitalaria.',

                'estado' => 'Completado',

                'anio' => '2024',

                'galeria' => [
                    'images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_05.webp',
                    'images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_06.webp',
                    'images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_07.webp',
                    'images/ISSSTE CABO SAN LUCAS/ISSSTE_INSTALACION_ELECTRICA_13.webp',
                ],
            ],

             14 => [
                'titulo' => 'Costa Palma La Rivera, Villas 21',

                'categoria' => 'Residencial',

                'tipo' => 'Instalación Hidroanitario Para Albercas',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Baja california',

                'imagen' => 'images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_01.webp',

                'descripcion' => 'Instalaciones hidrosanitarias para albercas residenciales de lujo.',

                'estado' => 'Completado',

                'anio' => '2021',

                'galeria' => [
                    'images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_02.webp',
                    'images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_03.webp',
                    'images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_04.webp',
                    'images\COSTA PALMA HOTEL PENINSULA, CABO, BAJA CALIFORNIA\HOTEL_PENINSULA_06.webp',
                ],
            ],

            15 => [
                'titulo' => 'Chambao',

                'categoria' => 'Restaurante',

                'tipo' => 'Instalación Hidrosanittario Y Electrico',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo,Baja California',

                'imagen' => 'images\CHAMBAO\CHAMBAO_03.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y eléctricas eficientes, seguras y funcionales para espacios gastronómicos de alto nivel.',

                'estado' => 'Completado',

                'anio' => '2020',

                'galeria' => [
                    'images\CHAMBAO\CHAMBAO_04.webp',
                    'images\CHAMBAO\CHAMBAO_05.webp',
                    'images\CHAMBAO\CHAMBAO_06.webp',
                    'images\CHAMBAO\CHAMBAO_11.webp',
                    'images\CHAMBAO\CHAMBAO_12.webp',
                    'images\CHAMBAO\RESTAURANTES 01.webp',
                    'images\CHAMBAO\RESTAURANTES 03.webp',
                    'images\CHAMBAO\RESTAURANTES 04.webp',
                    'images\CHAMBAO\RESTAURANTES 07.webp'

                ],
            ],

            16 => [
                'titulo' => 'Condominios Estereo',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalación Hidrosanitario Y Albercas',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo',

                'imagen' => 'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_02.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y de albercas con soluciones eficientes, seguras y funcionales para desarrollos residenciales de alto nivel.',

                'estado' => 'Completado',

                'anio' => 'Enero 2026',

                'galeria' => [
                    'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_01.webp',
                    'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_03.webp',
                    'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_04.webp',
                    'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_06.webp',
                    'images\CONDOMINIOS ESTERO\CONDOMINIOS_ESTEREO_07.webp',
                ],
            ],

            17 => [
                'titulo' => 'Restaurantes',

                'categoria' => 'Restaurante',

                'tipo' => 'Instalación Eléctrica E Hidrosanitario',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cabo San Lucas, Playa El Medano',

                'imagen' => 'images\HOTEL ME, CABO\HOTEL_ME_CABO_04.webp',

                'descripcion' => 'Ingeniería eléctrica e hidrosanitaria para restaurantes premium.',

                'estado' => 'Completado',

                'galeria' => [
                    'images\HOTEL ME, CABO\HOTEL_ME_CABO_06.webp',
                    'images\HOTEL ME, CABO\HOTEL_ME_CABO_07.webp',
                    'images\HOTEL ME, CABO\HOTEL_ME_CABO_11.webp',
                    'images\HOTEL ME, CABO\HOTEL_ME_CABO_12.webp',
                    'images\HOTEL ME, CABO\VARIEDAD RESTAURANTES 04.webp',
                    'images\HOTEL ME, CABO\VARIEDAD RESTAURANTES 05.webp',
                    'images\HOTEL ME, CABO\VARIEDAD RESTAURANTES 06.webp',
                    'images\HOTEL ME, CABO\VARIEDAD RESTAURANTES 07.webp',

                ],
            ],

            18 => [
                'titulo' => 'San Regis',

                'categoria' => 'hoteles',

                'tipo' => 'Instalación Hidrosanitaria Y Eléctrica',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Cabo San Lucas, Pueblo Bonito',

                'imagen' => 'images\HOTEL SAN REGIS\HOTEL SAN REGIS 04.webp',

                'descripcion' => 'Instalaciones eléctricas e hidrosanitarias para hoteles de lujo.',

                'estado' => 'Completado',

                'anio' => '2020',

                'galeria' => [
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 01.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 02.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 03.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 05.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 13.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 14.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 15.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 16.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 20.webp',
                    'images\HOTEL SAN REGIS\HOTEL SAN REGIS 21.webp',
                ],
            ],

            19 => [
                'titulo' => 'Lote 80, La Playita',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalación Hidrosanitario, Electrico Y Alberca',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo, Lote 80, La Playita',

                'imagen' => 'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 02.webp',

                'descripcion' => 'Instalaciones hidrosanitarias, eléctricas y de alberca con soluciones eficientes, seguras y especializadas para proyectos residenciales de alto nivel.',

                'estado' => 'Completado',

                'Anio' => '2025',

                'galeria' => [
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 01.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 03.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 04.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 05.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 06.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 07.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 08.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 09.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 10.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 11.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 12.webp',
                    'images\LOTE 80 LA PLAYITA SAN JOSE EL CABO\LOTE 80 13.webp',
                ],
            ],

            20 => [
                'titulo' => 'Nave Industrial ',

                'categoria' => 'Otros',

                'tipo' => 'Instalación Eléctrica',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San Luis Potosi',

                'imagen' => 'images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_04.webp',

                'descripcion' => 'Instalaciones eléctricas industriales en San Luis Potosí.',

                'Anio' => 'JULIO 2020',

                'estado' => 'Completado',

                'galeria' => [
                    'images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_05.webp',
                    'images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_08.webp',
                    'images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_10.webp',
                    'images\SLP NAVE INDUSTRIAL\SLP_NAVE_INDUSTRIAL_11.webp',
                ],
            ],

            21 => [
                'titulo' => 'Querencia Lote 24 Querencia',

                'categoria' => 'Residencial',

                'tipo' => 'Suministro, Instalación Y Equipamiento De Alberca',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo',

                'imagen' => 'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 17.webp',

                'descripcion' => 'Suministro, instalación y equipamiento profesional de albercas.',

                'estado' => 'Completado',

                'anio' => '2020',

                'galeria' => [
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 01.webp',
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 03.webp',
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 06.webp',
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 12.webp',
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 15.webp',
                    'images\LOTE 24 QUERENCIA, SAN JOSE DEL CABO\LOTE 24 16.webp'
                ],
            ],

            22 => [
                'titulo' => 'Costa Palma, Lote 27 ',

                'categoria' => 'Residencial',

                'tipo' => 'Instalación Hidrosanitario Y Abercas',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Baja California',

                'imagen' => 'images\LOTE 21\LOTE 27 09.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y de albercas con soluciones eficientes, seguras y funcionales para proyectos residenciales de alto nivel.',

                'estado' => 'Completado',

                'anio' => '2025',

                'galeria' => [


                     'images\LOTE 21\LOTE 27 01.webp',
                    'images\LOTE 21\LOTE 27 03.webp',
                    'images\LOTE 21\LOTE 27 04.webp',
                    'images\LOTE 21\LOTE 27 07.webp',
                    'images\LOTE 21\LOTE 27 10.webp',
                    'images\LOTE 21\LOTE 27 12.webp',
                    'images\LOTE 21\LOTE 27 14.webp',
                    'images\LOTE 21\LOTE 27 15.webp',

                ],
            ],

            23 => [
                'titulo' => 'Plaza Animas ',

                'categoria' => 'Otros',

                'tipo' => 'Instalaciones Hvac E Hidrosanitario, Ellectrico',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Baja California',

                'imagen' => 'images\ANIMAS PLAZA\PLAZA ANIMAS 18.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y de albercas con soluciones eficientes, seguras y funcionales para proyectos residenciales de alto nivel.',

                'estado' => 'Completado',

                'galeria' => [
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 01.webp',
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 04.webp',
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 10.webp',
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 12.webp',
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 14.webp',
                    'images\ANIMAS PLAZA\PLAZA ANIMAS 15.webp',
                ],
            ],

             24 => [
                'titulo' => 'LOTE 21',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalaciones Hidrosanitario Y Albercas',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'Baja California',

                'imagen' =>
                'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 14.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y de albercas con soluciones eficientes, seguras y funcionales para proyectos residenciales de alto nivel.',

                'estado' => 'Completado',

                'galeria' => [
                     'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 01.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 04.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 05.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 06.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 10.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 12.webp',
                    'images\LOTE 27, RIVERA COSTA PALMA, BAJA CALIFORNIA\LOTE 27 13.webp',

                ],
            ],

            25 => [
                'titulo' => 'Complejo Santa Maria,Lote 306 ',

                'categoria' => 'Residenciales',

                'tipo' => 'Instalaciones Hidraulico, Instalación Y Sumisnitro De Equipamiento De Alberca',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo',

                'imagen' => 'images\LOTE 306\306 02.webp',

                'descripcion' => 'Instalaciones hidrosanitarias y de albercas con soluciones eficientes, seguras y funcionales para proyectos residenciales de alto nivel.',

                'estado' => 'En proceso',

                'anio' => '2026',

                'galeria' => [
                    'images\LOTE 306\306 01.webp',
                    'images\LOTE 306\306 03.webp',
                    'images\LOTE 306\306 04.webp',
                    'images\LOTE 306\306 07.webp',
                    'images\LOTE 306\306 10.webp',
                    'images\LOTE 306\306 12.webp',
                    'images\LOTE 306\306 14.webp',
                    'images\LOTE 306\306 15.webp',
                ],
            ],

             26 => [
                'titulo' => 'Obra Pública, Colonia Vista Hermosa',

                'categoria' => 'Obras Públicas',

                'tipo' => 'Red De Drenaje Alcantarillado',

                'servicios' => [
                    'hidrosanitarias',
                    'plomeria',
                ],

                'ubicacion' => 'San José Del Cabo',

                'imagen' => 'images\OBRA PUBLICA\OBRA PÚBLICA 01.webp',

                'descripcion' => 'Construcción de red de drenaje y alcantarillado sanitario con soluciones eficientes y seguras para infraestructura urbana y obras públicas.',

                'estado' => 'Completado',

                'anio' => '2022',

                'galeria' => [
                    'images\OBRA PUBLICA\OBRA PÚBLICA 02.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 03.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 04.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 05.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 06.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 07.webp',
                    'images\OBRA PUBLICA\OBRA PÚBLICA 08.webp',
                ],
            ],

        ];
    }
}
