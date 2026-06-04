<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarGradoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:10'],
        ];
    }
}
