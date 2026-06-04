<?php

namespace App\Dominio\Periodo\DTOs;

class ActualizarPeriodoDTO
{
    public function __construct(
        public readonly ?int $numero,
        public readonly ?string $fecha_inicio,
        public readonly ?string $fecha_fin
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            numero: isset($datos['numero']) ? (int)$datos['numero'] : null,
            fecha_inicio: $datos['fecha_inicio'] ?? null,
            fecha_fin: $datos['fecha_fin'] ?? null
        );
    }
}
