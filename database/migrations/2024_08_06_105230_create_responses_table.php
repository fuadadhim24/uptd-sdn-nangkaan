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
       Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('respondent_id')->constrained()->onDelete('cascade');
            $table->foreignId('question_id')->constrained()->onDelete('cascade');
            $table->text('answer_text')->nullable(); // Jawaban untuk tipe text
            $table->string('file_path')->nullable(); // File untuk tipe file
            $table->integer('range_value')->nullable(); // Nilai untuk tipe range
            $table->json('checkbox_answers')->nullable(); // Jawaban untuk tipe checkbox (array JSON)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
