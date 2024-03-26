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
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso', 100);
            $table->text('objetivo');
            $table->decimal('precio', 10, 2);
            $table->time('duracion');
            $table->text('imagen');
            $table->text('dias');
            $table->text('horario');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('instructor_id');

            $table->foreign('tipo_id')->references('id')->on('tipocurso');
            $table->foreign('instructor_id')->references('id')->on('usuario');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};



