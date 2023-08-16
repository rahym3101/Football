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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->references('id')->on('teams')->cascadeOnDelete();
            $table->foreignId('game_id')->references('id')->on('games')->cascadeOnDelete();
            $table->foreignId('post_id')->references('id')->on('posts')->cascadeOnDelete();
            $table->foreignId('coach_id')->references('id')->on('coaches')->cascadeOnDelete();
            $table->foreignId('player_id')->references('id')->on('players')->cascadeOnDelete();
            $table->unsignedDouble('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
