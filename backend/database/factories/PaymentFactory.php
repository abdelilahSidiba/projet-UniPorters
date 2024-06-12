<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'booking_id' => Booking::factory()->create()->id,
            'montant' => $this->faker->randomFloat(2, 10, 500),
            'date_paiement' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'methode_paiement' => $this->faker->randomElement(['carte de crédit', 'PayPal', 'virement bancaire']),
            'statut' => $this->faker->randomElement(['effectué', 'en attente']),
        ];
    }
}
