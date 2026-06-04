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
        Schema::table('quizzes', function (Blueprint $table) {
            // Hacemos tema_id nullable porque un quiz puede ser global
            $table->foreignId('tema_id')->nullable()->change();

            // Agregamos campos globales
            $table->foreignId('grado_id')->nullable()->constrained('grados')->cascadeOnDelete();
            $table->foreignId('materia_id')->nullable()->constrained('materias')->cascadeOnDelete();
            $table->foreignId('periodo_id')->nullable()->constrained('periodos')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropForeign(['grado_id']);
            $table->dropForeign(['materia_id']);
            $table->dropForeign(['periodo_id']);
            
            $table->dropColumn(['grado_id', 'materia_id', 'periodo_id']);
            
            // Revertimos tema_id a no nulo (esto podría fallar si hay nulos, pero es el rollback)
            $table->foreignId('tema_id')->nullable(false)->change();
        });
    }
};
