<?php

namespace App\Dominio\Dashboard\Contratos;

interface DashboardRepositorio
{
    public function obtenerEstadisticas(string $rol): array;
}
