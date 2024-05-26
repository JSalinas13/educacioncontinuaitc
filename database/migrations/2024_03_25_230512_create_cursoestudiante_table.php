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
        Schema::create('cursosestudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('estudiante_id');
<<<<<<< HEAD
            $table->boolean('estatus_pago')->nullable(false);
=======
            $table->boolean('estatus_pago')->nullable(false)->change();
>>>>>>> 30f9b9c588f52c46915d29e647483892a2740f8b
            $table->decimal('calificacion', 10, 2);

            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('estudiante_id')->references('id')->on('usuarios');
            // $table->primary(['curso_id', 'estudiante_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursosestudiantes');
    }
};
