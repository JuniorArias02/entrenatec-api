<?php

namespace App\Infraestructura\Usuario\Repositorios;

use App\Dominio\Usuario\Contratos\UsuarioRepositorio;
use App\Dominio\Usuario\DTOs\CrearUsuarioDTO;
use App\Models\Usuario;

class EloquentUsuarioRepositorio implements UsuarioRepositorio
{
    public function crear(CrearUsuarioDTO $dto): Usuario
    {
        // Nota: en Laravel 11/12 se hashea automáticamente en el modelo por el cast 'hashed'
        return Usuario::create([
            'nombre' => $dto->nombre,
            'correo' => $dto->correo,
            'password' => $dto->password,
            'rol' => $dto->rol->value,
            'estado' => $dto->estado->value,
        ]);
    }

    public function obtenerPorCorreo(string $correo): ?Usuario
    {
        return Usuario::where('correo', $correo)->first();
    }
}
