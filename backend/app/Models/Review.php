<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Review extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'driver_id', 'note', 'commentaire', 'date_commentaire'
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
}

