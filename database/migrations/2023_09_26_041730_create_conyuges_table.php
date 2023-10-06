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
        Schema::create('conyuges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fecha_nacimiento');
            $table->string('cedula');
            $table->string('profesion');
            $table->string('empresa')->nullable();
            $table->string('telefono_empresa')->nullable();
            $table->string('celular_empresa')->nullable();
            $table->text('direccion_empresa')->nullable();
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('personas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conyuges');
    }
};
