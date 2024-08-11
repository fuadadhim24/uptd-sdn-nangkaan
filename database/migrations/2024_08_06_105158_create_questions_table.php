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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->constrained()->onDelete('cascade');
            $table->enum('question_type', ['text_input', 'text_description', 'radio', 'range', 'checkbox', 'file']);
            $table->text('question_text');
            $table->text('description')->nullable();
            $table->json('options')->nullable(); // Opsi untuk radio dan checkbox
            $table->string('range')->nullable(); // Rentang nilai (untuk range input)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
