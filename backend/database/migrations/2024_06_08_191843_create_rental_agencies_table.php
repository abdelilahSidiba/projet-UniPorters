<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalAgenciesTable extends Migration
{
    public function up()
    {
        Schema::create('rental_agencies', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agence');
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rental_agencies');
    }
}
