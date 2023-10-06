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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_entidad');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('apodo')->nullable();
            $table->string('cedula')->nullable();
            $table->string('rnc')->nullable();
            $table->string('celular');
            $table->unsignedBigInteger('prefijo_telefono_id');
            $table->string('telefono');
            $table->string('nombre_comercial')->nullable();
            $table->string('email');
            $table->string('otro_email')->nullable();
            $table->text('direccion')->nullable();
            $table->text('detalles_direccion')->nullable();
            $table->unsignedBigInteger('categoria_personal_id');
            $table->string('fecha_nacimiento');
            $table->unsignedBigInteger('pais_id');
            $table->string('nacionalidad');
            $table->string('ocupacion')->nullable();
            $table->string('pasaporte')->nullable();
            $table->string('estado_civil');
            $table->string('sexo');
            $table->string('licencia_conducir');
            $table->text('foto')->nullable();
            $table->text('firma')->nullable();
            $table->string('tipo_notificacion');
            $table->string('estado');
            $table->timestamps();


            $table->foreign('prefijo_telefono_id')->references('id')->on('prefijo_telefonos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoria_personal_id')->references('id')->on('categoria_personals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pais_id')->references('id')->on('pais')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
