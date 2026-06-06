<?php

namespace App\Aplicacion\SopaLetras\Acciones;

use App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio;
use App\Models\SopaLetrasIntento;

class EvaluarSopaLetrasAccion
{
    public function __construct(
        private readonly SopaLetrasRepositorio $repositorio
    ) {}

    public function ejecutar(int $sopaId, int $usuarioId, int $palabrasEncontradas, int $tiempoUtilizado): SopaLetrasIntento
    {
        return $this->repositorio->registrarIntento($sopaId, $usuarioId, $palabrasEncontradas, $tiempoUtilizado);
    }
}
