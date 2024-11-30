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
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('kode');
            $table->string('nama');
            $table->integer('sks');
            $table->string('semester');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('fakultas_id');
            

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};
