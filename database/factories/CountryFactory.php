<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'code' => $this->faker->countryCode,
            'continent_id' => (Continent::class),
        ];
    }
}
