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
        Schema::create('contest_awards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contest_id')->constrained('contest');
            $table->foreignId('program_id')->constrained('program');
            $table->string('championship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contest_awards');
    }
};
