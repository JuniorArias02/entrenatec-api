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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
