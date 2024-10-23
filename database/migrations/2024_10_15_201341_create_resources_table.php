<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('resinfo_id');
            $table->unsignedBigInteger('programme_id');
            $table->string('url', 255);
            $table->string('img_preview', 255)->nullable();
            $table->timestamps();
            $table->json('log_user')->nullable();

            // Llaves foráneas
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('resinfo_id')->references('id')->on('resinfo');
            $table->foreign('programme_id')->references('id')->on('programmes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
