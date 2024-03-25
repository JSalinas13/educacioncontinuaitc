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
        Schema::create('cursoestudiante', function (Blueprint $table) {
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->boolean('estatus_pago');
            $table->decimal('calificacion', 1,1);

            $table->foreign('curso_id')->references('id')->on('curso');
            $table->foreign('estudiante_id')->references('id')->on('usuario');
            $table->primary(['curso_id', 'estudiante_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursoestudiante');
    }
};
