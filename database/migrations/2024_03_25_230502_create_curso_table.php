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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nombre_curso', 100)->nullable(false);
            $table->text('objetivo')->nullable(false);
            $table->decimal('precio', 10, 2)->nullable(false);
=======
            $table->string('nombre_curso', 100)->nullable(false)->change();
            $table->text('objetivo')->nullable(false)->change();
            $table->decimal('precio', 10, 2)->nullable(false)->change();
>>>>>>> 30f9b9c588f52c46915d29e647483892a2740f8b
            $table->time('duracion');
            $table->text('imagen');
            $table->text('dias');
            $table->text('horario');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('instructor_id');

            $table->foreign('tipo_id')->references('id')->on('tiposcursos');
            $table->foreign('instructor_id')->references('id')->on('usuarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
