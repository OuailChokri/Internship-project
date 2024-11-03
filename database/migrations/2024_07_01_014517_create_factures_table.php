<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('idFacture');
            $table->string('client');
            $table->date('dateFacture');
            $table->decimal('montantTotal', 10, 2);
            $table->enum('statut', ['payé', 'impayé'])->default('impayé');
            $table->timestamps();

            $table->foreign('client')->references('nomClient')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
