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
        //
        Schema::create('popups', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('jenis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('popup_id')->constrained('popups')->onDelete('cascade');
            $table->foreignId('jenis_id')->constrained('jenis')->onDelete('cascade');
            $table->string('link');
            $table->string('cover');
            $table->string('year');
            $table->string('client');
            $table->text('deskripsi');
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
