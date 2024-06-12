<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RentalAgency;

class RentalAgenciesTableSeeder extends Seeder
{
    public function run()
    {
        RentalAgency::factory(10)->create();
    }
}

