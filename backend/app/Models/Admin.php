<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 'role'
    ];

    // العلاقات
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
