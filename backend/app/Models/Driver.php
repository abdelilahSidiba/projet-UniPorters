<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Driver extends Model

{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'numero_licence', 'experience', 'status', 'evaluation', 'photo'
    ];

    // العلاقات
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
