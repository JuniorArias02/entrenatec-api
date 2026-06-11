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

    public function obtenerTodos()
    {
        return Usuario::all();
    }

    public function obtenerPorId(int $id): ?Usuario
    {
        return Usuario::find($id);
    }

    public function actualizarPassword(int $id, string $nuevaPassword): Usuario
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update(['password' => $nuevaPassword]);
        return $usuario;
    }

    public function actualizarRol(int $id, string $nuevoRol): Usuario
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update(['rol' => $nuevoRol]);
        return $usuario;
    }

    public function actualizarPerfil(int $id, array $datos): Usuario
    {
        $usuario = Usuario::findOrFail($id);
        
        $updateData = [
            'nombre' => $datos['nombre'],
            'correo' => $datos['correo']
        ];

        if (!empty($datos['password'])) {
            $updateData['password'] = $datos['password'];
        }

        $usuario->update($updateData);
        
        return $usuario;
    }
}
