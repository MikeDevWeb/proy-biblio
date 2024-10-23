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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('resinfo_id');
            $table->string('author', 50);
            $table->string('printory', 50)->nullable();
            $table->timestamps();
            $table->json('log_user')->nullable();

            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('resinfo_id')->references('id')->on('resinfo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
