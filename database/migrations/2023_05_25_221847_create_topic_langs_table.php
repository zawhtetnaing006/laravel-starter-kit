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
        Schema::create('topic_langs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id');
            $table->foreignId('lang_id');
            $table->string('title',255);
            $table->text('description');
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('lang_id')->references('id')->on('langs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_langs');
    }
};
