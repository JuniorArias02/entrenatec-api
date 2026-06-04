<?php

namespace App\Dominio\CuadroTeorico\DTOs;

use App\Dominio\CuadroTeorico\Enums\EstadoCuadroTeoricoEnum;

class ActualizarCuadroTeoricoDTO
{
    public function __construct(
        public readonly ?int $grado_id,
        public readonly ?int $materia_id,
        public readonly ?int $periodo_id,
        public readonly ?array $contenido,
        public readonly ?EstadoCuadroTeoricoEnum $estado
    ) {}

    public static function desdeArray(array $datos): self
    {
        return new self(
            grado_id: isset($datos['grado_id']) ? (int)$datos['grado_id'] : null,
            materia_id: isset($datos['materia_id']) ? (int)$datos['materia_id'] : null,
            periodo_id: isset($datos['periodo_id']) ? (int)$datos['periodo_id'] : null,
            contenido: $datos['contenido'] ?? null,
            estado: isset($datos['estado'])
                ? ($datos['estado'] instanceof EstadoCuadroTeoricoEnum ? $datos['estado'] : EstadoCuadroTeoricoEnum::from($datos['estado']))
                : null
        );
    }
}
