<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Payment extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'booking_id', 'montant', 'date_paiement', 'methode_paiement', 'statut'
    ];

    // العلاقات
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
