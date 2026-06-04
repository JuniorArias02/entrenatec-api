<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\Dashboard\Acciones\ObtenerEstadisticasDashboardAccion;
use OpenApi\Attributes as OA;

class DashboardControlador extends Controller
{
    #[OA\Get(
        path: '/api/dashboard/estadisticas',
        summary: 'Obtener estadísticas del dashboard',
        security: [['bearerAuth' => []]],
        tags: ['Dashboard']
    )]
    #[OA\Response(
        response: 200,
        description: 'Estadísticas obtenidas con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Estadísticas recuperadas con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'temas_totales', type: 'integer', example: 120),
                    new OA\Property(property: 'temas_publicados', type: 'integer', example: 95),
                    new OA\Property(property: 'materias', type: 'integer', example: 15),
                    new OA\Property(property: 'grados', type: 'integer', example: 6),
                    new OA\Property(property: 'cuadros_teoricos', type: 'integer', example: 45),
                    new OA\Property(property: 'usuarios_totales', type: 'integer', example: 500, description: 'Solo disponible para ADMIN'),
                    new OA\Property(property: 'estudiantes', type: 'integer', example: 450, description: 'Solo disponible para ADMIN'),
                    new OA\Property(property: 'docentes', type: 'integer', example: 40, description: 'Solo disponible para ADMIN'),
                    new OA\Property(property: 'administradores', type: 'integer', example: 10, description: 'Solo disponible para ADMIN')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function estadisticas(Request $request, ObtenerEstadisticasDashboardAccion $accion)
    {
        $usuario = auth('api')->user();
        if (!$usuario) {
            return response()->json([
                'mensaje' => 'No autorizado.',
                'datos' => [],
                'error' => true
            ], 401);
        }

        $estadisticas = $accion->ejecutar($usuario->rol);

        return response()->json([
            'mensaje' => 'Estadísticas recuperadas con éxito.',
            'datos' => $estadisticas,
            'error' => false
        ], 200);
    }
}
