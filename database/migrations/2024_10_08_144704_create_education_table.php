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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tahun');
            $table->string('jurusan');
            $table->string('logo');
            $table->timestamps();
        });
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->foreignId('education_id')->constrained('education')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
