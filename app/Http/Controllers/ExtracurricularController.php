<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::all();
        return view('extracurriculars.index', compact('extracurriculars'));
    }

    public function create()
    {
        return view('extracurriculars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Extracurricular::create($request->all());
        return redirect()->route('extracurriculars.index')->with('success', 'Extracurricular created successfully.');
    }

    public function show(Extracurricular $extracurricular)
    {
        return view('extracurriculars.show', compact('extracurricular'));
    }

    public function edit(Extracurricular $extracurricular)
    {
        return view('extracurriculars.edit', compact('extracurricular'));
    }

    public function update(Request $request, Extracurricular $extracurricular)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $extracurricular->update($request->all());
        return redirect()->route('extracurriculars.index')->with('success', 'Extracurricular updated successfully.');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();
        return redirect()->route('extracurriculars.index')->with('success', 'Extracurricular deleted successfully.');
    }
}
