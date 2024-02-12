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
        Schema::create('project_techonology', function (Blueprint $table) {
            // $table->unsignedBigInteger('project_id')->nullable();
            // $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();

            // $table->unsignedBigInteger('technology_id')->nullable();
            // $table->foreign('technology_id')->references('id')->on('technologies')->cascadeOnDelete();

            // $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();
            $table->primary(['project_id', 'technology_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_techonology');
    }
};