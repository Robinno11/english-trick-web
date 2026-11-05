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
        Schema::create('quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // kids, teens, adults
            $table->string('question');
            $table->string('sub_text')->nullable();
            $table->string('emoji')->nullable();
            $table->json('options');
            $table->integer('correct_index');
            $table->string('speech_text')->nullable();
            $table->text('trick_tip')->nullable();
            $table->string('skill_focus')->default('speaking'); // vocabulary, grammar, speaking
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_questions');
    }
};
