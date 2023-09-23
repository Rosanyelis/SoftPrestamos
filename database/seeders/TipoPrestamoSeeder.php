<?php

namespace Database\Seeders;

use App\Models\TipoPrestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoPrestamo::create(['descripcion' => 'Amortizado']);
        TipoPrestamo::create(['descripcion' => 'Insoluto']);
        TipoPrestamo::create(['descripcion' => 'Capitalizado']);
        TipoPrestamo::create(['descripcion' => 'Capitalizado Fijo Generado']);
        TipoPrestamo::create(['descripcion' => 'Capitalizado Fijo con cuotas']);
    }
}
