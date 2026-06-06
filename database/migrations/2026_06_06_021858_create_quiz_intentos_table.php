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
        Schema::create('quiz_intentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('puntaje_obtenido')->default(0);
            $table->boolean('aprobado')->default(false);
            $table->timestamps();
            
            // Un usuario puede intentar varias veces, pero podríamos llevar un registro
        });

        Schema::create('quiz_intento_respuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intento_id')->constrained('quiz_intentos')->onDelete('cascade');
            $table->foreignId('pregunta_id')->constrained('quiz_preguntas')->onDelete('cascade');
            $table->foreignId('respuesta_id')->nullable()->constrained('quiz_respuestas')->onDelete('set null');
            $table->boolean('es_correcta')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_intento_respuestas');
        Schema::dropIfExists('quiz_intentos');
    }
};
