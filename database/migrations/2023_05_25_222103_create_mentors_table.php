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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id');
            $table->text('description');
            $table->string('price',255);
            $table->smallInteger('capacity');
            $table->string('trial_period',255);
            $table->string('response_time',255);
            $table->smallInteger('call_limit');
            $table->foreignId('certificate_id');
            $table->foreignId('archievement_id');
            $table->foreignId('experience_id');
            $table->foreignId('user_id');
            $table->boolean('active');
            $table->timestamps();
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('certificate_id')->references('id')->on('certificates');
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->foreign('archievement_id')->references('id')->on('archievements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
