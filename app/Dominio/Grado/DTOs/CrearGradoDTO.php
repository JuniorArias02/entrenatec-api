<?php

namespace App\Dominio\Grado\DTOs;

class CrearGradoDTO
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
