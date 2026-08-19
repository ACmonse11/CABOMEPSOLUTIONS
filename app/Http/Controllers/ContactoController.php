<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validar los campos REALES del formulario
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'correo' => 'required|email|max:150',
            'tipo_proyecto' => 'required|string|max:150',
            'mensaje' => 'required|string|max:3000',
        ]);

        // 2. Obtener token de Microsoft
        $tokenResponse = Http::asForm()->post(
            'https://login.microsoftonline.com/' .
            env('MICROSOFT_TENANT_ID') .
            '/oauth2/v2.0/token',
            [
                'client_id' => env('MICROSOFT_CLIENT_ID'),
                'client_secret' => env('MICROSOFT_CLIENT_SECRET'),
                'scope' => 'https://graph.microsoft.com/.default',
                'grant_type' => 'client_credentials',
            ]
        );

        // Mostrar error real de Microsoft durante las pruebas
        if ($tokenResponse->failed()) {
            dd(
                'ERROR AL OBTENER TOKEN',
                $tokenResponse->status(),
                $tokenResponse->body()
            );
        }

        $accessToken = $tokenResponse->json('access_token');

        // 3. Preparar datos
        $nombre = e($datos['nombre']);
        $apellido = e($datos['apellido']);
        $correo = e($datos['correo']);
        $tipoProyecto = e($datos['tipo_proyecto']);
        $mensaje = nl2br(e($datos['mensaje']));

        // 4. Crear correo
        $contenido = "
            <h2>Nueva solicitud desde CABOMEP Solutions</h2>

            <p>
                <strong>Nombre:</strong>
                {$nombre} {$apellido}
            </p>

            <p>
                <strong>Correo:</strong>
                {$correo}
            </p>

            <p>
                <strong>Tipo de proyecto:</strong>
                {$tipoProyecto}
            </p>

            <p>
                <strong>Mensaje:</strong>
            </p>

            <p>
                {$mensaje}
            </p>
        ";

        // 5. Enviar mediante Microsoft Graph
        $correoResponse = Http::withToken($accessToken)
            ->post(
                'https://graph.microsoft.com/v1.0/users/' .
                env('MICROSOFT_FROM_ADDRESS') .
                '/sendMail',
                [
                    'message' => [

                        'subject' => 'Nueva solicitud de contacto - CABOMEP Solutions',

                        'body' => [
                            'contentType' => 'HTML',
                            'content' => $contenido,
                        ],

                        'toRecipients' => [
                            [
                                'emailAddress' => [
                                    'address' =>
                                    'ventasycotizaciones@cabomepsolutions.com',
                                ],
                            ],
                        ],

                        'replyTo' => [
                            [
                                'emailAddress' => [
                                    'address' => $datos['correo'],
                                    'name' =>
                                    $datos['nombre'] . ' ' .
                                    $datos['apellido'],
                                ],
                            ],
                        ],
                    ],

                    'saveToSentItems' => true,
                ]
            );

        // Mostrar error real si Microsoft rechaza el correo
        if ($correoResponse->failed()) {
            dd(
                'ERROR AL ENVIAR CORREO',
                $correoResponse->status(),
                $correoResponse->body()
            );
        }

        return back()->with(
            'success',
            '¡Gracias! Tu mensaje fue enviado correctamente.'
        );
    }
}
