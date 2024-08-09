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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained()->onDelete('cascade');
            $table->string('answer_type'); // e.g., 'checkbox', 'radio', 'text', 'range', 'file'
            $table->text('answer_text')->nullable(); // text input answers
            $table->string('file_path')->nullable(); // file input answers
            $table->json('options')->nullable(); // checkbox/radio button options
            $table->integer('min_value')->nullable(); // range inputs
            $table->integer('max_value')->nullable(); // range inputs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
