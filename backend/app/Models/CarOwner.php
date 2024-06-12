<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class CarOwner extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'adresse', 'telephone', 'photo'
    ];

    // العلاقات
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
