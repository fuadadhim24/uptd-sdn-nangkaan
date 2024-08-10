<?php

namespace App\Http\Controllers;

use App\Models\Curricula;
use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    public function index()
    {
        $curricula = Curricula::all();
        return view('curricula.index', compact('curricula'));
    }

    public function create()
    {
        return view('curricula.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        Curricula::create($request->all());
        return redirect()->route('curricula.index')->with('success', 'Curricula created successfully.');
    }

    public function show(Curricula $curriculum)
    {
        return view('curricula.show', compact('curriculum'));
    }

    public function edit(Curricula $curriculum)
    {
        return view('curricula.edit', compact('curriculum'));
    }

    public function update(Request $request, Curricula $curriculum)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        $curriculum->update($request->all());
        return redirect()->route('curricula.index')->with('success', 'Curricula updated successfully.');
    }

    public function destroy(Curricula $curriculum)
    {
        $curriculum->delete();
        return redirect()->route('curricula.index')->with('success', 'Curricula deleted successfully.');
    }
}
