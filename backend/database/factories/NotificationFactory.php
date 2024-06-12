<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'message' => $this->faker->sentence,
            'date_notification' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'vu' => $this->faker->boolean(),
        ];
    }
}
