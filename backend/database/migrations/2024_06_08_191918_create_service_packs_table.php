<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePacksTable extends Migration
{
    public function up()
    {
        Schema::create('service_packs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_pack');
            $table->text('description')->nullable();
            $table->decimal('tarif', 10, 2);
            $table->enum('type_pack', ['pré-défini', 'personnalisé']);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_packs');
    }
}
