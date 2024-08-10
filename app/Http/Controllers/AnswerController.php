<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();
        return view('answers.index', compact('answers'));
    }

    public function create()
    {
        return view('answers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_type' => 'required|string',
            'answer_text' => 'nullable|string',
            'file_path' => 'nullable|string',
            'options' => 'nullable|array',
            'min_value' => 'nullable|integer',
            'max_value' => 'nullable|integer',
        ]);

        Answer::create($request->all());
        return redirect()->route('answers.index')->with('success', 'Answer created successfully.');
    }

    public function show(Answer $answer)
    {
        return view('answers.show', compact('answer'));
    }

    public function edit(Answer $answer)
    {
        return view('answers.edit', compact('answer'));
    }

    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_type' => 'required|string',
            'answer_text' => 'nullable|string',
            'file_path' => 'nullable|string',
            'options' => 'nullable|array',
            'min_value' => 'nullable|integer',
            'max_value' => 'nullable|integer',
        ]);

        $answer->update($request->all());
        return redirect()->route('answers.index')->with('success', 'Answer updated successfully.');
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect()->route('answers.index')->with('success', 'Answer deleted successfully.');
    }
}
