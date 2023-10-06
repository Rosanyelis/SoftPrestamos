<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\CategoriaPersonal::create(
            ['descripcion' => 'La más alta calidad de crediticia (AAA)'],
            ['descripcion' => 'Muy alta calidad de crediticia (AA+)'],
            ['descripcion' => 'Muy alta calidad de crediticia (AA)'],
            ['descripcion' => 'Muy alta calidad de crediticia (AA-)'],
            ['descripcion' => 'Alta calidad de crediticia (A+)'],
            ['descripcion' => 'Adecuada calidad de crediticia (BBB+)'],
            ['descripcion' => 'Adecuada calidad de crediticia (BBB)'],
            ['descripcion' => 'Adecuada calidad de crediticia (BBB-)'],
            ['descripcion' => 'Especulativa (BB+)'],
            ['descripcion' => 'Especulativa (BB)'],
            ['descripcion' => 'Altamente especulativa (B+)'],
            ['descripcion' => 'Altamente especulativa (B-)'],
            ['descripcion' => 'Altamente especulativa (B)'],
            ['descripcion' => 'Alto riesgo de incumplimiento (CCC+)'],
            ['descripcion' => 'Alto riesgo de incumplimiento (CC)'],
            ['descripcion' => 'Alto riesgo de incumplimiento (C)'],
            ['descripcion' => 'Incumplimiento (D)'],
        );
    }
}
