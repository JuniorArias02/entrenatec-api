<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\SopaLetras\Acciones\CrearSopaLetrasAccion;
use App\Aplicacion\SopaLetras\Acciones\ObtenerSopasLetrasAccion;
use App\Aplicacion\SopaLetras\Acciones\ObtenerSopaLetrasPorIdAccion;
use App\Aplicacion\SopaLetras\Acciones\EvaluarSopaLetrasAccion;
use App\Presentacion\Requests\CrearSopaLetrasRequest;
use App\Presentacion\Requests\EvaluarSopaLetrasRequest;
use OpenApi\Attributes as OA;

class SopaLetrasControlador extends Controller
{
    #[OA\Get(
        path: '/api/sopa-letras',
        summary: 'Obtener lista de sopas de letras filtradas',
        security: [['bearerAuth' => []]],
        tags: ['Sopa de Letras']
    )]
    #[OA\Parameter(name: 'tema_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Parameter(name: 'grado_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Parameter(name: 'periodo_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Response(
        response: 200,
        description: 'Juegos obtenidos con éxito'
    )]
    public function obtenerTodos(Request $request, ObtenerSopasLetrasAccion $accion)
    {
        $filtros = $request->only(['tema_id', 'grado_id', 'materia_id', 'periodo_id']);
        $sopas = $accion->ejecutar($filtros);

        return response()->json([
            'mensaje' => 'Juegos recuperados con éxito.',
            'datos' => $sopas,
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/sopa-letras',
        summary: 'Crear un juego de Sopa de Letras con palabras ocultas',
        security: [['bearerAuth' => []]],
        tags: ['Sopa de Letras']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['titulo', 'tiempo_limite', 'puntaje_total', 'estado', 'palabras'],
                properties: [
                    new OA\Property(property: 'titulo', type: 'string', example: 'Animales de la Selva'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Encuentra los animales ocultos.'),
                    new OA\Property(property: 'tema_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'grado_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'materia_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'tiempo_limite', type: 'integer', description: 'Tiempo en segundos', example: 120),
                    new OA\Property(property: 'puntaje_total', type: 'integer', example: 100),
                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO'),
                    new OA\Property(
                        property: 'palabras',
                        type: 'array',
                        items: new OA\Items(type: 'string', example: 'TIGRE')
                    )
                ]
            )
        )
    )]
    #[OA\Response(response: 201, description: 'Sopa de letras creada con éxito')]
    public function crear(CrearSopaLetrasRequest $request, CrearSopaLetrasAccion $accion)
    {
        $datosSopa = $request->except('palabras');
        $palabras = $request->input('palabras');

        $sopa = $accion->ejecutar($datosSopa, $palabras);

        return response()->json([
            'mensaje' => 'Sopa de letras creada con éxito.',
            'datos' => $sopa,
            'error' => false
        ], 201);
    }

    #[OA\Get(
        path: '/api/sopa-letras/{id}',
        summary: 'Obtener un juego de Sopa de Letras específico',
        security: [['bearerAuth' => []]],
        tags: ['Sopa de Letras']
    )]
    #[OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'integer'))]
    #[OA\Response(response: 200, description: 'Juego obtenido con éxito')]
    public function obtenerPorId(int $id, ObtenerSopaLetrasPorIdAccion $accion)
    {
        $sopa = $accion->ejecutar($id);

        if (!$sopa) {
            return response()->json([
                'mensaje' => 'Sopa de letras no encontrada.',
                'datos' => null,
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Sopa de letras recuperada con éxito.',
            'datos' => $sopa,
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/sopa-letras/{id}/evaluar',
        summary: 'Evaluar el intento de la Sopa de Letras',
        security: [['bearerAuth' => []]],
        tags: ['Sopa de Letras']
    )]
    #[OA\Parameter(name: 'id', in: 'path', required: true, description: 'ID de la Sopa de Letras', schema: new OA\Schema(type: 'integer'))]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['palabras_encontradas', 'tiempo_utilizado'],
                properties: [
                    new OA\Property(property: 'palabras_encontradas', type: 'integer', description: 'Cantidad de palabras que encontró el estudiante', example: 5),
                    new OA\Property(property: 'tiempo_utilizado', type: 'integer', description: 'Tiempo en segundos que tardó', example: 60)
                ]
            )
        )
    )]
    #[OA\Response(response: 200, description: 'Intento evaluado con éxito')]
    public function evaluar(int $id, EvaluarSopaLetrasRequest $request, EvaluarSopaLetrasAccion $accion)
    {
        $usuarioId = auth()->id() ?? 1; // Fallback de seguridad en pruebas

        $intento = $accion->ejecutar(
            $id, 
            $usuarioId, 
            $request->input('palabras_encontradas'), 
            $request->input('tiempo_utilizado')
        );

        return response()->json([
            'mensaje' => 'Intento evaluado con éxito.',
            'datos' => $intento,
            'error' => false
        ], 200);
    }
}
