<?php

namespace App\Presentacion\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Dominio\Usuario\Enums\RolUsuarioEnum;
use App\Dominio\Usuario\Enums\EstadoUsuarioEnum;

class CrearUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:150'],
            'correo' => ['required', 'string', 'email', 'max:150', 'unique:usuarios,correo'],
            'password' => ['required', 'string', 'min:6', 'max:255'],
            'rol' => ['nullable', new Enum(RolUsuarioEnum::class)],
            'estado' => ['nullable', new Enum(EstadoUsuarioEnum::class)],
        ];
    }
}
