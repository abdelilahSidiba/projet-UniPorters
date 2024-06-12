<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Car extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'owner_id', 'marque', 'modele', 'annee', 'plaque', 'capacite', 'disponibilite'
    ];

    // العلاقات
    public function owner()
    {
        return $this->belongsTo(CarOwner::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

