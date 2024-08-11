<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Survey;
use App\Models\Response;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Respondent;

class SurveyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $directory = public_path('storage/answer');
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        // Membuat file dummy
        $fileContent = "Ini adalah file dummy";
        $filename = 'dummy-file-' . Str::random(10) . '.txt';
        $filePath = $directory . '/' . $filename;
        file_put_contents($filePath, $fileContent);

        // Membuat Survey
        $survey = Survey::create([
            'title' => 'Survey Dummy',
            'description' => 'Deskripsi survey dummy.',
            'is_active' => true,
        ]);

        // Menambahkan Pertanyaan
        $questions = [
            ['type' => 'text_input', 'text' => 'Apa nama Anda?'],
            ['type' => 'radio', 'text' => 'Apa jenis kelamin Anda?', 'options' => ['Laki-laki', 'Perempuan']],
            ['type' => 'checkbox', 'text' => 'Hobi Anda?', 'options' => ['Membaca', 'Berkebun', 'Olahraga', 'Traveling']],
            ['type' => 'file', 'text' => 'Unggah dokumen Anda'],
            ['type' => 'range', 'text' => 'Seberapa puas Anda dengan layanan kami?', 'range' => '1-5'],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'survey_id' => $survey->id,
                'question_type' => $questionData['type'],
                'question_text' => $questionData['text'],
                'options' => isset($questionData['options']) ? json_encode($questionData['options']) : null,
                'range' => $questionData['range'] ?? null,
            ]);

            // Menambahkan Answers
            if (in_array($questionData['type'], ['radio', 'checkbox'])) {
                foreach ($questionData['options'] as $option) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer_type' => $questionData['type'],
                        'answer_text' => $option,
                    ]);
                }
            }
        }

        // Menambahkan Respondents
        $respondents = [
            ['name' => 'Respondent 1'],
            ['name' => 'Respondent 2'],
        ];

        foreach ($respondents as $respondentData) {
            $respondent = Respondent::create($respondentData);

            // Menambahkan Responses
            $questions = Question::all();
            foreach ($questions as $question) {
                $answers = Answer::where('question_id', $question->id)->get();
                foreach ($answers as $answer) {
                    Response::create([
                        'respondent_id' => $respondent->id,
                        'answer_id' => $answer->id,
                    ]);
                }

                // Menambahkan response untuk pertanyaan tipe file dan text
                if ($question->question_type == 'text_input') {
                    Response::create([
                        'respondent_id' => $respondent->id,
                        'answer_id' => Answer::create([
                            'question_id' => $question->id,
                            'answer_type' => 'text',
                            'answer_text' => $respondent->name,
                        ])->id,
                    ]);
                } elseif ($question->question_type == 'file') {
                    Response::create([
                        'respondent_id' => $respondent->id,
                        'answer_id' => Answer::create([
                            'question_id' => $question->id,
                            'answer_type' => 'file',
                            'file_path' => $filename,
                        ])->id,
                    ]);
                } elseif ($question->question_type == 'range') {
                    // Simulate range response with a random value between 1 and 5
                    Response::create([
                        'respondent_id' => $respondent->id,
                        'answer_id' => Answer::create([
                            'question_id' => $question->id,
                            'answer_type' => 'range',
                            'answer_text' => rand(1, 5),
                        ])->id,
                    ]);
                }
            }
        }
    }
}
