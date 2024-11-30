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
    Schema::create('dosens', function (Blueprint $table) {
      $table->unsignedBigInteger('id')->autoIncrement();
      $table->bigInteger('nidn')->unique();
      $table->string('nama');
      $table->string('telp', 15)->nullable();
      $table->string('email', 100)->unique()->nullable();
      $table->string('jenis_kelamin', 15);
      $table->unsignedBigInteger('fakultas_id');
      $table->unsignedBigInteger('matkuls_id');

      $table->softDeletes();
      $table->timestamps();

      $table->foreign('fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
      $table->foreign('matkuls_id')->references('id')->on('mata_kuliahs')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('dosens');
  }
};
