<?php

namespace Database\Factories;

use App\Models\ServicePack;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicePackFactory extends Factory
{
    protected $model = ServicePack::class;

    public function definition()
    {
        return [
            'nom_pack' => $this->faker->sentence(2),
            'description' => $this->faker->optional()->paragraph(),
            'tarif' => $this->faker->randomFloat(2, 10, 1000),
            'type_pack' => $this->faker->randomElement(['pré-défini', 'personnalisé']),
        ];
    }
}
