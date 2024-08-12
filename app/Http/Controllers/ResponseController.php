<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Respondent;
use App\Models\Question;
use Illuminate\Support\Str;
    class ResponseController extends Controller
    {

    public function surveyBegin($surveyId, Request $request)
    {
        $survey = Survey::with(['questions.responses'])->findOrFail($surveyId);
        
        $questions = $survey->questions;
        $questionsPerPage = 3;
        $totalQuestions = $questions->count();
        $totalPages = (int) ceil($totalQuestions / $questionsPerPage); // Cast to int
        $currentPage = (int) $request->input('page', 1); // Cast to int
        $name = $request->name;
        
        $questionsForCurrentPage = $questions->slice(($currentPage - 1) * $questionsPerPage, $questionsPerPage);
        
        // Generate page data
        $pages = [];
        for ($i = 1; $i <= $totalPages; $i++) {
            $pages[$i] = $questions->slice(($i - 1) * $questionsPerPage, $questionsPerPage);
        }
        // dd($totalPages, $currentPage);
        
        return view('daftar-survey.index', [
            'surveyId' => $surveyId,
            'surveyData' => [
                'title' => $survey->title,
                'pages' => $pages,
            ],
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'name' => $name,
        ]);
    }
    public function surveyBeginSubmit(Request $request, Survey $survey)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'question_*' => 'nullable|string',
            'question_*.*' => 'nullable|array',
            'question_*.*.*' => 'nullable|string',
            'question_*.*.*.file' => 'nullable|file', // Menangani file upload
        ]);

        // Membuat atau mendapatkan responden
        $respondent = Respondent::firstOrCreate([
            'name' => $validated['name'],
        ]);

        // Iterasi untuk menyimpan setiap respons
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $questionId = str_replace('question_', '', $key);
                $question = Question::find($questionId);
    
                // Inisialisasi filename
                $filename = null;
    
                // Menangani file upload
                if ($request->hasFile($key)) {
                    $file = $request->file($key);
                    $filename = 'respondent-file-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/answer', $filename);
                }
    
                Response::create([
                    'respondent_id' => $respondent->id,
                    'question_id' => $question->id,
                    'answer_text' => is_array($value) ? implode(',', $value) : $value,
                    'file_path' => $filename,
                ]);
            }
        }

        return redirect()->route('survey')->with('success', 'Survey submitted successfully!');
    }



}
