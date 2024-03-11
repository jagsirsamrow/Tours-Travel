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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->integer('type' )->nullable();
            $table->string('banner', 255)->nullable();
            $table->text('model')->nullable();
            $table->integer('passenger')->nullable();
            $table->integer('bags')->nullable();
            $table->integer('extra_fare')->nullable();
            $table->integer('price')->nullable();
            $table->integer('per_kilo_m')->nullable();
            $table->string('rating', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
