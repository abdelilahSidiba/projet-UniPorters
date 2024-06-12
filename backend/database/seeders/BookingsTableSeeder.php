<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        Booking::factory(10)->create();
    }
}

