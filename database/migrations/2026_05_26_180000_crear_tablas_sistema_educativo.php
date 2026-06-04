<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. grados
        Schema::create('grados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 10); // Por ejemplo: 9, 10, 11
            $table->timestamp('created_at')->nullable();
        });

        // 2. materias
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->enum('estado', ['ACTIVA', 'INACTIVA']);
            $table->timestamp('created_at')->nullable();
        });

        // 3. periodos
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero'); // Por ejemplo: 1, 2, 3, 4
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamp('created_at')->nullable();
        });

        // 4. cuadros_teoricos
        Schema::create('cuadros_teoricos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grado_id')->constrained('grados')->cascadeOnDelete();
            $table->foreignId('materia_id')->constrained('materias')->cascadeOnDelete();
            $table->foreignId('periodo_id')->constrained('periodos')->cascadeOnDelete();
            $table->json('contenido');
            $table->enum('estado', ['BORRADOR', 'PUBLICADO']);
            $table->timestamps();
        });

        // 5. temas
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->string('slug', 255)->unique();
            $table->text('descripcion');
            $table->foreignId('grado_id')->constrained('grados')->cascadeOnDelete();
            $table->foreignId('materia_id')->constrained('materias')->cascadeOnDelete();
            $table->foreignId('periodo_id')->constrained('periodos')->cascadeOnDelete();
            $table->foreignId('creado_por')->constrained('usuarios')->cascadeOnDelete();
            $table->string('portada', 500);
            $table->integer('orden');
            $table->enum('estado', ['BORRADOR', 'PUBLICADO', 'OCULTO']);
            $table->timestamps();
            $table->softDeletes(); // Requerido por Regla 16
        });

        // 6. bloques_contenido
        Schema::create('bloques_contenido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->constrained('temas')->cascadeOnDelete();
            $table->enum('tipo', [
                'TITULO', 'SUBTITULO', 'TEXTO', 'IMAGEN', 'GALERIA',
                'VIDEO', 'PDF', 'LINK', 'TABLA', 'LISTA',
                'CODIGO', 'ACTIVIDAD', 'QUIZ', 'MINIJUEGO', 'SEPARADOR'
            ]);
            $table->longText('contenido');
            $table->json('metadata')->nullable();
            $table->integer('orden');
            $table->boolean('visible')->default(true);
            $table->timestamps();
            $table->softDeletes(); // Requerido por Regla 16
        });

        // 7. archivos
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('archivo', 500);
            $table->string('extension', 20);
            $table->string('mime_type', 100);
            $table->bigInteger('peso');
            $table->foreignId('subido_por')->constrained('usuarios')->cascadeOnDelete();
            $table->timestamp('created_at')->nullable();
            $table->softDeletes(); // Requerido por Regla 16
        });

        // 8. bloques_archivos
        Schema::create('bloques_archivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bloque_id')->constrained('bloques_contenido')->cascadeOnDelete();
            $table->foreignId('archivo_id')->constrained('archivos')->cascadeOnDelete();
        });

        // 9. etiquetas
        Schema::create('etiquetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
        });

        // 10. temas_etiquetas
        Schema::create('temas_etiquetas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->constrained('temas')->cascadeOnDelete();
            $table->foreignId('etiqueta_id')->constrained('etiquetas')->cascadeOnDelete();
        });

        // 11. comentarios
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->constrained('temas')->cascadeOnDelete();
            $table->string('nombre', 150);
            $table->text('comentario');
            $table->enum('estado', ['PENDIENTE', 'APROBADO', 'OCULTO']);
            $table->timestamp('created_at')->nullable();
        });

        // 12. quizzes
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->foreignId('tema_id')->constrained('temas')->cascadeOnDelete();
            $table->integer('tiempo_limite');
            $table->integer('puntaje_aprobacion');
            $table->integer('intentos_maximos');
            $table->enum('estado', ['BORRADOR', 'PUBLICADO']);
            $table->timestamps();
        });

        // 13. quiz_preguntas
        Schema::create('quiz_preguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained('quizzes')->cascadeOnDelete();
            $table->text('pregunta');
            $table->enum('tipo', ['OPCION_MULTIPLE', 'VERDADERO_FALSO', 'SELECCION_UNICA', 'SELECCION_MULTIPLE']);
            $table->integer('puntaje');
            $table->integer('orden');
            $table->timestamp('created_at')->nullable();
        });

        // 14. quiz_respuestas
        Schema::create('quiz_respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pregunta_id')->constrained('quiz_preguntas')->cascadeOnDelete();
            $table->text('respuesta');
            $table->boolean('es_correcta');
            $table->timestamp('created_at')->nullable();
        });

        // 15. minijuegos
        Schema::create('minijuegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->foreignId('tema_id')->constrained('temas')->cascadeOnDelete();
            $table->enum('tipo', ['MEMORIA', 'DRAG_DROP', 'RELACIONAR', 'CLICK', 'PUZZLE']);
            $table->json('configuracion');
            $table->enum('estado', ['BORRADOR', 'PUBLICADO']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minijuegos');
        Schema::dropIfExists('quiz_respuestas');
        Schema::dropIfExists('quiz_preguntas');
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('comentarios');
        Schema::dropIfExists('temas_etiquetas');
        Schema::dropIfExists('etiquetas');
        Schema::dropIfExists('bloques_archivos');
        Schema::dropIfExists('archivos');
        Schema::dropIfExists('bloques_contenido');
        Schema::dropIfExists('temas');
        Schema::dropIfExists('cuadros_teoricos');
        Schema::dropIfExists('periodos');
        Schema::dropIfExists('materias');
        Schema::dropIfExists('grados');
    }
};
