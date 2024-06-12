<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class ServicePack extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom_pack', 'description', 'tarif', 'type_pack'
    ];

    // العلاقات
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

