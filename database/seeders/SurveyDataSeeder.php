<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;
use App\Models\Respondent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SurveyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat survei
        $survey1 = Survey::create([
            'title' => 'Survey Aktif',
            'description' => 'Deskripsi untuk survey aktif.',
            'is_active' => true,
        ]);

        $survey2 = Survey::create([
            'title' => 'Survey Tidak Aktif',
            'description' => 'Deskripsi untuk survey tidak aktif.',
            'is_active' => false,
        ]);

        // Buat pertanyaan untuk survei 1
        $questions1 = [
            ['type' => 'text_input', 'text' => 'Apa nama Anda?'],
            ['type' => 'text_description', 'text' => 'Deskripsi diri Anda'],
            ['type' => 'radio', 'text' => 'Jenis kelamin?', 'options' => ['Laki-laki', 'Perempuan']],
            ['type' => 'range', 'text' => 'Seberapa puas Anda?', 'range' => '1-5'],
            ['type' => 'checkbox', 'text' => 'Hobi Anda?', 'options' => ['Membaca', 'Berkebun', 'Olahraga']],
            ['type' => 'file', 'text' => 'Unggah foto Anda'],
        ];

        foreach ($questions1 as $questionData) {
            $question = Question::create([
                'survey_id' => $survey1->id,
                'question_type' => $questionData['type'],
                'question_text' => $questionData['text'],
                'options' => isset($questionData['options']) ? json_encode($questionData['options']) : null,
                'range' => $questionData['range'] ?? null,
            ]);
        }

        // Buat pertanyaan untuk survei 2
        $questions2 = [
            ['type' => 'text_input', 'text' => 'Apa pekerjaan Anda?'],
            ['type' => 'text_description', 'text' => 'Deskripsikan pengalaman kerja Anda'],
            ['type' => 'radio', 'text' => 'Tingkat pendidikan?', 'options' => ['SD', 'SMP', 'SMA', 'S1', 'S2']],
            ['type' => 'range', 'text' => 'Seberapa sering Anda bekerja?', 'range' => '1-7'],
            ['type' => 'checkbox', 'text' => 'Bahasa yang Anda kuasai?', 'options' => ['Inggris', 'Mandarin', 'Spanyol']],
            ['type' => 'file', 'text' => 'Unggah CV Anda'],
        ];

        foreach ($questions2 as $questionData) {
            $question = Question::create([
                'survey_id' => $survey2->id,
                'question_type' => $questionData['type'],
                'question_text' => $questionData['text'],
                'options' => isset($questionData['options']) ? json_encode($questionData['options']) : null,
                'range' => $questionData['range'] ?? null,
            ]);
        }

        // Buat responden
        $respondents = [
            ['name' => 'Respondent 1'],
            ['name' => 'Respondent 2'],
            ['name' => 'Respondent 3'],
        ];

        foreach ($respondents as $respondentData) {
            $respondent = Respondent::create($respondentData);

            // Responden 1 dan 2 mengisi kedua survei
            $surveysToFill = $respondent->id < 3 ? [$survey1, $survey2] : [$survey1];

            foreach ($surveysToFill as $survey) {
                $questions = Question::where('survey_id', $survey->id)->get();

                foreach ($questions as $question) {
                    $answerText = '';
                    $filePath = null;

                    switch ($question->question_type) {
                        case 'text_input':
                            $answerText = 'Jawaban Text untuk ' . $question->question_text;
                            break;
                        case 'text_description':
                            $answerText = 'Deskripsi untuk ' . $question->question_text;
                            break;
                        case 'radio':
                            $options = json_decode($question->options);
                            $answerText = $options[array_rand($options)];
                            break;
                        case 'range':
                            $answerText = rand(1, explode('-', $question->range)[1]);
                            break;
                        case 'checkbox':
                            $options = json_decode($question->options);
                            // Pilih 1 hingga 2 opsi secara acak
                            $selectedOptions = array_rand($options, rand(1, 2));
                            $answerText = is_array($selectedOptions) ? implode(', ', array_intersect_key($options, array_flip($selectedOptions))) : $options[$selectedOptions];
                            break;
                        case 'file':
                            $filename = 'dummy-file-' . Str::random(10) . '.txt';
                            $filePath = 'storage/answer/' . $filename;
                            file_put_contents(public_path($filePath), 'Dummy file content');
                            break;
                    }

                    Response::create([
                        'respondent_id' => $respondent->id,
                        'question_id' => $question->id,
                        'answer_text' => $answerText,
                        'file_path' => $filePath,
                    ]);
                }
            }
        }
    }
}
