<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'survey_id' => 1,
            'question_type' => 'text_input',
            'question_text' => 'Apa nama Anda?',
        ]);

        Question::create([
            'survey_id' => 1,
            'question_type' => 'radio',
            'question_text' => 'Jenis kelamin?',
            'options' => json_encode(['Male', 'Female']),
        ]);

        // Kasus 2: Pertanyaan untuk Survey 2
        Question::create([
            'survey_id' => 2,
            'question_type' => 'text_input',
            'question_text' => 'Apa makanan favorit Anda?',
        ]);

        Question::create([
            'survey_id' => 2,
            'question_type' => 'checkbox',
            'question_text' => 'Hobi Anda?',
            'options' => json_encode(['Reading', 'Traveling', 'Gaming']),
        ]);

        // Kasus 3: Pertanyaan untuk Survey 3
        Question::create([
            'survey_id' => 3,
            'question_type' => 'range',
            'question_text' => 'Berapa usia Anda?',
            'range' => '0-100',
        ]);
    }
}
