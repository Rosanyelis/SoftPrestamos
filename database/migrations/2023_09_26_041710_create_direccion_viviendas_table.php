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
        Schema::create('direccion_viviendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('sector');
            $table->string('ciudad');
            $table->string('callen');
            $table->string('barrio')->nullable();
            $table->string('detalles')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion_viviendas');
    }
};
