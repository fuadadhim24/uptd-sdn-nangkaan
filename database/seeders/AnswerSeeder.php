<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Kasus 1: Jawaban untuk Survey 1
         Answer::create([
            'question_id' => 1,
            'answer_type' => 'text',
            'answer_text' => 'Alice'
        ]);

        Answer::create([
            'question_id' => 2,
            'answer_type' => 'radio',
            'answer_text' => 'Female'
        ]);

        // Kasus 2: Jawaban untuk Survey 2
        Answer::create([
            'question_id' => 3,
            'answer_type' => 'text',
            'answer_text' => 'Pizza'
        ]);

        Answer::create([
            'question_id' => 4,
            'answer_type' => 'checkbox',
            'options' => json_encode(['Reading', 'Traveling'])
        ]);

        // Kasus 3: Jawaban untuk Survey 3
        Answer::create([
            'question_id' => 5,
            'answer_type' => 'range',
            'min_value' => 20,
            'max_value' => 30,
        ]);
    }
}
