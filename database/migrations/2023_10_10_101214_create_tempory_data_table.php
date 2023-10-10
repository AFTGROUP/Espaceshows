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
        Schema::create('tempory_data', function (Blueprint $table) {
           
             # $table->id();
           $table->uuid('id')->primary();
           $table->string('temporary_token')->unique();
          # $table->unsignedBigInteger('role_id');
          $table->foreignUuid('role_id')->constained('roles');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempory_data');
    }
};
