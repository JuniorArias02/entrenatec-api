<?php

namespace App\Presentacion\Requests;

use App\Dominio\CuadroTeorico\Enums\EstadoCuadroTeoricoEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ActualizarCuadroTeoricoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'grado_id' => ['sometimes', 'required', 'integer', 'exists:grados,id'],
            'materia_id' => ['sometimes', 'required', 'integer', 'exists:materias,id'],
            'periodo_id' => ['sometimes', 'required', 'integer', 'exists:periodos,id'],
            'contenido' => ['sometimes', 'required', 'array'],
            'estado' => ['sometimes', 'required', new Enum(EstadoCuadroTeoricoEnum::class)],
        ];
    }
}
