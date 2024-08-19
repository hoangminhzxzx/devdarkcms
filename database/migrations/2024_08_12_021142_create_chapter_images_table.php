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
        Schema::create('chapter_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('story_id')->unsigned();
            $table->bigInteger('chapter_id')->unsigned();
            $table->string('path')->default('')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapter_images');
    }
};
