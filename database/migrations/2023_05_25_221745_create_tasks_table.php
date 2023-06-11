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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('description');
            $table->enum('status', ['todo', 'doing','done']);
            $table->string('attachment',255);
            $table->enum('attachment_type',['pdf','img','url']);
            $table->dateTime('done_at');
            $table->integer('room_id');
            $table->foreignId('created_by');
            $table->foreignId('assigned_to');
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('assigned_to')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
