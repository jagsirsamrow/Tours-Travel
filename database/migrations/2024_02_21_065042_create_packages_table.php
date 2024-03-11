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
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from', 255)->nullable();
            $table->string('to', 255)->nullable();
            $table->integer('distance' )->nullable();
            $table->text('type' )->nullable();
            $table->string('banner', 255)->nullable();
            $table->text('route_plan')->nullable();
            $table->integer('extra_fare')->nullable();
            $table->integer('price')->nullable();
            $table->string('rating', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
