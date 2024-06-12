<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerFactory extends Factory
{
    protected $model = Passenger::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'photo' => $this->faker->optional()->imageUrl(),
        ];
    }
}
