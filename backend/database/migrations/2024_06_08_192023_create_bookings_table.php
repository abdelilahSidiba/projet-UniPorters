<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('driver_id')->nullable()->constrained('drivers')->onDelete('cascade');
            $table->foreignId('car_id')->nullable()->constrained('cars')->onDelete('cascade');
            $table->foreignId('pack_id')->nullable()->constrained('service_packs')->onDelete('cascade');
            $table->dateTime('date_depart');
            $table->time('heure_depart');
            $table->string('adresse_depart');
            $table->string('adresse_arrivee');
            $table->enum('statut', ['confirmée', 'en cours', 'terminée', 'annulée']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
