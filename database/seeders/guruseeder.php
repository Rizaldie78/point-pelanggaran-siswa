<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class guruseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        guru::Factory()->count(10)->create();
    }
}
