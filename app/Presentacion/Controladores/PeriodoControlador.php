<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Periodo\Acciones\CrearPeriodoAccion;
use App\Aplicacion\Periodo\Acciones\ActualizarPeriodoAccion;
use App\Aplicacion\Periodo\Acciones\EliminarPeriodoAccion;
use App\Aplicacion\Periodo\Acciones\ObtenerPeriodosAccion;
use App\Aplicacion\Periodo\Acciones\ObtenerPeriodoPorIdAccion;
use App\Dominio\Periodo\DTOs\CrearPeriodoDTO;
use App\Dominio\Periodo\DTOs\ActualizarPeriodoDTO;
use App\Presentacion\Requests\CrearPeriodoRequest;
use App\Presentacion\Requests\ActualizarPeriodoRequest;
use App\Presentacion\Resources\PeriodoResource;
use OpenApi\Attributes as OA;

class PeriodoControlador extends Controller
{
    #[OA\Get(
        path: '/api/periodos',
        summary: 'Obtener todos los periodos',
        tags: ['Periodos']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de periodos recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodos recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'numero', type: 'integer', example: 1),
                        new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-01-19'),
                        new OA\Property(property: 'fecha_fin', type: 'string', format: 'date', example: '2026-03-27'),
                        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', example: '2026-05-27T22:28:47Z')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(ObtenerPeriodosAccion $accion)
    {
        $periodos = $accion->ejecutar();
        return response()->json([
            'mensaje' => 'Periodos recuperados con éxito.',
            'datos' => PeriodoResource::collection($periodos),
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/api/periodos/{id}',
        summary: 'Obtener un periodo por ID',
        tags: ['Periodos']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Detalle del periodo recuperado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodo recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'numero', type: 'integer', example: 1),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-01-19'),
                    new OA\Property(property: 'fecha_fin', type: 'string', format: 'date', example: '2026-03-27')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    #[OA\Response(
        response: 404,
        description: 'Periodo no encontrado',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodo no encontrado.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: true)
            ]
        )
    )]
    public function obtenerPorId(int $id, ObtenerPeriodoPorIdAccion $accion)
    {
        $periodo = $accion->ejecutar($id);
        if (!$periodo) {
            return response()->json([
                'mensaje' => 'Periodo no encontrado.',
                'datos' => [],
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Periodo recuperado con éxito.',
            'datos' => new PeriodoResource($periodo),
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/periodos',
        summary: 'Crear un nuevo periodo',
        security: [['bearerAuth' => []]],
        tags: ['Periodos']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['numero', 'fecha_inicio', 'fecha_fin'],
                properties: [
                    new OA\Property(property: 'numero', type: 'integer', example: 1),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-01-19'),
                    new OA\Property(property: 'fecha_fin', type: 'string', format: 'date', example: '2026-03-27')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Periodo creado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodo creado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'numero', type: 'integer', example: 1),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-01-19'),
                    new OA\Property(property: 'fecha_fin', type: 'string', format: 'date', example: '2026-03-27')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(CrearPeriodoRequest $request, CrearPeriodoAccion $accion)
    {
        $dto = CrearPeriodoDTO::desdeArray($request->validated());
        $periodo = $accion->ejecutar($dto);

        return response()->json([
            'mensaje' => 'Periodo creado con éxito.',
            'datos' => new PeriodoResource($periodo),
            'error' => false
        ], 201);
    }

    #[OA\Put(
        path: '/api/periodos/{id}',
        summary: 'Actualizar un periodo existente',
        security: [['bearerAuth' => []]],
        tags: ['Periodos']
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
                    new OA\Property(property: 'numero', type: 'integer', example: 2),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-04-06'),
                    new OA\Property(property: 'fecha_fin', type: 'string', format: 'date', example: '2026-06-12')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Periodo actualizado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodo actualizado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'numero', type: 'integer', example: 2)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizar(int $id, ActualizarPeriodoRequest $request, ActualizarPeriodoAccion $accion)
    {
        $dto = ActualizarPeriodoDTO::desdeArray($request->validated());
        $periodo = $accion->ejecutar($id, $dto);

        return response()->json([
            'mensaje' => 'Periodo actualizado con éxito.',
            'datos' => new PeriodoResource($periodo),
            'error' => false
        ], 200);
    }

    #[OA\Delete(
        path: '/api/periodos/{id}',
        summary: 'Eliminar un periodo',
        security: [['bearerAuth' => []]],
        tags: ['Periodos']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Periodo eliminado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Periodo eliminado con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function eliminar(int $id, EliminarPeriodoAccion $accion)
    {
        $accion->ejecutar($id);
        return response()->json([
            'mensaje' => 'Periodo eliminado con éxito.',
            'datos' => [],
            'error' => false
        ], 200);
    }
}
