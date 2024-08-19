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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->default('')->nullable();
            $table->string('name')->default('')->nullable();
            $table->string('name_another')->default('')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_publish')->default(0)->nullable();
            $table->tinyInteger('status')->default(0)->nullable()->comment('1: đang tiến hành, 2: tạm ngưng, 3: hoàn thành');
            $table->string('ratings')->default(0)->nullable();
            $table->integer('reviews')->default(0)->nullable();
            $table->integer('views')->default(0)->nullable();
            $table->integer('followers')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
