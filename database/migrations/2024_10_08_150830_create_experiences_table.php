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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('role');
            $table->string('periode');
            $table->string('foto');
            $table->text('deskripsi');
            $table->timestamps();
        });
        Schema::create('dokumentasi', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->foreignId('experience_id')->constrained('experiences')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('jobdesks', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->foreignId('experience_id')->constrained('experiences')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
