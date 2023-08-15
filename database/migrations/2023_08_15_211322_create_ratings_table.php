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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caster_id')->constrained('casters'); // Caster that rated
            //$table->foreignId('match_id')->constrained('matches'); // Kann auch alternative ein User sein der die Bewertung gemacht hat.
            $table->tinyInteger('rating'); // 1-5 stars
            $table->text('comment')->nullable(); // Comment not needed.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
