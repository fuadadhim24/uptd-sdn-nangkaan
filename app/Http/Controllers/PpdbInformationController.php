<?php

namespace App\Http\Controllers;

use App\Models\PpdbInformation;
use Illuminate\Http\Request;

class PpdbInformationController extends Controller
{
    public function index()
    {
        $ppdbInformations = PpdbInformation::all();
        return view('ppdb_informations.index', compact('ppdbInformations'));
    }

    public function create()
    {
        return view('ppdb_informations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        PpdbInformation::create($request->all());
        return redirect()->route('ppdb_informations.index')->with('success', 'PPDB Information created successfully.');
    }

    public function show(PpdbInformation $ppdbInformation)
    {
        return view('ppdb_informations.show', compact('ppdbInformation'));
    }

    public function edit(PpdbInformation $ppdbInformation)
    {
        return view('ppdb_informations.edit', compact('ppdbInformation'));
    }

    public function update(Request $request, PpdbInformation $ppdbInformation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        $ppdbInformation->update($request->all());
        return redirect()->route('ppdb_informations.index')->with('success', 'PPDB Information updated successfully.');
    }

    public function destroy(PpdbInformation $ppdbInformation)
    {
        $ppdbInformation->delete();
        return redirect()->route('ppdb_informations.index')->with('success', 'PPDB Information deleted successfully.');
    }
}
