<?php

namespace App\Presentacion\Requests;

use App\Dominio\Materia\Enums\EstadoMateriaEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CrearMateriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:150'],
            'descripcion' => ['required', 'string'],
            'estado' => ['required', new Enum(EstadoMateriaEnum::class)],
        ];
    }
}
