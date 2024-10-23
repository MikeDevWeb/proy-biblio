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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('last_name1', 50);
            $table->string('last_name2', 50);
            $table->integer('age');
            $table->string('gender', 50);
            $table->string('profession', 50);
            $table->string('grade', 50);
            $table->timestamps();
            $table->json('log_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
