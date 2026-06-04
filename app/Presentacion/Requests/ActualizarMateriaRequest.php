<?php

namespace App\Presentacion\Requests;

use App\Dominio\Materia\Enums\EstadoMateriaEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ActualizarMateriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['sometimes', 'required', 'string', 'max:150'],
            'descripcion' => ['sometimes', 'required', 'string'],
            'estado' => ['sometimes', 'required', new Enum(EstadoMateriaEnum::class)],
        ];
    }
}
