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
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->text('post')->nullable();
            $table->string('c_logo', 255)->nullable();
            $table->string('c_logo_2', 255)->nullable();
            $table->string('c_fevi', 255)->nullable();
            $table->string('c_name', 255)->nullable();
            $table->string('c_address', 255)->nullable();
            $table->string('c_mobile', 255)->nullable();
            $table->text('c_map')->nullable();
            $table->string('c_other_mobile', 255)->nullable();
            $table->string('c_email', 255)->nullable();
            $table->string('c_other_email', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
