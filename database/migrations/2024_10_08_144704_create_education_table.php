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
            $table->string('logo');
            $table->string('jurusan');
            $table->foreignId('profile_id')->constrained('profils')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('keterangans', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->foreignId('education_id')->constrained('education')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('sosmed', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo');
            $table->string('link');
            $table->foreignId('profile_id')->constrained('profils')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo');
            $table->string('link');
            $table->foreignId('profile_id')->constrained('profils')->onDelete('cascade');
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
