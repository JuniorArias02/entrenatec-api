<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class TemaControlador extends Controller
{
    #[OA\Get(
        path: '/temas',
        summary: 'Obtener todos los temas',
        tags: ['Temas']
    )]
    #[OA\Response(
        response: 200,
        description: 'Lista de todos los temas',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Temas recuperados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(
                    properties: [
                        new OA\Property(property: 'id', type: 'integer', example: 1),
                        new OA\Property(property: 'titulo', type: 'string', example: 'Introducción al Álgebra'),
                        new OA\Property(property: 'slug', type: 'string', example: 'introduccion-al-algebra')
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos()
    {
        // Lógica para obtener todos los temas
    }

    #[OA\Get(
        path: '/temas/{id}',
        summary: 'Obtener tema por ID',
        tags: ['Temas']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Detalle del tema',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Tema recuperado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1),
                    new OA\Property(property: 'titulo', type: 'string', example: 'Introducción al Álgebra')
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerPorId($id)
    {
        // Lógica para obtener tema por ID
    }

    #[OA\Post(
        path: '/temas',
        summary: 'Crear un nuevo tema',
        security: [['bearerAuth' => []]], // ¡Avisa al panel de documentación que debe blindar con Bearer JWT!
        tags: ['Temas']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['titulo', 'slug', 'descripcion', 'grado_id', 'materia_id', 'periodo_id', 'creado_por', 'portada', 'orden', 'estado'],
                properties: [
                    new OA\Property(property: 'titulo', type: 'string', example: 'Introducción al Álgebra'),
                    new OA\Property(property: 'slug', type: 'string', example: 'introduccion-al-algebra'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Un tema introductorio.'),
                    new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                    new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                    new OA\Property(property: 'creado_por', type: 'integer', example: 1),
                    new OA\Property(property: 'portada', type: 'string', example: 'https://images.com/portada.jpg'),
                    new OA\Property(property: 'orden', type: 'integer', example: 1),
                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Tema creado exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Tema creado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function crear(Request $request)
    {
        // Lógica para crear un tema
    }

    #[OA\Put(
        path: '/temas/{id}',
        summary: 'Actualizar tema existente',
        security: [['bearerAuth' => []]],
        tags: ['Temas']
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
                    new OA\Property(property: 'titulo', type: 'string', example: 'Álgebra Avanzada'),
                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO')
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Tema actualizado exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Tema actualizado con éxito.'),
                new OA\Property(property: 'datos', type: 'object', properties: [
                    new OA\Property(property: 'id', type: 'integer', example: 1)
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function actualizar(Request $request, $id)
    {
        // Lógica para actualizar un tema
    }

    #[OA\Delete(
        path: '/temas/{id}',
        summary: 'Eliminar un tema',
        security: [['bearerAuth' => []]],
        tags: ['Temas']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Tema eliminado exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Tema eliminado con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function eliminar($id)
    {
        // Lógica para eliminar un tema
    }
}
