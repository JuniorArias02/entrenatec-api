<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\Progreso\Acciones\MarcarTemaCompletadoAccion;
use App\Aplicacion\Progreso\Acciones\ObtenerProgresoEstudianteAccion;
use OpenApi\Attributes as OA;

class ProgresoEstudianteControlador extends Controller
{
    #[OA\Post(
        path: '/progreso/temas',
        summary: 'Marcar un tema como completado por un estudiante anónimo',
        tags: ['Progreso Estudiante']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['estudiante_uuid', 'tema_id'],
                properties: [
                    new OA\Property(property: 'estudiante_uuid', type: 'string', example: '123e4567-e89b-12d3-a456-426614174000', description: 'UUID único guardado en el navegador del estudiante'),
                    new OA\Property(property: 'tema_id', type: 'integer', example: 1)
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Tema marcado como completado',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Tema marcado como completado.'),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function marcarCompletado(Request $request, MarcarTemaCompletadoAccion $accion)
    {
        $request->validate([
            'estudiante_uuid' => 'required|string|max:36',
            'tema_id' => 'required|integer|exists:temas,id'
        ]);

        $accion->ejecutar($request->input('estudiante_uuid'), $request->input('tema_id'));

        return response()->json([
            'mensaje' => 'Tema marcado como completado.',
            'datos' => [],
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/progreso/estudiante/{uuid}',
        summary: 'Obtener los IDs de los temas completados por el estudiante anónimo',
        tags: ['Progreso Estudiante']
    )]
    #[OA\Parameter(
        name: 'uuid',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'string')
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de IDs de temas completados',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Progreso recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'integer', example: 1)),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerProgreso(string $uuid, ObtenerProgresoEstudianteAccion $accion)
    {
        $temasCompletadosIds = $accion->ejecutar($uuid);

        return response()->json([
            'mensaje' => 'Progreso recuperado con éxito.',
            'datos' => $temasCompletadosIds,
            'error' => false
        ], 200);
    }
    #[OA\Get(
        path: '/progreso/estudiante/{uuid}/dashboard',
        summary: 'Obtener métricas para el dashboard del estudiante anónimo',
        tags: ['Progreso Estudiante']
    )]
    #[OA\Parameter(
        name: 'uuid',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'string')
    )]
    #[OA\Response(
        response: 200,
        description: 'Métricas del dashboard recuperadas con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Dashboard recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'progreso_general', type: 'integer', example: 45),
                    new OA\Property(property: 'temas_completados', type: 'integer', example: 5),
                    new OA\Property(property: 'temas_totales', type: 'integer', example: 12),
                    new OA\Property(property: 'nivel', type: 'integer', example: 2),
                    new OA\Property(property: 'horas_estudio', type: 'integer', example: 10)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerDashboard(string $uuid, \App\Aplicacion\Progreso\Acciones\ObtenerDashboardEstudianteAccion $accion)
    {
        $metricas = $accion->ejecutar($uuid);

        return response()->json([
            'mensaje' => 'Dashboard recuperado con éxito.',
            'datos' => $metricas,
            'error' => false
        ], 200);
    }
}
