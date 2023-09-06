<?php

namespace Database\Seeders;

use App\Models\TasaInteres;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TasaInteresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TasaInteres::create(['valor' => '5']);
        TasaInteres::create(['valor' => '7']);
        TasaInteres::create(['valor' => '10']);
    }
}
