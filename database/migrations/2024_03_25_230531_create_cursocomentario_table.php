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
        Schema::create('cursocomentario', function (Blueprint $table) {
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('comentario_id');

            $table->foreign('curso_id')->references('id')->on('curso');
            $table->foreign('estudiante_id')->references('id')->on('usuario');
            $table->foreign('comentario_id')->references('id')->on('comentario');
            $table->primary(['curso_id', 'estudiante_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursocomentario');
    }
};
