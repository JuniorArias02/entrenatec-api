<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\CuadroTeorico\Acciones\CrearCuadroTeoricoAccion;
use App\Aplicacion\CuadroTeorico\Acciones\ActualizarCuadroTeoricoAccion;
use App\Aplicacion\CuadroTeorico\Acciones\EliminarCuadroTeoricoAccion;
use App\Aplicacion\CuadroTeorico\Acciones\ObtenerCuadrosTeoricosAccion;
use App\Aplicacion\CuadroTeorico\Acciones\ObtenerCuadroTeoricoPorIdAccion;
use App\Dominio\CuadroTeorico\DTOs\CrearCuadroTeoricoDTO;
use App\Dominio\CuadroTeorico\DTOs\ActualizarCuadroTeoricoDTO;
use App\Presentacion\Requests\CrearCuadroTeoricoRequest;
use App\Presentacion\Requests\ActualizarCuadroTeoricoRequest;
use App\Presentacion\Resources\CuadroTeoricoResource;
use OpenApi\Attributes as OA;

class CuadroTeoricoControlador extends Controller
{
    #[OA\Get(
        path: '/api/cuadros-teoricos',
        summary: 'Obtener todos los cuadros teóricos',
        tags: ['Cuadros Teóricos']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de cuadros teóricos recuperada con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadros teóricos recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                        new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                        new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                        new OA\Property(property: 'contenido', type: 'object'),
                        new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO'),
                        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', example: '2026-05-27T22:28:47Z')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(ObtenerCuadrosTeoricosAccion $accion)
    {
        $cuadros = $accion->ejecutar();
        return response()->json([
            'mensaje' => 'Cuadros teóricos recuperados con éxito.',
            'datos' => CuadroTeoricoResource::collection($cuadros),
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/api/cuadros-teoricos/{id}',
        summary: 'Obtener un cuadro teórico por ID',
        tags: ['Cuadros Teóricos']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Detalle del cuadro teórico recuperado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadro teórico recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                    new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                    new OA\Property(property: 'contenido', type: 'object')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    #[OA\Response(
        response: 404,
        description: 'Cuadro teórico no encontrado',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadro teórico no encontrado.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: true)
            ]
        )
    )]
    public function obtenerPorId(int $id, ObtenerCuadroTeoricoPorIdAccion $accion)
    {
        $cuadro = $accion->ejecutar($id);
        if (!$cuadro) {
            return response()->json([
                'mensaje' => 'Cuadro teórico no encontrado.',
                'datos' => [],
                'error' => true
            ], 404);
        }

        // Carga diferida explícita para el recurso si se desea exponer en el JSON
        $cuadro->load(['grado', 'materia', 'periodo']);

        return response()->json([
            'mensaje' => 'Cuadro teórico recuperado con éxito.',
            'datos' => new CuadroTeoricoResource($cuadro),
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/cuadros-teoricos',
        summary: 'Crear un nuevo cuadro teórico',
        security: [['bearerAuth' => []]],
        tags: ['Cuadros Teóricos']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['grado_id', 'materia_id', 'periodo_id', 'contenido', 'estado'],
                properties: [
                    new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                    new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                    new OA\Property(
                        property: 'contenido',
                        type: 'object',
                        properties: [
                            new OA\Property(property: 'componente', type: 'array', items: new OA\Items(type: 'string', example: 'Solución de problemas con tecnología')),
                            new OA\Property(property: 'competencia', type: 'array', items: new OA\Items(type: 'string', example: 'Reconozco y utilizo algoritmos')),
                            new OA\Property(property: 'estandares', type: 'array', items: new OA\Items(type: 'string', example: 'Diseño, construyo y pruebo algoritmos')),
                            new OA\Property(property: 'aprendizaje', type: 'array', items: new OA\Items(type: 'string', example: 'Identifico la estructura básica')),
                            new OA\Property(property: 'evidencia', type: 'array', items: new OA\Items(type: 'string', example: 'Escribe algoritmos sencillos')),
                            new OA\Property(property: 'intensidad_horaria', type: 'string', example: '4 horas semanales')
                        ]
                    ),
                    new OA\Property(property: 'estado', type: 'string', enum: ['BORRADOR', 'PUBLICADO'], example: 'PUBLICADO')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Cuadro teórico creado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadro teórico creado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(CrearCuadroTeoricoRequest $request, CrearCuadroTeoricoAccion $accion)
    {
        $dto = CrearCuadroTeoricoDTO::desdeArray($request->validated());
        $cuadro = $accion->ejecutar($dto);

        return response()->json([
            'mensaje' => 'Cuadro teórico creado con éxito.',
            'datos' => new CuadroTeoricoResource($cuadro),
            'error' => false
        ], 201);
    }

    #[OA\Put(
        path: '/api/cuadros-teoricos/{id}',
        summary: 'Actualizar un cuadro teórico existente',
        security: [['bearerAuth' => []]],
        tags: ['Cuadros Teóricos']
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
                    new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                    new OA\Property(property: 'estado', type: 'string', enum: ['BORRADOR', 'PUBLICADO'], example: 'BORRADOR')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Cuadro teórico actualizado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadro teórico actualizado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizar(int $id, ActualizarCuadroTeoricoRequest $request, ActualizarCuadroTeoricoAccion $accion)
    {
        $dto = ActualizarCuadroTeoricoDTO::desdeArray($request->validated());
        $cuadro = $accion->ejecutar($id, $dto);

        return response()->json([
            'mensaje' => 'Cuadro teórico actualizado con éxito.',
            'datos' => new CuadroTeoricoResource($cuadro),
            'error' => false
        ], 200);
    }

    #[OA\Delete(
        path: '/api/cuadros-teoricos/{id}',
        summary: 'Eliminar un cuadro teórico',
        security: [['bearerAuth' => []]],
        tags: ['Cuadros Teóricos']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Cuadro teórico eliminado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Cuadro teórico eliminado con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function eliminar(int $id, EliminarCuadroTeoricoAccion $accion)
    {
        $accion->ejecutar($id);
        return response()->json([
            'mensaje' => 'Cuadro teórico eliminado con éxito.',
            'datos' => [],
            'error' => false
        ], 200);
    }
}
