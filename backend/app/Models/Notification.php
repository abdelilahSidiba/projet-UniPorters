<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Notification extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'message', 'date_notification', 'vu'
    ];

    // العلاقات
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
