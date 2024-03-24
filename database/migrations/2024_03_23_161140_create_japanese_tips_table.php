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
        Schema::create('japanese_tips', function (Blueprint $table) {
            $table->id();
            $table->string('origin_of_proverb');
            $table->string('proverb');
            $table->string('description_proverb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('japanese_tips');
    }
};
