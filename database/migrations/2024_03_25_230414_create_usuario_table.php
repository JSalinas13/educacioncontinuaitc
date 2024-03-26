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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('apellido_paterno', 250);
            $table->string('apellido_materno', 250);
            $table->string('correo', 200);
            $table->string('curp', 18)->unique();
            $table->text('imagen');
            $table->string('rfc', 13);
            $table->text('expreriencia');
            $table->string('sexo', 1);
            $table->text('discapacidades');
            $table->text('alergias');
            $table->string('usuario', 18);
            $table->string('contrasena', 32);
            $table->unsignedBigInteger('localidad_id');
            $table->foreign('localidad_id')->references('id')->on('localidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
