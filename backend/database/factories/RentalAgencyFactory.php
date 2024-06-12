<?php

namespace Database\Factories;

use App\Models\RentalAgency;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalAgencyFactory extends Factory
{
    protected $model = RentalAgency::class;

    public function definition()
    {
        return [
            'nom_agence' => $this->faker->company,
            'adresse' => $this->faker->optional()->address,
            'telephone' => $this->faker->optional()->phoneNumber,
            'email' => $this->faker->optional()->email,
            'photo' => $this->faker->optional()->imageUrl(),
        ];
    }
}
