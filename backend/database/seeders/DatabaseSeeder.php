<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            PassengersTableSeeder::class,
            DriversTableSeeder::class,
            CarOwnersTableSeeder::class,
            CarsTableSeeder::class,
            RentalAgenciesTableSeeder::class,
            ServicePacksTableSeeder::class,
            BookingsTableSeeder::class,
            PaymentsTableSeeder::class,
            ReviewsTableSeeder::class,
            NotificationsTableSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}

