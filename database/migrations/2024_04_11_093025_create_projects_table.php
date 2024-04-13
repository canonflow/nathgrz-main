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
            $table->foreignId('admin_id');
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->text('thumbnail');
            $table->longText('desc')->nullable();
            $table->text('link_website')->nullable();
            $table->text('github')->nullable();
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
