<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarOwner;

class CarOwnersTableSeeder extends Seeder
{
    public function run()
    {
        CarOwner::factory(10)->create();
    }
}

