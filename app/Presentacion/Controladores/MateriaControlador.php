<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Materia\Acciones\CrearMateriaAccion;
use App\Aplicacion\Materia\Acciones\ActualizarMateriaAccion;
use App\Aplicacion\Materia\Acciones\EliminarMateriaAccion;
use App\Aplicacion\Materia\Acciones\ObtenerMateriasAccion;
use App\Aplicacion\Materia\Acciones\ObtenerMateriaPorIdAccion;
use App\Dominio\Materia\DTOs\CrearMateriaDTO;
use App\Dominio\Materia\DTOs\ActualizarMateriaDTO;
use App\Presentacion\Requests\CrearMateriaRequest;
use App\Presentacion\Requests\ActualizarMateriaRequest;
use App\Presentacion\Resources\MateriaResource;
use OpenApi\Attributes as OA;

class MateriaControlador extends Controller
{
    #[OA\Get(
        path: '/api/materias',
        summary: 'Obtener todas las materias',
        tags: ['Materias']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de materias recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materias recuperadas con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'nombre', type: 'string', example: 'Informática'),
                        new OA\Property(property: 'descripcion', type: 'string', example: 'Materia de informática.'),
                        new OA\Property(property: 'estado', type: 'string', example: 'ACTIVA'),
                        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', example: '2026-05-27T22:28:47Z')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(ObtenerMateriasAccion $accion)
    {
        $materias = $accion->ejecutar();
        return response()->json([
            'mensaje' => 'Materias recuperadas con éxito.',
            'datos' => MateriaResource::collection($materias),
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/api/materias/{id}',
        summary: 'Obtener una materia por ID',
        tags: ['Materias']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Detalle de la materia recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia recuperada con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Informática'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Materia de informática.'),
                    new OA\Property(property: 'estado', type: 'string', example: 'ACTIVA')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    #[OA\Response(
        response: 404,
        description: 'Materia no encontrada',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia no encontrada.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: true)
            ]
        )
    )]
    public function obtenerPorId(int $id, ObtenerMateriaPorIdAccion $accion)
    {
        $materia = $accion->ejecutar($id);
        if (!$materia) {
            return response()->json([
                'mensaje' => 'Materia no encontrada.',
                'datos' => [],
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Materia recuperada con éxito.',
            'datos' => new MateriaResource($materia),
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/materias',
        summary: 'Crear una nueva materia',
        security: [['bearerAuth' => []]],
        tags: ['Materias']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['nombre', 'descripcion', 'estado'],
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Matemáticas'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Materia de cálculo y álgebra.'),
                    new OA\Property(property: 'estado', type: 'string', enum: ['ACTIVA', 'INACTIVA'], example: 'ACTIVA')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Materia creada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia creada con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 2),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Matemáticas'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Materia de cálculo y álgebra.'),
                    new OA\Property(property: 'estado', type: 'string', example: 'ACTIVA')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(CrearMateriaRequest $request, CrearMateriaAccion $accion)
    {
        $dto = CrearMateriaDTO::desdeArray($request->validated());
        $materia = $accion->ejecutar($dto);

        return response()->json([
            'mensaje' => 'Materia creada con éxito.',
            'datos' => new MateriaResource($materia),
            'error' => false
        ], 201);
    }

    #[OA\Put(
        path: '/api/materias/{id}',
        summary: 'Actualizar una materia existente',
        security: [['bearerAuth' => []]],
        tags: ['Materias']
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
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Física'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Física general.'),
                    new OA\Property(property: 'estado', type: 'string', enum: ['ACTIVA', 'INACTIVA'], example: 'ACTIVA')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Materia actualizada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia actualizada con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'nombre', type: 'string', example: 'Física')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizar(int $id, ActualizarMateriaRequest $request, ActualizarMateriaAccion $accion)
    {
        $dto = ActualizarMateriaDTO::desdeArray($request->validated());
        $materia = $accion->ejecutar($id, $dto);

        return response()->json([
            'mensaje' => 'Materia actualizada con éxito.',
            'datos' => new MateriaResource($materia),
            'error' => false
        ], 200);
    }

    #[OA\Delete(
        path: '/api/materias/{id}',
        summary: 'Eliminar una materia',
        security: [['bearerAuth' => []]],
        tags: ['Materias']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Materia eliminada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia eliminada con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function eliminar(int $id, EliminarMateriaAccion $accion)
    {
        $accion->ejecutar($id);
        return response()->json([
            'mensaje' => 'Materia eliminada con éxito.',
            'datos' => [],
            'error' => false
        ], 200);
    }
}
