<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Usuario\Acciones\ObtenerUsuariosAccion;
use App\Aplicacion\Usuario\Acciones\ActualizarPasswordAccion;
use App\Aplicacion\Usuario\Acciones\ActualizarRolAccion;
use App\Presentacion\Requests\ActualizarPasswordRequest;
use App\Presentacion\Requests\ActualizarRolRequest;
use OpenApi\Attributes as OA;

class UsuarioControlador extends Controller
{
    #[OA\Get(
        path: '/api/usuarios',
        summary: 'Obtener todos los usuarios',
        security: [['bearerAuth' => []]],
        tags: ['Usuarios']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de usuarios recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Usuarios recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'nombre', type: 'string', example: 'Juan Perez'),
                        new OA\Property(property: 'correo', type: 'string', example: 'juan@demo.com'),
                        new OA\Property(property: 'rol', type: 'string', example: 'ESTUDIANTE'),
                        new OA\Property(property: 'estado', type: 'string', example: 'ACTIVO')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(ObtenerUsuariosAccion $accion)
    {
        $usuarios = $accion->ejecutar();
        return response()->json([
            'mensaje' => 'Usuarios recuperados con éxito.',
            'datos' => $usuarios,
            'error' => false
        ], 200);
    }

    #[OA\Put(
        path: '/api/usuarios/{id}/password',
        summary: 'Actualizar contraseña de un usuario',
        security: [['bearerAuth' => []]],
        tags: ['Usuarios']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['password'],
                properties: [
                    new OA\Property(property: 'password', type: 'string', example: 'nuevaClave123')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Contraseña actualizada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Contraseña actualizada con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizarPassword(int $id, ActualizarPasswordRequest $request, ActualizarPasswordAccion $accion)
    {
        $usuario = $accion->ejecutar($id, $request->validated('password'));
        return response()->json([
            'mensaje' => 'Contraseña actualizada con éxito.',
            'datos' => ['id' => $usuario->id],
            'error' => false
        ], 200);
    }

    #[OA\Put(
        path: '/api/usuarios/{id}/rol',
        summary: 'Actualizar rol de un usuario',
        security: [['bearerAuth' => []]],
        tags: ['Usuarios']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['rol'],
                properties: [
                    new OA\Property(property: 'rol', type: 'string', enum: ['ADMIN', 'DOCENTE', 'EDITOR', 'ESTUDIANTE'], example: 'DOCENTE')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Rol actualizado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Rol actualizado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'rol', type: 'string', example: 'DOCENTE')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizarRol(int $id, ActualizarRolRequest $request, ActualizarRolAccion $accion)
    {
        $usuario = $accion->ejecutar($id, $request->validated('rol'));
        return response()->json([
            'mensaje' => 'Rol actualizado con éxito.',
            'datos' => [
                'id' => $usuario->id,
                'rol' => $usuario->rol
            ],
            'error' => false
        ], 200);
    }
}
