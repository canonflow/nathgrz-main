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
        Schema::create('stacks', function (Blueprint $table) {
            $table->foreignId('skill_id');
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('project_id');
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stacks');
    }
};
