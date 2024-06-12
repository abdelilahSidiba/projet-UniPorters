<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePack;

class ServicePacksTableSeeder extends Seeder
{
    public function run()
    {
        ServicePack::factory(10)->create();
    }
}
