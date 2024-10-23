<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resinfo', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string('duacion', 50)->nullable();
            $table->string('num_pag', 25)->nullable();
            $table->timestamps();
            $table->json('log_user')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resinfo');
    }
};
