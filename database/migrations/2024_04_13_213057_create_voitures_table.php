<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->unsignedBigInteger('idVoiture')->autoIncrement();
            $table->string('marque', 30)->unique();
            $table->string('plaque', 20);
            $table->string('couleur', 30);
            $table->integer('annee');
            $table->date('date_impot')->nullable();
            $table->date('date_assurance')->nullable();
            $table->integer('prixJour');
            $table->enum('statut', ['disponible', 'non disponible'])->default('disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
}
