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
        Schema::create('facture_transaction', function (Blueprint $table) {
            $table->unsignedInteger('idFacture');
            $table->unsignedInteger('idTransaction');

            $table->foreign('idFacture')->references('idFacture')->on('factures')->onDelete('cascade');
            $table->foreign('idTransaction')->references('idTransaction')->on('transactions')->onDelete('cascade');
            
            // Assure l'unicité de la paire (idFacture, idTransaction)
            $table->unique(['idFacture', 'idTransaction']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture_transaction');
    }
};
