<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;
use App\Presentacion\Requests\CrearUsuarioRequest;
use App\Aplicacion\Usuario\Acciones\CrearUsuarioAccion;
use App\Aplicacion\Usuario\Acciones\RefrescarTokenAccion;
use App\Dominio\Usuario\DTOs\CrearUsuarioDTO;
use Illuminate\Support\Facades\Mail;
use App\Infraestructura\Usuario\Correos\BienvenidaCorreo;
use App\Infraestructura\Usuario\Correos\InicioSesionCorreo;

class AutenticacionControlador extends Controller
{
    #[OA\Post(
        path: '/auth/login',
        summary: 'Iniciar sesión',
        tags: ['Autenticación']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['correo', 'password'],
                properties: [
                    new OA\Property(property: 'correo', type: 'string', format: 'email', example: 'junior.arias02yt@gmail.com'),
                    new OA\Property(property: 'password', type: 'string', format: 'password', example: 'qweasdzxc')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Genera el Token JWT',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Sesión iniciada con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'token', type: 'string', example: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...'),
                    new OA\Property(property: 'tipo_token', type: 'string', example: 'bearer'),
                    new OA\Property(property: 'expira_en', type: 'integer', example: 3600),
                    new OA\Property(property: 'rol', type: 'string', example: 'ADMIN')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    #[OA\Response(
        response: 401,
        description: 'Credenciales inválidas',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Credenciales incorrectas.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: true)
            ]
        )
    )]
    public function login(Request $request)
    {
        $request->validate([
            'correo' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $credenciales = [
            'correo' => $request->correo,
            'password' => $request->password,
        ];

        if (! $token = auth('api')->attempt($credenciales)) {
            return response()->json([
                'mensaje' => 'Credenciales incorrectas.',
                'datos' => [],
                'error' => true
            ], 401);
        }

        $usuario = auth('api')->user();

        try {
            Mail::to($usuario->correo)->send(new InicioSesionCorreo(
                $usuario,
                now()->format('Y-m-d H:i:s'),
                $request->header('User-Agent') ?? 'Dispositivo desconocido',
                $request->ip() ?? 'IP desconocida'
            ));
        } catch (\Exception $e) {
            // Ignorar el error si el correo falla, para no bloquear el login
        }

        return response()->json([
            'mensaje' => 'Sesión iniciada con éxito.',
            'datos' => [
                'token' => $token,
                'tipo_token' => 'bearer',
                'expira_en' => auth('api')->factory()->getTTL() * 60,
                'rol' => $usuario->rol
            ],
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/auth/registro',
        summary: 'Crear cuenta / Registrar usuario',
        tags: ['Autenticación']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['nombre', 'correo', 'password'],
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Estudiante Nuevo'),
                    new OA\Property(property: 'correo', type: 'string', format: 'email', example: 'estudiante@demo.com'),
                    new OA\Property(property: 'password', type: 'string', format: 'password', example: '12345678')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Cuenta creada exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Usuario registrado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 10),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Estudiante Nuevo'),
                    new OA\Property(property: 'correo', type: 'string', example: 'estudiante@demo.com'),
                    new OA\Property(property: 'rol', type: 'string', example: 'ESTUDIANTE'),
                    new OA\Property(property: 'estado', type: 'string', example: 'ACTIVO')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function registro(
        CrearUsuarioRequest $request,
        CrearUsuarioAccion $crearUsuarioAccion
    ) {
        $datosValidados = $request->validated();
        
        // Asignar por defecto ESTUDIANTE y ACTIVO si no se proveen
        $datosValidados['rol'] = $datosValidados['rol'] ?? 'ESTUDIANTE';
        $datosValidados['estado'] = $datosValidados['estado'] ?? 'ACTIVO';

        $dto = CrearUsuarioDTO::desdeArray($datosValidados);
        $usuario = $crearUsuarioAccion->ejecutar($dto);

        try {
            Mail::to($usuario->correo)->send(new BienvenidaCorreo($usuario));
        } catch (\Exception $e) {
            // Ignorar si el envío falla
        }

        return response()->json([
            'mensaje' => 'Usuario registrado con éxito.',
            'datos' => [
                'id' => $usuario->id,
                'nombre' => $usuario->nombre,
                'correo' => $usuario->correo,
                'rol' => $usuario->rol,
                'estado' => $usuario->estado,
            ],
            'error' => false
        ], 201);
    }

    #[OA\Post(
        path: '/auth/refrescar',
        summary: 'Refrescar el token JWT actual',
        security: [['bearerAuth' => []]],
        tags: ['Autenticación']
    )]
    #[OA\Response(
        response: 200,
        description: 'Token refrescado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Token refrescado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'token', type: 'string', example: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...'),
                    new OA\Property(property: 'tipo_token', type: 'string', example: 'bearer'),
                    new OA\Property(property: 'expira_en', type: 'integer', example: 3600)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function refrescar(
        RefrescarTokenAccion $refrescarTokenAccion
    ) {
        $token = $refrescarTokenAccion->ejecutar();

        return response()->json([
            'mensaje' => 'Token refrescado con éxito.',
            'datos' => [
                'token' => $token,
                'tipo_token' => 'bearer',
                'expira_en' => auth('api')->factory()->getTTL() * 60
            ],
            'error' => false
        ], 200);
    }
}
