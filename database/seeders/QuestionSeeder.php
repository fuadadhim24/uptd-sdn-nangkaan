<?php

namespace Database\Seeders;

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
                'question_type' => 'text_input', 
                'description' => null,
                'range' => null,
                'options' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 1,
                'question_text' => 'Apakah Anda akan merekomendasikan layanan kami kepada orang lain?',
                'question_type' => 'radio',
                'description' => null,
                'range' => null,
                'options' => json_encode(['Ya', 'Tidak']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 1,
                'question_text' => 'Bagaimana penilaian Anda terhadap kualitas produk kami?',
                'question_type' => 'range',
                'description' => null,
                'range' => '1-10',
                'options' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 1,
                'question_text' => 'Apa fitur yang paling Anda sukai dari produk kami?',
                'question_type' => 'checkbox',
                'description' => null,
                'range' => null,
                'options' => json_encode(['Kualitas', 'Harga', 'Desain']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'survey_id' => 1,
                'question_text' => 'Jika Anda bisa mengubah satu hal dari produk kami, apa yang akan Anda ubah?',
                'question_type' => 'text_description',
                'description' => 'Berikan penjelasan rinci mengenai perubahan yang Anda inginkan.',
                'range' => null,
                'options' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
