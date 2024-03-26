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
        Schema::create('privilegiosroles', function (Blueprint $table) {
            $table->unsignedBigInteger('privilegio_id');
            $table->unsignedBigInteger('rol_id');

            $table->foreign('privilegio_id')->references('id')->on('privilegios');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->primary(['privilegio_id', 'rol_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privilegiosroles');
    }
};
