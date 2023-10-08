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
        Schema::create('evenement_medias', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('path');
            $table->foreignUuid('evenement_id')->constrained('evenements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_medias');
    }
};
