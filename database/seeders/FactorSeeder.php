<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('factors')->insert([
            ['name' => 'Rain assumption', 'code' => 'rain_assumption'],
            ['name' => 'Land soility', 'code' => 'land_soility'],
            ['name' => 'Forest assumption', 'code' => 'forest_assumption'],
            ['name' => 'Temperature', 'code' => 'temperature'],
            ['name' => 'Perception', 'code' => 'perception'],
            ['name' => 'Humidity', 'code' => 'humidity'],
            ['name' => 'Warning alerts', 'code' => 'warning_alerts'],
            ['name' => 'Wind', 'code' => 'wind'],
            ['name' => 'Air quality', 'code' => 'air_quality'],
            ['name' => 'Climate change note', 'code' => 'climate_change_note'],
            ['name' => 'Co2 assumption', 'code' => 'co2_assumption'],
        ]);
    }
}
