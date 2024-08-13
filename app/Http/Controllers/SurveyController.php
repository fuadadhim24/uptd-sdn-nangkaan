<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use App\Models\Survey;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::all();
        return view('admin.surveys.index', compact('surveys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Survey::create([
            'title' => $request->input('nama'),
            'description' => $request->input('deskripsi'),
            'is_active' => true,
        ]);

        return redirect()->route('admin.surveys')->with('success', 'Survey added successfully!');
    }

    public function edit(Survey $survey)
    {
        return view('admin.surveys.edit', compact('survey'));
    }
    public function toggleStatus(Survey $survey)
    {
        // Toggle the is_active status
        $survey->is_active = !$survey->is_active;
        $survey->save();

        return redirect()->route('admin.surveys')->with('success', 'Survey status updated successfully!');
    }

    public function update(Request $request, Survey $survey)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $survey->update([
            'title' => $request->input('nama'),
            'description' => $request->input('deskripsi'),
        ]);

        return redirect()->route('admin.surveys')->with('success', 'Survey updated successfully!');
    }


    public function destroy(Survey $survey)
    {
        $survey->delete();
        return redirect()->route('admin.surveys')->with('success', 'Survey deleted successfully!');
    }

    public function showAllSurveyResults()
    {
        $surveysWithRespondentCounts = Survey::withCount(['respondents'])->get();
        // dd($surveysWithRespondentCounts);

        return view('admin.surveys.results.index', ['surveys' => $surveysWithRespondentCounts]);
    }

    public function showSurveyResults($surveyId)
    {
        $survey = Survey::with(['questions.responses.respondent'])->findOrFail($surveyId);

        $respondentCount = $survey->respondents->count();

        $surveyData = [
            'survey_id' => $survey->id,
            'title' => $survey->title,
            'description' => $survey->description,
            'is_active' => $survey->is_active,
            'questions' => $survey->questions->map(function ($question) {
                return [
                    'question_id' => $question->id,
                    'question_text' => $question->question_text,
                    'question_type' => $question->question_type,
                    'description' => $question->description,
                    'range' => $question->range,
                    'options' => $question->options,
                    'responses' => $question->responses->map(function ($response) {
                        return [
                            'response_id' => $response->id,
                            'respondent_id' => $response->respondent_id,
                            'answer_text' => $response->answer_text, 
                            'file_path' => $response->file_path
                        ];
                    })
                ];
            }),
            'respondents' => $survey->respondents->map(function ($respondent) {
                return [
                    'respondent_id' => $respondent->id,
                    'name' => $respondent->name,
                ];
            }),
            'respondent_count' => $respondentCount,
        ];
        // dd($surveyData);

        $namesAndTexts = [];
        foreach ($surveyData['questions'] as $question) {
            if ($question['question_type'] === 'text_input' || $question['question_type'] === 'text_description') {
                foreach ($question['responses'] as $response) {
                    $namesAndTexts[] = $response['answer_text'];
                }
            }
        }

        // Prepare data for "Radio Button"
        $radioButtonOptions = [];
        $radioButtonCounts = [];
        foreach ($surveyData['questions'] as $question) {
            if ($question['question_type'] === 'radio') {
                $options = json_decode($question['options']);
                foreach ($options as $option) {
                    $radioButtonCounts[$option] = 0;
                }
                foreach ($question['responses'] as $response) {
                    $selectedOptions = explode(', ', $response['answer_text']); // Adjust delimiter as necessary
                    foreach ($selectedOptions as $selectedOption) {
                        if (isset($radioButtonCounts[$selectedOption])) {
                            $radioButtonCounts[$selectedOption]++;
                        }
                    }
                }
                $radioButtonOptions = [
                    'series' => array_values($radioButtonCounts),
                    'labels' => array_keys($radioButtonCounts),
                ];
            }
        }

        // Prepare data for "CheckBox"
        $checkboxOptions = [];
        $checkboxCounts = [];
        foreach ($surveyData['questions'] as $question) {
            if ($question['question_type'] === 'checkbox') {
                $options = json_decode($question['options']);
                foreach ($options as $option) {
                    $checkboxCounts[$option] = 0;
                }
                foreach ($question['responses'] as $response) {
                    $selectedOptions = explode(', ', $response['answer_text']); // Adjust delimiter as necessary
                    foreach ($selectedOptions as $selectedOption) {
                        if (isset($checkboxCounts[$selectedOption])) {
                            $checkboxCounts[$selectedOption]++;
                        }
                    }
                }
                $checkboxOptions = [
                    'series' => array_map(function($count) {
                        return ['name' => $count[0], 'data' => [$count[1]]];
                    }, array_map(null, array_keys($checkboxCounts), array_values($checkboxCounts))),
                    'categories' => array_keys($checkboxCounts),
                ];
            }
        }

        // Prepare data for "File Input"
        $files = [];
        foreach ($surveyData['questions'] as $question) {
            if ($question['question_type'] === 'file') {
                foreach ($question['responses'] as $response) {
                    if ($response['file_path']) {
                        $files[] = $response;
                    }
                }
            }
        }

        return view('admin.surveys.results.detail.index', [
            'surveyId' => $surveyId, 
            'surveyData' => $surveyData,
            'namesAndTexts' => $namesAndTexts,
            'radioButtonData' => $radioButtonOptions,
            'checkboxData' => $checkboxOptions,
            'files' => $files
        ]);
    }



    public function getDataRespondent($surveyId)
    {
        $survey = Survey::with(['questions.responses.respondent'])->findOrFail($surveyId);

        $surveyData = [
            'survey_id' => $survey->id,
            'title' => $survey->title,
            'description' => $survey->description,
            'is_active' => $survey->is_active,
            'questions' => $survey->questions->map(function ($question) {
                return [
                    'question_id' => $question->id,
                    'question_text' => $question->question_text,
                    'question_type' => $question->question_type,
                    'description' => $question->description,
                    'range' => $question->range,
                    'options' => $question->options,
                    'responses' => $question->responses->map(function ($response) {
                        return [
                            'response_id' => $response->id,
                            'respondent_id' => $response->respondent_id,
                            'answer_text' => $response->answer_text,
                            'file_path' => $response->file_path
                        ];
                    })
                ];
            }),
            'respondents' => $survey->respondents->map(function ($respondent) {
                return [
                    'respondent_id' => $respondent->id,
                    'name' => $respondent->name,
                ];
            })
        ];

        return response()->json($surveyData);
    }


    //     return view('admin.surveys.results.detail.index', [
    //         'survey' => $survey,
    //         'defaultResponses' => $defaultResponses,
    //         'firstRespondentId' => $firstRespondentId,
    //         'respondentIds' => $respondentIds
    //     ]);
    // }

    public function getResponsesForRespondent($surveyId, $respondentId)
    {
        $survey = Survey::with(['questions.responses'])->findOrFail($surveyId);

        if (empty($respondentId)) {
            return response()->json(['error' => 'Respondent ID is required'], 400);
        }

        $responses = [];

        foreach ($survey->questions as $question) {
            foreach ($question->responses as $response) {
                if ($response->respondent_id == $respondentId) {
                    $responses[] = [
                        'question_id' => $question->id,
                        'response_id' => $response->id,
                        'response_text' => $response->answer_text ?? '',
                        'file_url' => $response->file_path ?? ''
                    ];
                }
            }
        }
        return response()->json([
            'responses' => $responses
        ]);
    }

    public function lPIndex(){
        $surveysWithRespondentCounts = Survey::withCount('respondents')
        ->where('is_active', 1)
        ->get()
        ->map(function ($survey) {
            // Menghitung hari sejak survei dibuat
            $created_at = Carbon::parse($survey->created_at);
            $now = Carbon::now();
            $days_since_creation = $created_at->diffInDays($now);
            $survey->days_since_creation = floor($days_since_creation)+1;

            // Menambahkan jumlah responden ke objek survei
            $survey->respondent_count = $survey->respondents_count;
            
            return $survey;
        });

        // Mengirim data survei dan jumlah responden ke tampilan
        return view('survey', ['surveys' => $surveysWithRespondentCounts]);
    }
}
