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
        Schema::create('localidad', function (Blueprint $table) {
            $table->id();
            $table->string('localidad', 150);
            $table->unsignedInteger('id_ciudad');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localidad');
    }
};
