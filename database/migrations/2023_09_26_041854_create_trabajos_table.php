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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('lugar');
            $table->string('telefono');
            $table->string('flota');
            $table->string('email')->nullable();
            $table->string('posicion')->nullable();
            $table->string('salario')->nullable();
            $table->string('numero_cuenta');

            $table->string('fecha_cobro');
            $table->string('tiempo_laborando');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajos');
    }
};
