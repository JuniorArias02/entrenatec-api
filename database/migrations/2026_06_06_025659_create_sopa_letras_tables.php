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
        Schema::create('sopa_letras', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            
            // Relaciones opcionales como en Quiz
            $table->foreignId('tema_id')->nullable()->constrained('temas')->onDelete('set null');
            $table->foreignId('grado_id')->nullable()->constrained('grados')->onDelete('set null');
            $table->foreignId('materia_id')->nullable()->constrained('materias')->onDelete('set null');
            $table->foreignId('periodo_id')->nullable()->constrained('periodos')->onDelete('set null');
            
            $table->integer('tiempo_limite')->comment('En segundos');
            $table->integer('puntaje_total')->default(100);
            $table->enum('estado', ['BORRADOR', 'PUBLICADO'])->default('BORRADOR');
            $table->timestamps();
        });

        Schema::create('sopa_letras_palabras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sopa_letras_id')->constrained('sopa_letras')->onDelete('cascade');
            $table->string('palabra');
            $table->timestamps();
        });

        Schema::create('sopa_letras_intentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sopa_letras_id')->constrained('sopa_letras')->onDelete('cascade');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('palabras_encontradas')->default(0);
            $table->integer('puntaje_obtenido')->default(0);
            $table->boolean('completado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sopa_letras_intentos');
        Schema::dropIfExists('sopa_letras_palabras');
        Schema::dropIfExists('sopa_letras');
    }
};
