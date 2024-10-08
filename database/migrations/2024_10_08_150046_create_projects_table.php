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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('keterangan');
            $table->string('foto');
            $table->string('link_yt')->nullable();
            $table->timestamps();
        });
        Schema::create('project_roles', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('deskripsis', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->foreignId('project_role_id')->constrained('project_roles')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('project_dokumentasi', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('fiturs', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->string('link');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
