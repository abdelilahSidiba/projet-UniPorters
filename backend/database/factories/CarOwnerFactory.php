<?php

namespace Database\Factories;

use App\Models\CarOwner;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarOwnerFactory extends Factory
{
    protected $model = CarOwner::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'adresse' => $this->faker->optional()->address,
            'telephone' => $this->faker->optional()->phoneNumber,
            'photo' => $this->faker->optional()->imageUrl(),
        ];
    }
}
