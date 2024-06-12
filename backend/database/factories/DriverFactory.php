<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    protected $model = Driver::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'numero_licence' => $this->faker->unique()->randomNumber(),
            'experience' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['disponible', 'en cours de trajet', 'non disponible']),
            'evaluation' => $this->faker->optional()->numberBetween(1, 5),
            'photo' => $this->faker->optional()->imageUrl(),
        ];
    }
}
