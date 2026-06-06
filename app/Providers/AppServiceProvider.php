<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Dominio\Usuario\Contratos\UsuarioRepositorio::class,
            \App\Infraestructura\Usuario\Repositorios\EloquentUsuarioRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Grado\Contratos\GradoRepositorio::class,
            \App\Infraestructura\Grado\Repositorios\EloquentGradoRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Materia\Contratos\MateriaRepositorio::class,
            \App\Infraestructura\Materia\Repositorios\EloquentMateriaRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Periodo\Contratos\PeriodoRepositorio::class,
            \App\Infraestructura\Periodo\Repositorios\EloquentPeriodoRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\CuadroTeorico\Contratos\CuadroTeoricoRepositorio::class,
            \App\Infraestructura\CuadroTeorico\Repositorios\EloquentCuadroTeoricoRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Dashboard\Contratos\DashboardRepositorio::class,
            \App\Infraestructura\Dashboard\Repositorios\EloquentDashboardRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Archivo\Contratos\ArchivoRepositorio::class,
            \App\Infraestructura\Archivo\Repositorios\EloquentArchivoRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\Quiz\Contratos\QuizRepositorio::class,
            \App\Infraestructura\Quiz\Repositorios\EloquentQuizRepositorio::class
        );

        $this->app->bind(
            \App\Dominio\SopaLetras\Contratos\SopaLetrasRepositorio::class,
            \App\Infraestructura\SopaLetras\Repositorios\EloquentSopaLetrasRepositorio::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
