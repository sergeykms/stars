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
            $table->tinyText('image_path');
            $table->tinyText('image_min_path');
            $table->integer('budget');
            $table->char('director', length: 100);
            $table->char('music', length: 100);
            $table->char('name', length: 100);
            $table->tinyText('description');
            $table->char('producer', length: 100);
            $table->date('release_date');
            $table->char('script', length: 100);
            $table->integer('timing');
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
