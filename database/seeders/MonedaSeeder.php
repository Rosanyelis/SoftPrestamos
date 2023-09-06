<?php

namespace Database\Seeders;

use App\Models\Moneda;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Moneda::create(['tipo_moneda' => 'Dolar','valor' => '12']);
        Moneda::create(['tipo_moneda' => 'Pesos MX', 'valor' => '32']);
    }
}
