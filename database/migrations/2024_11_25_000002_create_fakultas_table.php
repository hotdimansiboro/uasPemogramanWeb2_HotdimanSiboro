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
    Schema::create('fakultas', function (Blueprint $table) {
      $table->unsignedBigInteger('id')->autoIncrement();
      $table->string('fakultas');
      $table->unsignedBigInteger('periode_id');

      $table->softDeletes();
      $table->timestamps();

      $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('fakultas');
  }
};
