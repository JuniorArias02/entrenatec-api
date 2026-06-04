<?php

namespace App\Dominio\Grado\DTOs;

class ActualizarGradoDTO
{
    public function __construct(
        public readonly string $nombre
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            nombre: $datos['nombre']
        );
    }
}
