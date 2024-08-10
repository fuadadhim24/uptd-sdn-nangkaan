<?php

namespace App\Http\Controllers;

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
}
