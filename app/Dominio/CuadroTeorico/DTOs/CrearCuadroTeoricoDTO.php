<?php

namespace App\Dominio\CuadroTeorico\DTOs;

use App\Dominio\CuadroTeorico\Enums\EstadoCuadroTeoricoEnum;

class CrearCuadroTeoricoDTO
{
    public function __construct(
        public readonly int $grado_id,
        public readonly int $materia_id,
        public readonly int $periodo_id,
        public readonly array $contenido,
        public readonly EstadoCuadroTeoricoEnum $estado
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            grado_id: (int)$datos['grado_id'],
            materia_id: (int)$datos['materia_id'],
            periodo_id: (int)$datos['periodo_id'],
            contenido: $datos['contenido'],
            estado: $datos['estado'] instanceof EstadoCuadroTeoricoEnum ? $datos['estado'] : EstadoCuadroTeoricoEnum::from($datos['estado'])
        );
    }
}
