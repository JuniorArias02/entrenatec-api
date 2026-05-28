<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas API (EntrenaTech-Api)
|--------------------------------------------------------------------------
|
| Todas las rutas están escritas en español siguiendo las reglas de
| arquitectura del proyecto.
|
*/

// Rutas de autenticación
Route::post('auth/login', [App\Presentacion\Controladores\AutenticacionControlador::class, 'login']);
Route::post('auth/registro', [App\Presentacion\Controladores\AutenticacionControlador::class, 'registro']);
Route::post('auth/refrescar', [App\Presentacion\Controladores\AutenticacionControlador::class, 'refrescar'])->middleware('auth.escritura');

// Rutas del CMS Educativo protegidas condicionalmente por JWT
// El middleware 'auth.escritura' permitirá peticiones GET libremente
// pero exigirá un token JWT válido para peticiones POST, PUT, PATCH y DELETE.
Route::middleware('auth.escritura')->group(function () {
    
    // Rutas de Temas
    Route::get('temas', [App\Presentacion\Controladores\TemaControlador::class, 'obtenerTodos']);
    Route::get('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'obtenerPorId']);
    Route::post('temas', [App\Presentacion\Controladores\TemaControlador::class, 'crear']);
    Route::put('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'actualizar']);
    Route::delete('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'eliminar']);

    // Rutas de Materias
    Route::get('materias', [App\Presentacion\Controladores\MateriaControlador::class, 'obtenerTodos']);
    Route::post('materias', [App\Presentacion\Controladores\MateriaControlador::class, 'crear']);

    // Rutas de Grados
    Route::get('grados', [App\Presentacion\Controladores\GradoControlador::class, 'obtenerTodos']);
    Route::post('grados', [App\Presentacion\Controladores\GradoControlador::class, 'crear']);
});
