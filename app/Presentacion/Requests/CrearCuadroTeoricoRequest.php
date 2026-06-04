<?php

namespace App\Presentacion\Requests;

use App\Dominio\CuadroTeorico\Enums\EstadoCuadroTeoricoEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CrearCuadroTeoricoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'grado_id' => ['required', 'integer', 'exists:grados,id'],
            'materia_id' => ['required', 'integer', 'exists:materias,id'],
            'periodo_id' => ['required', 'integer', 'exists:periodos,id'],
            'contenido' => ['required', 'array'],
            'estado' => ['required', new Enum(EstadoCuadroTeoricoEnum::class)],
        ];
    }
}
