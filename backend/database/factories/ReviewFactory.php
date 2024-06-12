<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Review;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'driver_id' => Driver::factory()->create()->id,
            'note' => $this->faker->numberBetween(1, 5),
            'commentaire' => $this->faker->optional()->paragraph,
            'date_commentaire' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
