<?php

namespace App\Presentacion\Controladores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aplicacion\Quiz\Acciones\CrearQuizAccion;
use App\Aplicacion\Quiz\Acciones\ObtenerQuizzesAccion;
use App\Aplicacion\Quiz\Acciones\EvaluarQuizAccion;
use App\Presentacion\Requests\CrearQuizRequest;
use App\Presentacion\Requests\EvaluarQuizRequest;
use App\Aplicacion\Quiz\Acciones\ObtenerQuizPorIdAccion;
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

    #[OA\Get(
        path: '/api/quizzes/{id}',
        summary: 'Obtener un quiz específico con sus preguntas y respuestas',
        security: [['bearerAuth' => []]],
        tags: ['Quizzes']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        description: 'ID del Quiz',
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\Response(
        response: 200,
        description: 'Quiz obtenido con éxito'
    )]
    #[OA\Response(
        response: 404,
        description: 'Quiz no encontrado'
    )]
    public function obtenerPorId(int $id, ObtenerQuizPorIdAccion $accion)
    {
        $quiz = $accion->ejecutar($id);

        if (!$quiz) {
            return response()->json([
                'mensaje' => 'Quiz no encontrado.',
                'datos' => null,
                'error' => true
            ], 404);
        }

        return response()->json([
            'mensaje' => 'Quiz recuperado con éxito.',
            'datos' => $quiz,
            'error' => false
        ], 200);
    }

    #[OA\Post(
        path: '/api/quizzes/{id}/evaluar',
        summary: 'Evaluar un quiz (enviar respuestas de un estudiante)',
        security: [['bearerAuth' => []]],
        tags: ['Quizzes']
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        required: true,
        description: 'ID del Quiz a evaluar',
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\MediaType(
            mediaType: 'application/json',
            schema: new OA\Schema(
                required: ['respuestas'],
                properties: [
                    new OA\Property(
                        property: 'respuestas',
                        type: 'array',
                        items: new OA\Items(
                            properties: [
                                new OA\Property(property: 'pregunta_id', type: 'integer', example: 1),
                                new OA\Property(property: 'respuesta_id', type: 'integer', example: 3)
                            ]
                        )
                    )
                ]
            )
        )
    )]
    #[OA\Response(
        response: 200,
        description: 'Quiz evaluado con éxito',
        content: new OA\JsonContent(
            properties: [
                new OA\Property(property: 'mensaje', type: 'string'),
                new OA\Property(
                    property: 'datos',
                    type: 'object',
                    properties: [
                        new OA\Property(property: 'intento_id', type: 'integer'),
                        new OA\Property(property: 'puntaje_obtenido', type: 'integer'),
                        new OA\Property(property: 'aprobado', type: 'boolean'),
                        new OA\Property(property: 'nivel_desempeno', type: 'string', example: 'Alto')
                    ]
                ),
                new OA\Property(property: 'error', type: 'boolean')
            ]
        )
    )]
    public function evaluar(int $id, EvaluarQuizRequest $request, EvaluarQuizAccion $accion)
    {
        $usuarioId = auth()->id(); // Asumimos que el usuario está autenticado
        
        // Si no hay sesión (en pruebas), podemos usar un default o forzar error
        if (!$usuarioId) {
            // Para propósitos de este CMS si el middleware auth falla
            // esto normalmente no pasa, pero por seguridad
            $usuarioId = 1; // Fallback o retornar 401
        }

        $intento = $accion->ejecutar($id, $usuarioId, $request->input('respuestas'));

        // Lógica de cálculo de nivel de desempeño:
        // Aprobación es con 75, Alto es 85, Superior es 93.
        $puntaje = $intento->puntaje_obtenido;
        $nivelDesempeno = 'Bajo (No aprobado)';
        
        if ($puntaje >= 93) {
            $nivelDesempeno = 'Superior';
        } elseif ($puntaje >= 85) {
            $nivelDesempeno = 'Alto';
        } elseif ($puntaje >= 75) {
            $nivelDesempeno = 'Básico';
        }

        return response()->json([
            'mensaje' => 'Quiz evaluado con éxito.',
            'datos' => [
                'intento_id' => $intento->id,
                'puntaje_obtenido' => $puntaje,
                'aprobado' => $puntaje >= 75,
                'nivel_desempeno' => $nivelDesempeno
            ],
            'error' => false
        ], 200);
    }
}
