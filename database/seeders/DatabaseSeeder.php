<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'full_name' => 'Rockey',
            'nationality' => 'Bangladesh',
            'school' => 'Dhaka uttara',
            'class' => 'grade2',
            'active' => '1',
            'role' => 'Super Admin',
            'email' => 'rockeycse@gmail.com',
            'password' => '123456',
        ]);
        // User::factory(100)->create();
        $this->call(ContinentSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(FactorSeeder::class);
    }
}
