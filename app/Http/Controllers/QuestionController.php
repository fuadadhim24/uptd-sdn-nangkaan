<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Survey;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($surveyId)
    {
        $survey = Survey::findOrFail($surveyId);
        $questions = $survey->questions;
        return view('admin.surveys.questions.index', compact('survey','questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'survey_id' => 'required|exists:surveys,id',
            'question_text' => 'required|string',
            'question_type' => 'required|in:text_input,text_description,radio,range,checkbox,file',
            'description' => 'nullable|string',
            'radio_options' => 'nullable|array',
            'checkbox_options' => 'nullable|array',
            'range_input' => 'nullable|string',
        ]);

        // Debug data
        // dd($validated);

        $question = new Question();
        $question->survey_id = $validated['survey_id'];
        $question->question_text = $validated['question_text'];
        $question->question_type = $validated['question_type'];
        $question->description = $validated['description'] ?? null;
        $question->range = $validated['range_input'] ?? null;

        if ($validated['question_type'] === 'radio') {
            $question->options = json_encode($validated['radio_options']);
        } elseif ($validated['question_type'] === 'checkbox') {
            $question->options = json_encode($validated['checkbox_options']);
        } else {
            $question->options = json_encode([]);
        }

        $question->save();

        return redirect()->route('admin.question', ['survey' => $validated['survey_id']])->with('success', 'Question created successfully.');
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'survey_id' => 'required|exists:surveys,id',
            'question_text' => 'required|string',
            'question_type' => 'required|in:text_input,text_description,radio,range,checkbox,file',
            'description' => 'nullable|string',
            'radio_options' => 'nullable|array',
            'checkbox_options' => 'nullable|array',
            'range_input' => 'nullable|string',
        ]);

        $question = Question::findOrFail($id);
        $question->survey_id = $validated['survey_id'];
        $question->question_text = $validated['question_text'];
        $question->question_type = $validated['question_type'];
        $question->description = $validated['description'] ?? null;
        $question->range = $validated['range_input'] ?? null;

        if ($validated['question_type'] === 'radio') {
            $question->options = json_encode($validated['radio_options'] ?? []);
        } elseif ($validated['question_type'] === 'checkbox') {
            $question->options = json_encode($validated['checkbox_options'] ?? []);
        } else {
            $question->options = null; // Clear options for other types
        }

        $question->save();

        return redirect()->route('admin.question', ['survey' => $validated['survey_id']])->with('success', 'Question updated successfully.');
    }
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $surveyId = $question->survey_id; // Save the survey ID to redirect back later
        $question->delete();

        return redirect()->route('admin.question', ['survey' => $surveyId])->with('success', 'Question deleted successfully.');
    }
}
