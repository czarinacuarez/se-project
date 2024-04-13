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
        Schema::create('sports_awards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained('school');
            $table->foreignId('sports_id')->constrained('sports');
            $table->string('championship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports_awards');
    }
};
