<?php

namespace App\Infraestructura\Dashboard\Repositorios;

use App\Dominio\Dashboard\Contratos\DashboardRepositorio;
use App\Models\Usuario;
use App\Models\Tema;
use App\Models\Materia;
use App\Models\Grado;
use App\Models\CuadroTeorico;

class EloquentDashboardRepositorio implements DashboardRepositorio
{
    public function obtenerEstadisticas(string $rol): array
    {
        $estadisticas = [
            'temas_totales' => Tema::count(),
            'temas_publicados' => Tema::where('estado', 'PUBLICADO')->count(),
            'materias' => Materia::count(),
            'grados' => Grado::count(),
            'cuadros_teoricos' => CuadroTeorico::count(),
        ];

        if ($rol === 'ADMIN') {
            $estadisticas['usuarios_totales'] = Usuario::count();
            $estadisticas['estudiantes'] = Usuario::where('rol', 'ESTUDIANTE')->count();
            $estadisticas['docentes'] = Usuario::where('rol', 'DOCENTE')->count();
            $estadisticas['administradores'] = Usuario::where('rol', 'ADMIN')->count();
        }

        return $estadisticas;
    }
}
