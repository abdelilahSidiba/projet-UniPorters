<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Passenger;

class PassengersTableSeeder extends Seeder
{
    public function run()
    {
        Passenger::factory(10)->create();
    }
}

