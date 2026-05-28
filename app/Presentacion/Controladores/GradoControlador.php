<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class GradoControlador extends Controller
{
    #[OA\Get(
        path: '/grados',
        summary: 'Obtener todos los grados',
        tags: ['Grados']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de grados',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grados recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'nombre', type: 'string', example: 'Décimo')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos()
    {
        //
    }

    #[OA\Post(
        path: '/grados',
        summary: 'Crear un grado',
        security: [['bearerAuth' => []]],
        tags: ['Grados']
    )]
    #[OA\Response(
        response: 201,
        description: 'Grado creado',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Grado creado con éxito.'),
                new OA\Property(property: 'datos', type: 'object'),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(Request $request)
    {
        //
    }
}
