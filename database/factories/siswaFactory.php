<?php

namespace Database\Factories;
use Faker\Factory as faker;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class siswaFactory extends Factory
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
            'nama'=> $faker->name(),
            'kelas'=> $faker->randomElement(['X','XI', 'XII']), 
            'jurusan'=> $faker->randomElement(['MM 1', 'MM 2','PPLG 2','PPLG 1','BRC 1','BRC 2','TKJ 1','TKJ 2','TEI 1','TEI 2']),
            'nis'=> $faker->randomNumber(8, true),
            'jenis_kelamin'=> $faker->randomElement(['wanita', 'pria']), 
            'alamat'=> $faker->randomElement(['Jakarta', 'Bogor','Depok','Tanggerang','Bekasi']), 
            'telephone'=> $faker->randomNumber(8, true),
            'email'=> $faker->email(),
            'guru_id'=> $faker->numberBetween(30,40)
        ];
    }
}
