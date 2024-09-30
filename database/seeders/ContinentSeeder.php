<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('continents')->insert([
            ['name' => 'Asia', 'code' => 'as'],
            ['name' => 'Africa', 'code' => 'af'],
            ['name' => 'North America', 'code' => 'na'],
            ['name' => 'South America', 'code' => 'sa'],
            ['name' => 'Antarctica', 'code' => 'an'],
            ['name' => 'Europe', 'code' => 'eu'],
            ['name' => 'Australia', 'code' => 'au'],
        ]);
    }
}
