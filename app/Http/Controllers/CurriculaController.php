<?php

namespace App\Http\Controllers;

use App\Models\Curricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CurriculaController extends Controller
{
    public function index()
    {
        $curriculum = Curricula::latest()->first();
        return view('admin.kurikulum.index', compact('curriculum'));
    }

    public function update(Request $request, Curricula $curriculum)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'nullable|file|mimes:pdf', 
        ]);

        $data = $request->only(['title']);

        if ($request->hasFile('file_path')) {
            if ($curriculum->file_path) {
                Storage::disk('public')->delete('curricula/' . $curriculum->file_path);
            }

            $file = $request->file('file_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('curricula', $filename, 'public');
            $data['file_path'] = $filename;
        }

        $curriculum->update($data);
        return redirect()->route('admin.kurikulum')->with('success', 'Curricula updated successfully.');
    }
}
