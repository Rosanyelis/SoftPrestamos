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
        TipoPrestamo::create(['descripcion' => 'Capitalizado']);
    }
}
