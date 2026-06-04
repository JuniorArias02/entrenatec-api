<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Grado\Acciones\CrearGradoAccion;
use App\Aplicacion\Grado\Acciones\ActualizarGradoAccion;
use App\Aplicacion\Grado\Acciones\EliminarGradoAccion;
use App\Aplicacion\Grado\Acciones\ObtenerGradosAccion;
use App\Aplicacion\Grado\Acciones\ObtenerGradoPorIdAccion;
use App\Dominio\Grado\DTOs\CrearGradoDTO;
use App\Dominio\Grado\DTOs\ActualizarGradoDTO;
use App\Presentacion\Requests\CrearGradoRequest;
use App\Presentacion\Requests\ActualizarGradoRequest;
use App\Presentacion\Resources\GradoResource;
use OpenApi\Attributes as OA;

class GradoControlador extends Controller
{
    #[OA\Get(
        path: '/api/grados',
        summary: 'Obtener todos los grados',
        tags: ['Grados']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de grados recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grados recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'nombre', type: 'string', example: 'Décimo'),
                        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', example: '2026-05-27T22:28:47Z')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(ObtenerGradosAccion $accion)
    {
        $grados = $accion->ejecutar();
        return response()->json([
            'mensaje' => 'Grados recuperados con éxito.',
            'datos' => GradoResource::collection($grados),
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/api/grados/{id}',
        summary: 'Obtener un grado por ID',
        tags: ['Grados']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Detalle del grado recuperado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Décimo')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    #[OA\Response(
        response: 404,
        description: 'Grado no encontrado',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado no encontrado.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: true)
            ]
        )
    )]
    public function obtenerPorId(int $id, ObtenerGradoPorIdAccion $accion)
    {
        $grado = $accion->ejecutar($id);
        if (!$grado) {
            return response()->json([
                'mensaje' => 'Grado no encontrado.',
                'datos' => [],
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Grado recuperado con éxito.',
            'datos' => new GradoResource($grado),
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/grados',
        summary: 'Crear un nuevo grado',
        security: [['bearerAuth' => []]],
        tags: ['Grados']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['nombre'],
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Once')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Grado creado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado creado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 3),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Once')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(CrearGradoRequest $request, CrearGradoAccion $accion)
    {
        $dto = CrearGradoDTO::desdeArray($request->validated());
        $grado = $accion->ejecutar($dto);

        return response()->json([
            'mensaje' => 'Grado creado con éxito.',
            'datos' => new GradoResource($grado),
            'error' => false
        ], 201);
    }

    #[OA\Put(
        path: '/api/grados/{id}',
        summary: 'Actualizar un grado existente',
        security: [['bearerAuth' => []]],
        tags: ['Grados']
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
                required: ['nombre'],
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Noveno')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Grado actualizado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado actualizado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Noveno')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizar(int $id, ActualizarGradoRequest $request, ActualizarGradoAccion $accion)
    {
        $dto = ActualizarGradoDTO::desdeArray($request->validated());
        $grado = $accion->ejecutar($id, $dto);

        return response()->json([
            'mensaje' => 'Grado actualizado con éxito.',
            'datos' => new GradoResource($grado),
            'error' => false
        ], 200);
    }

    #[OA\Delete(
        path: '/api/grados/{id}',
        summary: 'Eliminar un grado',
        security: [['bearerAuth' => []]],
        tags: ['Grados']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Grado eliminado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado eliminado con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function eliminar(int $id, EliminarGradoAccion $accion)
    {
        $accion->ejecutar($id);
        return response()->json([
            'mensaje' => 'Grado eliminado con éxito.',
            'datos' => [],
            'error' => false
        ], 200);
    }
}
