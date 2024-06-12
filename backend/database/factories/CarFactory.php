<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'owner_id' => CarOwner::factory()->create()->id,
            'marque' => $this->faker->company,
            'modele' => $this->faker->randomElement(['SUV', 'Sedan', 'Hatchback', 'Truck']),
            'annee' => $this->faker->optional()->year(),
            'plaque' => $this->faker->unique()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
            'capacite' => $this->faker->optional()->randomNumber(),
            'disponibilite' => $this->faker->randomElement(['disponible', 'en maintenance']),
        ];
    }
}
