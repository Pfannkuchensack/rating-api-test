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
        Schema::create('casters', function (Blueprint $table) {
            // Beispiel. Kann deutlich anders sein für das Beispiel aber fast egal
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('twitch')->nullable(); // Kann man auch anders regeln
            $table->string('twitter')->nullable(); // ist nur für ein paar extra
            $table->string('youtube')->nullable(); // daten zum caster
            $table->string('instagram')->nullable();
            $table->string('discord')->nullable();
            $table->string('slug'); // Für die URL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casters');
    }
};
