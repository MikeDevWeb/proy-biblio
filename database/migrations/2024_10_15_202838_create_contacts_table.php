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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('address', 50);
            $table->string('phone', 25);
            $table->string('facebook', 25)->nullable();
            $table->string('instagram', 25)->nullable();
            $table->string('whatsapp', 25);
            $table->string('telegram', 25)->nullable();
            $table->string('twitter', 25)->nullable();
            $table->timestamps();
            $table->json('log_user')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
