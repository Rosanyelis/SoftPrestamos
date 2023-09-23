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
        Schema::create('historial_precio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moneda_id');
            $table->float('precio', 8, 2);
            $table->float('variacion', 8, 2);
            $table->timestamps();

            $table->foreign('moneda_id')->references('id')->on('monedas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_precio');
    }
};
