<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use Illuminate\Http\Request;

class RespondentController extends Controller
{
    public function index()
    {
        $respondents = Respondent::all();
        return view('respondents.index', compact('respondents'));
    }

    public function create()
    {
        return view('respondents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Respondent::create($request->all());
        return redirect()->route('respondents.index')->with('success', 'Respondent created successfully.');
    }

    public function show(Respondent $respondent)
    {
        return view('respondents.show', compact('respondent'));
    }

    public function edit(Respondent $respondent)
    {
        return view('respondents.edit', compact('respondent'));
    }

    public function update(Request $request, Respondent $respondent)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $respondent->update($request->all());
        return redirect()->route('respondents.index')->with('success', 'Respondent updated successfully.');
    }

    public function destroy(Respondent $respondent)
    {
        $respondent->delete();
        return redirect()->route('respondents.index')->with('success', 'Respondent deleted successfully.');
    }
}
