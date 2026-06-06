<?php

namespace App\Dominio\SopaLetras\Contratos;

use App\Models\SopaLetras;
use App\Models\SopaLetrasIntento;
use Illuminate\Database\Eloquent\Collection;

interface SopaLetrasRepositorio
{
    public function crear(array $datosSopa, array $palabras): SopaLetras;
    public function obtenerTodos(array $filtros): Collection;
    public function obtenerPorId(int $id): ?SopaLetras;
    public function registrarIntento(int $sopaId, int $usuarioId, int $palabrasEncontradas, int $tiempoUtilizado): SopaLetrasIntento;
}
