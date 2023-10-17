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
        Schema::create('evenements', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->integer('code');
            $table->string('nom');
            $table->string('pays');
            $table->string('ville');
            $table->string('description');
            $table->string('photo');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('mots_cles');
            $table->integer('nombre_place_disponible');
            $table->foreignUuid('type_evenement_id')->constrained('type_evenements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
