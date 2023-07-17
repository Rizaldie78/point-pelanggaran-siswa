<?php

namespace Database\Factories;
use Faker\Factory as faker;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class guruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create(); 
        return [
            'nik'=> $faker->randomNumber(7, true),
            'nama'=> $faker->name(),
            'jenis_kelamin'=> $faker->randomElement(['wanita', 'pria']), 
            'alamat'=> $faker->randomElement(['Jakarta', 'Bogor','Depok','Tanggerang','Bekasi']), 
        ];
    }
}
