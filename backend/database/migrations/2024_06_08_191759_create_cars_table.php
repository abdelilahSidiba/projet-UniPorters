<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('car_owners')->onDelete('cascade');
            $table->string('marque');
            $table->string('modele');
            $table->integer('annee')->nullable();
            $table->string('plaque');
            $table->integer('capacite')->nullable();
            $table->enum('disponibilite', ['disponible', 'en maintenance']);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
