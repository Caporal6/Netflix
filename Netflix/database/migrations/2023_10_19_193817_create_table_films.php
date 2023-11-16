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

        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->string('categorie',100);
            $table->text('resume');
            $table->double('duree');
            $table->unsignedBigInteger('realisateur_id');
            $table->foreign('realisateur_id')->references('id')->on('acteurs');
            $table->unsignedBigInteger('producteur_id');
            $table->foreign('producteur_id')->references('id')->on('acteurs');
            $table->integer('annee');
            $table->integer('rating');
            $table->string('photo');
            $table->string('age')->default('normal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
