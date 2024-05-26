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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('descripcion', 250)->nullable(false);
=======
            $table->string('descripcion', 250)->nullable(false)->change();
>>>>>>> 30f9b9c588f52c46915d29e647483892a2740f8b
            $table->unsignedBigInteger('curso_id');

            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa');
    }
};
