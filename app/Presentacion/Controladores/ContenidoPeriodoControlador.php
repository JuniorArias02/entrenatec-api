<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\Contenido\Acciones\ObtenerContenidoPeriodoAccion;
use OpenApi\Attributes as OA;

class ContenidoPeriodoControlador extends Controller
{
    #[OA\Get(
        path: '/api/contenido-periodo',
        summary: 'Obtiene el cuadro teórico y la lista de temas según grado y periodo',
        tags: ['Contenido Estudiante']
    )]
    #[OA\Parameter(
        name: 'grado_id',
        in: 'query',
        required: true,
        schema: new OA\Schema(type: 'integer'),
        description: 'ID del grado seleccionado'
    )]
    #[OA\Parameter(
        name: 'periodo_id',
        in: 'query',
        required: true,
        schema: new OA\Schema(type: 'integer'),
        description: 'ID del periodo seleccionado'
    )]
    #[OA\Response(
        response: 200,
        description: 'Contenido recuperado exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Contenido recuperado con éxito.'),
                new OA\Property(
                    property: 'datos',
                    type: 'object',
                    properties: [
                        new OA\Property(
                            property: 'cuadro_teorico',
                            type: 'object',
                            nullable: true,
                            properties: [
                                new OA\Property(property: 'id', type: 'integer', example: 1),
                                new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                                new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                                new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                                new OA\Property(property: 'contenido', type: 'object'),
                                new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO')
                            ]
                        ),
                        new OA\Property(
                            property: 'temas',
                            type: 'array',
                            items: new OA\Items(
                                properties: [
                                    new OA\Property(property: 'id', type: 'integer', example: 1),
                                    new OA\Property(property: 'titulo', type: 'string', example: 'Introducción a la Informática'),
                                    new OA\Property(property: 'slug', type: 'string', example: 'introduccion-a-la-informatica'),
                                    new OA\Property(property: 'descripcion', type: 'string', example: 'Breve descripción del tema...'),
                                    new OA\Property(property: 'portada', type: 'string', example: 'https://ejemplo.com/portada.jpg'),
                                    new OA\Property(property: 'orden', type: 'integer', example: 1),
                                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO')
                                ]
                            )
                        )
                    ]
                ),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtener(Request $request, ObtenerContenidoPeriodoAccion $accion)
    {
        $request->validate([
            'grado_id' => 'required|integer',
            'periodo_id' => 'required|integer',
        ]);

        $datos = $accion->ejecutar(
            (int) $request->query('grado_id'),
            (int) $request->query('periodo_id')
        );

        return response()->json([
            'mensaje' => 'Contenido recuperado con éxito.',
            'datos' => $datos,
            'error' => false
        ], 200);
    }
}
