<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use App\Aplicacion\Quiz\Acciones\AgregarPreguntaAccion;
use App\Aplicacion\Quiz\Acciones\ActualizarPreguntaAccion;
use App\Aplicacion\Quiz\Acciones\EliminarPreguntaAccion;
use App\Presentacion\Requests\AgregarPreguntaRequest;
use App\Presentacion\Requests\ActualizarPreguntaRequest;
use OpenApi\Attributes as OA;

class QuizPreguntaControlador extends Controller
{
    #[OA\Post(
        path: '/api/quizzes/{quiz_id}/preguntas',
        summary: 'Agregar una pregunta a un quiz existente',
        security: [['bearerAuth' => []]],
        tags: ['Preguntas Quiz']
    )]
    #[OA\Parameter(name: 'quiz_id', in: 'path', required: true, description: 'ID del Quiz', schema: new OA\Schema(type: 'integer'))]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['pregunta', 'tipo', 'puntaje', 'respuestas'],
                properties: [
                    new OA\Property(property: 'pregunta', type: 'string', example: '¿Cuál es la capital de Francia?'),
                    new OA\Property(property: 'tipo', type: 'string', example: 'SELECCION_UNICA'),
                    new OA\Property(property: 'puntaje', type: 'integer', example: 10),
                    new OA\Property(property: 'orden', type: 'integer', example: 1),
                    new OA\Property(
                        property: 'respuestas',
                        type: 'array',
                        items: new OA\Items(
                            properties: [
                                new OA\Property(property: 'respuesta', type: 'string', example: 'París'),
                                new OA\Property(property: 'es_correcta', type: 'boolean', example: true)
                            ]
                        )
                    )
                ]
            )
        )
    )]
    #[OA\Response(response: 201, description: 'Pregunta agregada con éxito')]
    public function agregar(int $quiz_id, AgregarPreguntaRequest $request, AgregarPreguntaAccion $accion)
    {
        $datosPregunta = $request->except('respuestas');
        $respuestas = $request->input('respuestas');

        $pregunta = $accion->ejecutar($quiz_id, $datosPregunta, $respuestas);

        return response()->json([
            'mensaje' => 'Pregunta agregada con éxito.',
            'datos' => $pregunta,
            'error' => false
        ], 201);
    }

    #[OA\Put(
        path: '/api/preguntas/{id}',
        summary: 'Actualizar una pregunta existente',
        security: [['bearerAuth' => []]],
        tags: ['Preguntas Quiz']
    )]
    #[OA\Parameter(name: 'id', in: 'path', required: true, description: 'ID de la Pregunta', schema: new OA\Schema(type: 'integer'))]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['pregunta', 'tipo', 'puntaje', 'respuestas'],
                properties: [
                    new OA\Property(property: 'pregunta', type: 'string', example: '¿Cuál es la capital de Italia?'),
                    new OA\Property(property: 'tipo', type: 'string', example: 'SELECCION_UNICA'),
                    new OA\Property(property: 'puntaje', type: 'integer', example: 10),
                    new OA\Property(property: 'orden', type: 'integer', example: 1),
                    new OA\Property(
                        property: 'respuestas',
                        type: 'array',
                        items: new OA\Items(
                            properties: [
                                new OA\Property(property: 'respuesta', type: 'string', example: 'Roma'),
                                new OA\Property(property: 'es_correcta', type: 'boolean', example: true)
                            ]
                        )
                    )
                ]
            )
        )
    )]
    #[OA\Response(response: 200, description: 'Pregunta actualizada con éxito')]
    public function actualizar(int $id, ActualizarPreguntaRequest $request, ActualizarPreguntaAccion $accion)
    {
        $datosPregunta = $request->except('respuestas');
        $respuestas = $request->input('respuestas');

        $pregunta = $accion->ejecutar($id, $datosPregunta, $respuestas);

        return response()->json([
            'mensaje' => 'Pregunta actualizada con éxito.',
            'datos' => $pregunta,
            'error' => false
        ], 200);
    }

    #[OA\Delete(
        path: '/api/preguntas/{id}',
        summary: 'Eliminar una pregunta',
        security: [['bearerAuth' => []]],
        tags: ['Preguntas Quiz']
    )]
    #[OA\Parameter(name: 'id', in: 'path', required: true, description: 'ID de la Pregunta a eliminar', schema: new OA\Schema(type: 'integer'))]
    #[OA\Response(response: 200, description: 'Pregunta eliminada con éxito')]
    public function eliminar(int $id, EliminarPreguntaAccion $accion)
    {
        $accion->ejecutar($id);

        return response()->json([
            'mensaje' => 'Pregunta eliminada con éxito.',
            'datos' => null,
            'error' => false
        ], 200);
    }
}
