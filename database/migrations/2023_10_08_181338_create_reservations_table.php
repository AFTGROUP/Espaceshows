<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('date_reservation');
            $table->string('nom_utilisateur');
            $table->string('prenom_utilisateur');
            $table->foreign('type_ticket')->references('type_ticket')->on('tickets');
            $table->enum('mode_paiement', ['Moov', 'MTN']);
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('ticket_id')->constrained('tickets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
