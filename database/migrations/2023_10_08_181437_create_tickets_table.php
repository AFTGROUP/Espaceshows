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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code');
            //      $table->string('type_ticket');
            $table->foreignUuid('type_tickets_id')->constrained('type_tickets');
            $table->integer('prix_ticket');
            $table->foreignUuid('evenement_id')->constrained('evenements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};