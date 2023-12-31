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
         Schema::create('acteur_film', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acteur_id');
            $table->unsignedBigInteger('film_id');
            $table->foreign('acteur_id')->references('id')->on('acteurs');
            $table->foreign('film_id')->references('id')->on('films');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acteur_film');
    }
};