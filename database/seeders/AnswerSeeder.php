<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for Checkbox type
        DB::table('answers')->insert([
            'question_id' => 1,
            'answer_type' => 'checkbox',
            'options' => json_encode(['Option A', 'Option B', 'Option C']),
            'answer_text' => null,
            'file_path' => null,
            'min_value' => null,
            'max_value' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sample data for Radio Button type
        DB::table('answers')->insert([
            'question_id' => 2,
            'answer_type' => 'radio',
            'options' => json_encode(['Choice 1', 'Choice 2', 'Choice 3']),
            'answer_text' => null,
            'file_path' => null,
            'min_value' => null,
            'max_value' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sample data for Text Input type
        DB::table('answers')->insert([
            'question_id' => 3,
            'answer_type' => 'text',
            'options' => null,
            'answer_text' => 'Sample text answer',
            'file_path' => null,
            'min_value' => null,
            'max_value' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sample data for Range Input type
        DB::table('answers')->insert([
            'question_id' => 4,
            'answer_type' => 'range',
            'options' => null,
            'answer_text' => null,
            'file_path' => null,
            'min_value' => 1,
            'max_value' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sample data for File Input type
        DB::table('answers')->insert([
            'question_id' => 5,
            'answer_type' => 'file',
            'options' => null,
            'answer_text' => null,
            'file_path' => 'files/sample-file.jpg',
            'min_value' => null,
            'max_value' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
