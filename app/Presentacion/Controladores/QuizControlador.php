<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\Quiz\Acciones\CrearQuizAccion;
use App\Aplicacion\Quiz\Acciones\ObtenerQuizzesAccion;
use App\Presentacion\Requests\CrearQuizRequest;
use OpenApi\Attributes as OA;

class QuizControlador extends Controller
{
    #[OA\Get(
        path: '/api/quizzes',
        summary: 'Obtener lista de quizzes filtrados',
        security: [['bearerAuth' => []]],
        tags: ['Quizzes']
    )]
    #[OA\Parameter(name: 'tema_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Parameter(name: 'grado_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Parameter(name: 'periodo_id', in: 'query', required: false, schema: new OA\Schema(type: 'integer'))]
    #[OA\Response(
        response: 200,
        description: 'Quizzes obtenidos con éxito'
    )]
    public function obtenerTodos(Request $request, ObtenerQuizzesAccion $accion)
    {
        $filtros = $request->only(['tema_id', 'grado_id', 'materia_id', 'periodo_id']);
        $quizzes = $accion->ejecutar($filtros);

        return response()->json([
            'mensaje' => 'Quizzes recuperados con éxito.',
            'datos' => $quizzes,
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/quizzes',
        summary: 'Crear un nuevo quiz con sus preguntas y respuestas',
        security: [['bearerAuth' => []]],
        tags: ['Quizzes']
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['titulo', 'descripcion', 'tiempo_limite', 'puntaje_aprobacion', 'intentos_maximos', 'estado', 'preguntas'],
                properties: [
                    new OA\Property(property: 'titulo', type: 'string', example: 'Quiz de Historia'),
                    new OA\Property(property: 'descripcion', type: 'string', example: 'Evaluación final'),
                    new OA\Property(property: 'tema_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'grado_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'periodo_id', type: 'integer', nullable: true, example: 1),
                    new OA\Property(property: 'tiempo_limite', type: 'integer', example: 30),
                    new OA\Property(property: 'puntaje_aprobacion', type: 'integer', example: 70),
                    new OA\Property(property: 'intentos_maximos', type: 'integer', example: 3),
                    new OA\Property(property: 'estado', type: 'string', example: 'PUBLICADO'),
                    new OA\Property(
                        property: 'preguntas',
                        type: 'array',
                        items: new OA\Items(
                            properties: [
                                new OA\Property(property: 'pregunta', type: 'string', example: '¿Quién descubrió América?'),
                                new OA\Property(property: 'tipo', type: 'string', example: 'SELECCION_UNICA'),
                                new OA\Property(property: 'puntaje', type: 'integer', example: 10),
                                new OA\Property(
                                    property: 'respuestas',
                                    type: 'array',
                                    items: new OA\Items(
                                        properties: [
                                            new OA\Property(property: 'respuesta', type: 'string', example: 'Cristóbal Colón'),
                                            new OA\Property(property: 'es_correcta', type: 'boolean', example: true)
                                        ]
                                    )
                                )
                            ]
                        )
                    )
                ]
            )
        )
    )]
    #[OA\Response(
        response: 201,
        description: 'Quiz creado con éxito'
    )]
    public function crear(CrearQuizRequest $request, CrearQuizAccion $accion)
    {
        $datosObligatorios = $request->except('preguntas');
        $preguntas = $request->input('preguntas');

        $quiz = $accion->ejecutar($datosObligatorios, $preguntas);

        return response()->json([
            'mensaje' => 'Quiz creado con éxito.',
            'datos' => $quiz,
            'error' => false
        ], 201);
    }
}
