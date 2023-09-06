<?php

namespace Database\Seeders;

use App\Models\ModoPago;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModoPago::create(['descripcion' => 'Semanal']);
        ModoPago::create(['descripcion' => 'Quincenal']);
        ModoPago::create(['descripcion' => 'Diario']);
    }
}
