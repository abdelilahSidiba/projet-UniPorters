<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class RentalAgency extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom_agency', 'adresse', 'telephone', 'email', 'photo'
    ];
}
