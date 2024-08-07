<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([
            // Answers for "Seberapa puas Anda dengan layanan kami?" (survey_id 1, question_id 1)
            ['question_id' => 1, 'answer_text' => 'Sangat Puas', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 1, 'answer_text' => 'Puas', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 1, 'answer_text' => 'Cukup Puas', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 1, 'answer_text' => 'Tidak Puas', 'created_at' => now(), 'updated_at' => now()],
            
            // Answers for "Apakah Anda akan merekomendasikan layanan kami kepada orang lain?" (survey_id 1, question_id 2)
            ['question_id' => 2, 'answer_text' => 'Ya', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 2, 'answer_text' => 'Tidak', 'created_at' => now(), 'updated_at' => now()],
            
            // Answers for "Bagaimana penilaian Anda terhadap kualitas produk kami?" (survey_id 2, question_id 3)
            ['question_id' => 3, 'answer_text' => 'Sangat Baik', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'answer_text' => 'Baik', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'answer_text' => 'Cukup Baik', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 3, 'answer_text' => 'Buruk', 'created_at' => now(), 'updated_at' => now()],
            
            // Answers for "Apa fitur yang paling Anda sukai dari produk kami?" (survey_id 2, question_id 4)
            ['question_id' => 4, 'answer_text' => 'Desain', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 4, 'answer_text' => 'Kinerja', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 4, 'answer_text' => 'Daya Tahan', 'created_at' => now(), 'updated_at' => now()],
            ['question_id' => 4, 'answer_text' => 'Fitur Tambahan', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
