<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password' => 'required|string|min:6',
        ];
    }
}
