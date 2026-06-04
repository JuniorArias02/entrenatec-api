<?php

namespace App\Dominio\Periodo\DTOs;

class CrearPeriodoDTO
{
    public function __construct(
        public readonly int $numero,
        public readonly string $fecha_inicio,
        public readonly string $fecha_fin
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            numero: (int)$datos['numero'],
            fecha_inicio: $datos['fecha_inicio'],
            fecha_fin: $datos['fecha_fin']
        );
    }
}
