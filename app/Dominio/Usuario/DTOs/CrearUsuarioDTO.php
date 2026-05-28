<?php

namespace App\Dominio\Usuario\DTOs;

use App\Dominio\Usuario\Enums\RolUsuarioEnum;
use App\Dominio\Usuario\Enums\EstadoUsuarioEnum;

class CrearUsuarioDTO
{
    public function __construct(
        public readonly string $nombre,
        public readonly string $correo,
        public readonly string $password,
        public readonly RolUsuarioEnum $rol,
        public readonly EstadoUsuarioEnum $estado
    ) {}

    /**
     * Crea un DTO a partir de un array de datos validados.
     */
    public static function desdeArray(array $datos): self
    {
        return new self(
            nombre: $datos['nombre'],
            correo: $datos['correo'],
            password: $datos['password'],
            rol: $datos['rol'] instanceof RolUsuarioEnum ? $datos['rol'] : RolUsuarioEnum::from($datos['rol']),
            estado: $datos['estado'] instanceof EstadoUsuarioEnum ? $datos['estado'] : EstadoUsuarioEnum::from($datos['estado'])
        );
    }
}
