<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearPeriodoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numero' => ['required', 'integer'],
            'fecha_inicio' => ['required', 'date', 'date_format:Y-m-d'],
            'fecha_fin' => ['required', 'date', 'date_format:Y-m-d', 'after:fecha_inicio'],
        ];
    }
}
