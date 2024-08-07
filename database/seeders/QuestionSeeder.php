<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'survey_id' => 1,
                'question_text' => 'Seberapa puas Anda dengan layanan kami?',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 1,
                'question_text' => 'Apakah Anda akan merekomendasikan layanan kami kepada orang lain?',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 2,
                'question_text' => 'Bagaimana penilaian Anda terhadap kualitas produk kami?',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 2,
                'question_text' => 'Apa fitur yang paling Anda sukai dari produk kami?',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
