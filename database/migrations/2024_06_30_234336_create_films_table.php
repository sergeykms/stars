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
            $table->timestamps();
            $table->string('avatar', 200,)->nullable(true);
            $table->string('avatar_min', 200)->nullable(true);
            $table->integer('budget')->nullable(true);
            $table->string('director', 100)->nullable(true);
            $table->string('music', 100)->nullable(true);
            $table->string('name', 100)->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('producer', 100)->nullable(true);
            $table->date('release_date')->nullable(true);
            $table->string('script', 100)->nullable(true);
            $table->integer('timing')->nullable(true);
            $table->string('episode')->nullable(true);
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
