<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Presentacion\Requests\CrearTemaRequest;
use App\Presentacion\Requests\SincronizarBloquesTemaRequest;
use App\Dominio\Tema\DTOs\CrearTemaDTO;
use App\Aplicacion\Tema\Acciones\CrearTemaAccion;
use App\Aplicacion\Tema\Acciones\SincronizarBloquesTemaAccion;
use App\Aplicacion\Tema\Acciones\ObtenerTemaPorIdAccion;
use App\Aplicacion\Tema\Acciones\ObtenerTodosLosTemasAccion;
use App\Aplicacion\Tema\Acciones\ActualizarTemaAccion;
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
                        new OA\Property(property: 'slug', type: 'string', example: 'introduccion-al-algebra'),
                        new OA\Property(property: 'estado', type: 'string', example: 'BORRADOR'),
                        new OA\Property(property: 'tiene_contenido', type: 'boolean', example: false)
                    ]
                )),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerTodos(Request $request, ObtenerTodosLosTemasAccion $accion)
    {
        $temas = $accion->ejecutar($request);

        return response()->json([
            'mensaje' => 'Temas recuperados con éxito.',
            'datos' => $temas,
            'error' => false
        ], 200);
    }

    #[OA\Get(
        path: '/temas/{id}',
        summary: 'Obtener el detalle de un tema y sus bloques de contenido',
        tags: ['Temas', 'Contenido Estudiante']
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
                    new OA\Property(property: 'titulo', type: 'string', example: 'Introducción al Álgebra'),
                    new OA\Property(property: 'slug', type: 'string', example: 'introduccion-al-algebra'),
                    new OA\Property(property: 'portada', type: 'string', example: 'http://...'),
                    new OA\Property(property: 'bloques', type: 'array', items: new OA\Items(
                        properties: [
                            new OA\Property(property: 'id', type: 'integer', example: 1),
                            new OA\Property(property: 'tipo', type: 'string', example: 'TEXTO'),
                            new OA\Property(property: 'contenido', type: 'string', example: 'Hola mundo...'),
                            new OA\Property(property: 'metadata', type: 'object', nullable: true)
                        ]
                    ))
                ]),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function obtenerPorId(int $id, ObtenerTemaPorIdAccion $accion)
    {
        $tema = $accion->ejecutar($id);

        if (!$tema) {
            return response()->json([
                'mensaje' => 'Tema no encontrado.',
                'datos' => [],
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Tema recuperado con éxito.',
            'datos' => $tema,
            'error' => false
        ], 200);
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
            mediaType: 'multipart/form-data',
            schema: new OA\Schema(
                required: ['titulo', 'slug', 'grado_id', 'materia_id', 'periodo_id', 'estado'],
                properties: [
                    new OA\Property(property: 'titulo', type: 'string', example: 'Introducción al Álgebra'),
                    new OA\Property(property: 'slug', type: 'string', example: 'introduccion-al-algebra'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Un tema introductorio.'),
                    new OA\Property(property: 'grado_id', type: 'integer', example: 1),
                    new OA\Property(property: 'materia_id', type: 'integer', example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', example: 1),
                    new OA\Property(property: 'creado_por', type: 'integer', example: 1),
                    new OA\Property(property: 'portada', type: 'string', format: 'binary', description: 'Imagen de portada'),
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
    public function crear(CrearTemaRequest $request, CrearTemaAccion $accion)
    {
        $dto = CrearTemaDTO::desdeArray($request->validated());
        $tema = $accion->ejecutar($dto);

        return response()->json([
            'mensaje' => 'Tema creado con éxito.',
            'datos' => ['id' => $tema->id],
            'error' => false
        ], 201);
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
    public function actualizar(Request $request, int $id, ActualizarTemaAccion $accion)
    {
        $reglas = [
            'titulo' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:temas,slug,' . $id,
            'descripcion' => 'nullable|string',
            'grado_id' => 'nullable|integer|exists:grados,id',
            'materia_id' => 'nullable|integer|exists:materias,id',
            'periodo_id' => 'nullable|integer|exists:periodos,id',
            'portada' => 'nullable|image|max:5120',
            'orden' => 'nullable|integer',
            'estado' => 'nullable|string|in:BORRADOR,PUBLICADO,OCULTO',
        ];

        // Para peticiones PUT que envían FormData con _method = PUT
        if ($request->isMethod('put') && empty($request->all())) {
            // Laravel a veces necesita procesar PUT de forma diferente si mandan archivos,
            // pero si es JSON plano o patch normal, esto basta.
        }

        $validados = $request->validate($reglas);

        $tema = $accion->ejecutar($id, $validados);

        return response()->json([
            'mensaje' => 'Tema actualizado con éxito.',
            'datos' => [
                'id' => $tema->id,
                'estado' => $tema->estado
            ],
            'error' => false
        ], 200);
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

    #[OA\Post(
        path: '/temas/{id}/bloques',
        summary: 'Sincronizar (guardar) los bloques de contenido de un tema',
        security: [['bearerAuth' => []]],
        tags: ['Temas']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        schema: new OA\Schema(type: 'integer'),
        description: 'ID del tema al que pertenecen los bloques'
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['bloques'],
                properties: [
                    new OA\Property(
                        property: 'bloques',
                        type: 'array',
                        items: new OA\Items(
                            properties: [
                                new OA\Property(property: 'tipo', type: 'string', example: 'TEXTO'),
                                new OA\Property(property: 'contenido', type: 'string', example: 'El software es...'),
                                new OA\Property(property: 'metadata', type: 'object', example: '{"clave": "valor"}'),
                                new OA\Property(property: 'orden', type: 'integer', example: 1),
                                new OA\Property(property: 'visible', type: 'boolean', example: true)
                            ]
                        )
                    )
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Bloques guardados exitosamente',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string', example: 'Bloques sincronizados con éxito.'),
                new OA\Property(property: 'datos', type: 'array', items: new OA\Items(type: 'string')),
                new OA\Property(property: 'error', type: 'boolean', example: false)
            ]
        )
    )]
    public function sincronizarBloques(int $id, SincronizarBloquesTemaRequest $request, SincronizarBloquesTemaAccion $accion)
    {
        $accion->ejecutar($id, $request->input('bloques'));

        return response()->json([
            'mensaje' => 'Bloques sincronizados con éxito.',
            'datos' => [],
            'error' => false
        ], 200);
    }
}
