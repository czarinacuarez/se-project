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
        Schema::create('cmatch_score', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cmatch_id')->constrained('contest_match');
            $table->foreignId('program_id')->constrained('program');
            $table->string('scores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cmatch_score');
    }
};
