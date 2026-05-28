<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class MateriaControlador extends Controller
{
    #[OA\Get(
        path: '/materias',
        summary: 'Obtener todas las materias',
        tags: ['Materias']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de materias',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materias recuperadas con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'nombre', type: 'string', example: 'Matemáticas')
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
        path: '/materias',
        summary: 'Crear una materia',
        security: [['bearerAuth' => []]],
        tags: ['Materias']
    )]
    #[OA\Response(
        response: 201,
        description: 'Materia creada',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Materia creada con éxito.'),
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
