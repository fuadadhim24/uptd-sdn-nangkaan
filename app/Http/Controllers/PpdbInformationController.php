<?php

namespace App\Http\Controllers;

use App\Models\PpdbInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PpdbInformationController extends Controller
{
    public function index()
    {
        $ppdbInformation = PpdbInformation::latest()->first();
        return view('admin.ppdb.index', compact('ppdbInformation'));
    }

    public function update(Request $request, PpdbInformation $ppdbInformation)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->only(['title']);

        if ($request->hasFile('file_path')) {
            if ($ppdbInformation->file_path) {
                Storage::disk('public')->delete('ppdb/' . $ppdbInformation->file_path);
            }

            $file = $request->file('file_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('ppdb', $file, $filename);
            $data['file_path'] = $filename;
        }

        $ppdbInformation->update($data);

        return redirect()->route('admin.ppdb')->with('success', 'PPDB Information updated successfully.');
    }
}
