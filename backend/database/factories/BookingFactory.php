<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Driver;
use App\Models\ServicePack;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'driver_id' => Driver::factory()->create()->id,
            'car_id' => Car::factory()->create()->id,
            'pack_id' => ServicePack::factory()->create()->id,
            'date_depart' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'heure_depart' => $this->faker->time(),
            'adresse_depart' => $this->faker->address,
            'adresse_arrivee' => $this->faker->address,
            'statut' => $this->faker->randomElement(['confirmée', 'en cours', 'terminée', 'annulée']),
        ];
    }
}
