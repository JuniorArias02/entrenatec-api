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
    
    // Rutas de Quizzes
    Route::get('quizzes', [App\Presentacion\Controladores\QuizControlador::class, 'obtenerTodos']);
    Route::get('quizzes/{id}', [App\Presentacion\Controladores\QuizControlador::class, 'obtenerPorId']);
    Route::post('quizzes', [App\Presentacion\Controladores\QuizControlador::class, 'crear']);
    Route::post('quizzes/{id}/evaluar', [App\Presentacion\Controladores\QuizControlador::class, 'evaluar']);

    // Rutas de Preguntas
    Route::post('quizzes/{quiz_id}/preguntas', [App\Presentacion\Controladores\QuizPreguntaControlador::class, 'agregar']);
    Route::put('preguntas/{id}', [App\Presentacion\Controladores\QuizPreguntaControlador::class, 'actualizar']);
    Route::delete('preguntas/{id}', [App\Presentacion\Controladores\QuizPreguntaControlador::class, 'eliminar']);

    // Rutas de Sopa de Letras
    Route::get('sopa-letras', [App\Presentacion\Controladores\SopaLetrasControlador::class, 'obtenerTodos']);
    Route::post('sopa-letras', [App\Presentacion\Controladores\SopaLetrasControlador::class, 'crear']);
    Route::get('sopa-letras/{id}', [App\Presentacion\Controladores\SopaLetrasControlador::class, 'obtenerPorId']);
    Route::post('sopa-letras/{id}/evaluar', [App\Presentacion\Controladores\SopaLetrasControlador::class, 'evaluar']);

    // Rutas de Archivos
    Route::post('archivos', [App\Presentacion\Controladores\ArchivoControlador::class, 'subir']);
    Route::post('archivos/galeria', [App\Presentacion\Controladores\ArchivoControlador::class, 'subirGaleria']);

    // Rutas de Usuarios (Gestión Admin)
    Route::get('usuarios', [App\Presentacion\Controladores\UsuarioControlador::class, 'obtenerTodos']);
    Route::post('usuarios', [App\Presentacion\Controladores\AutenticacionControlador::class, 'registro']);
    Route::put('usuarios/{id}/password', [App\Presentacion\Controladores\UsuarioControlador::class, 'actualizarPassword']);
    Route::put('usuarios/{id}/rol', [App\Presentacion\Controladores\UsuarioControlador::class, 'actualizarRol']);
    Route::put('usuarios/{id}/perfil', [App\Presentacion\Controladores\UsuarioControlador::class, 'actualizarPerfil']);

    // Rutas de Dashboard
    Route::get('dashboard/estadisticas', [App\Presentacion\Controladores\DashboardControlador::class, 'estadisticas']);

    // Rutas de Temas
    Route::get('temas', [App\Presentacion\Controladores\TemaControlador::class, 'obtenerTodos']);
    Route::get('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'obtenerPorId']);
    Route::post('temas', [App\Presentacion\Controladores\TemaControlador::class, 'crear']);
    Route::put('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'actualizar']);
    Route::delete('temas/{id}', [App\Presentacion\Controladores\TemaControlador::class, 'eliminar']);
    Route::post('temas/{id}/bloques', [App\Presentacion\Controladores\TemaControlador::class, 'sincronizarBloques']);

    // Rutas de Materias
    Route::get('materias', [App\Presentacion\Controladores\MateriaControlador::class, 'obtenerTodos']);
    Route::get('materias/{id}', [App\Presentacion\Controladores\MateriaControlador::class, 'obtenerPorId']);
    Route::post('materias', [App\Presentacion\Controladores\MateriaControlador::class, 'crear']);
    Route::put('materias/{id}', [App\Presentacion\Controladores\MateriaControlador::class, 'actualizar']);
    Route::delete('materias/{id}', [App\Presentacion\Controladores\MateriaControlador::class, 'eliminar']);

    // Rutas de Grados
    Route::get('grados', [App\Presentacion\Controladores\GradoControlador::class, 'obtenerTodos']);
    Route::get('grados/{id}', [App\Presentacion\Controladores\GradoControlador::class, 'obtenerPorId']);
    Route::post('grados', [App\Presentacion\Controladores\GradoControlador::class, 'crear']);
    Route::put('grados/{id}', [App\Presentacion\Controladores\GradoControlador::class, 'actualizar']);
    Route::delete('grados/{id}', [App\Presentacion\Controladores\GradoControlador::class, 'eliminar']);

    // Rutas de Periodos
    Route::get('periodos', [App\Presentacion\Controladores\PeriodoControlador::class, 'obtenerTodos']);
    Route::get('periodos/{id}', [App\Presentacion\Controladores\PeriodoControlador::class, 'obtenerPorId']);
    Route::post('periodos', [App\Presentacion\Controladores\PeriodoControlador::class, 'crear']);
    Route::put('periodos/{id}', [App\Presentacion\Controladores\PeriodoControlador::class, 'actualizar']);
    Route::delete('periodos/{id}', [App\Presentacion\Controladores\PeriodoControlador::class, 'eliminar']);

    // Rutas de Cuadros Teóricos
    Route::get('cuadros-teoricos', [App\Presentacion\Controladores\CuadroTeoricoControlador::class, 'obtenerTodos']);
    Route::get('cuadros-teoricos/{id}', [App\Presentacion\Controladores\CuadroTeoricoControlador::class, 'obtenerPorId']);
    Route::post('cuadros-teoricos', [App\Presentacion\Controladores\CuadroTeoricoControlador::class, 'crear']);
    Route::put('cuadros-teoricos/{id}', [App\Presentacion\Controladores\CuadroTeoricoControlador::class, 'actualizar']);
    Route::delete('cuadros-teoricos/{id}', [App\Presentacion\Controladores\CuadroTeoricoControlador::class, 'eliminar']);

    // Rutas de Contenido para Estudiantes
    Route::get('contenido-periodo', [App\Presentacion\Controladores\ContenidoPeriodoControlador::class, 'obtener']);
});

// Rutas de Progreso (Anónimas, fuera del middleware)
Route::post('progreso/temas', [App\Presentacion\Controladores\ProgresoEstudianteControlador::class, 'marcarCompletado']);
Route::get('progreso/estudiante/{uuid}', [App\Presentacion\Controladores\ProgresoEstudianteControlador::class, 'obtenerProgreso']);
Route::get('progreso/estudiante/{uuid}/dashboard', [App\Presentacion\Controladores\ProgresoEstudianteControlador::class, 'obtenerDashboard']);
