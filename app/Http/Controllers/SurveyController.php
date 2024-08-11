<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use App\Models\Survey;
use Illuminate\Http\Request;

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
        $survey = Survey::with(['questions.answers.responses.respondent'])->findOrFail($surveyId);

        return view('admin.surveys.results.detail.index', [
            'surveyId' => $surveyId
        ]);
    }


    public function getDataRespondent($surveyId){
        // Load the survey data with related models
        $survey = Survey::with(['questions.answers.responses.respondent'])->findOrFail($surveyId);

        // Prepare data to be returned in JSON format
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
                    'answers' => $question->answers->map(function ($answer) {
                        return [
                            'answer_id' => $answer->id,
                            'answer_text' => $answer->answer_text,
                            'file_path' => $answer->file_path,
                            'options' => $answer->options,
                            'min_value' => $answer->min_value,
                            'max_value' => $answer->max_value,
                            'responses' => $answer->responses->map(function ($response) {
                                return [
                                    'response_id' => $response->id,
                                    'respondent_id' => $response->respondent_id,
                                    'response_text' => $response->response_text, // Adjust based on your schema
                                    'file_url' => $response->file_url // Adjust based on your schema
                                ];
                            })
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
        $survey = Survey::with(['questions.answers.responses'])->findOrFail($surveyId);

        // Ensure $respondentId is set
        if (empty($respondentId)) {
            return response()->json(['error' => 'Respondent ID is required'], 400);
        }

        // Initialize responses array
        $responses = [];

        // Iterate through questions and answers to filter responses by respondent ID
        foreach ($survey->questions as $question) {
            foreach ($question->answers as $answer) {
                foreach ($answer->responses as $response) {
                    if ($response->respondent_id == $respondentId) {
                        $responses[] = [
                            'question_id' => $question->id,
                            'answer_id' => $response->answer_id,
                            'response_text' => $response->response_text, // Adjust as necessary
                            'file_url' => $response->file_url // Adjust as necessary
                        ];
                    }
                }
            }
        }

        // Return JSON response
        return response()->json([
            'responses' => $responses
        ]);
    }



}
