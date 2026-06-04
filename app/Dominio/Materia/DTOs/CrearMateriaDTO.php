<?php

namespace App\Dominio\Materia\DTOs;

use App\Dominio\Materia\Enums\EstadoMateriaEnum;

class CrearMateriaDTO
{
    public function __construct(
        public readonly string $nombre,
        public readonly string $descripcion,
        public readonly EstadoMateriaEnum $estado
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            nombre: $datos['nombre'],
            descripcion: $datos['descripcion'],
            estado: $datos['estado'] instanceof EstadoMateriaEnum ? $datos['estado'] : EstadoMateriaEnum::from($datos['estado'])
        );
    }
}
