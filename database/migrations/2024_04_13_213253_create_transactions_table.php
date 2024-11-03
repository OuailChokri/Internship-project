<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('idTransaction');
            $table->string('client');
            $table->string('voiture');
            $table->date('dateLocation');
            $table->date('dateRetour');
            $table->integer('prix')->nullable();
            $table->integer('amende');
            $table->date('dateTransaction');
            $table->integer('penalite')->default(0);
            $table->enum('statut', ['en_cours', 'termine']); 
            $table->date('dateRetourEffective')->nullable();

            $table->foreign('client')->references('nomClient')->on('clients')->onDelete('cascade');
            $table->foreign('voiture')->references('marque')->on('voitures')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
