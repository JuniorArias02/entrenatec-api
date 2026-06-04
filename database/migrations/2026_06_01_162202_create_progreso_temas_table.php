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
        Schema::create('progreso_temas', function (Blueprint $table) {
            $table->id();
            
            // Usamos un UUID generado por el frontend (anonimato)
            $table->string('estudiante_uuid', 36); 
            
            $table->foreignId('tema_id')->constrained('temas')->onDelete('cascade');
            
            $table->timestamps();

            // Un estudiante anónimo solo puede completar un tema una vez
            $table->unique(['estudiante_uuid', 'tema_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progreso_temas');
    }
};
