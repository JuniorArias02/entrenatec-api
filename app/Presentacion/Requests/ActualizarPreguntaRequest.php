<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPreguntaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pregunta' => 'required|string',
            'tipo' => 'required|in:OPCION_MULTIPLE,VERDADERO_FALSO,SELECCION_UNICA,SELECCION_MULTIPLE',
            'puntaje' => 'required|integer|min:1',
            'orden' => 'nullable|integer',

            'respuestas' => 'required|array|min:2',
            'respuestas.*.respuesta' => 'required|string',
            'respuestas.*.es_correcta' => 'required|boolean',
        ];
    }
}
