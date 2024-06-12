<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'driver_id', 'car_id', 'pack_id', 'date_depart', 'heure_depart', 'adresse_depart', 'adresse_arrivee', 'statut'
    ];

    // العلاقات
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function servicePack()
    {
        return $this->belongsTo(ServicePack::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
