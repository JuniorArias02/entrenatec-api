<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPeriodoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numero' => ['sometimes', 'required', 'integer'],
            'fecha_inicio' => ['sometimes', 'required', 'date', 'date_format:Y-m-d'],
            'fecha_fin' => ['sometimes', 'required', 'date', 'date_format:Y-m-d', 'after:fecha_inicio'],
        ];
    }
}
