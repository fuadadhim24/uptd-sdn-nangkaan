<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
    $prestasis = Prestasi::all();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('prestasis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'required|string',
        ]);

        $prestasi = new Prestasi();

        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension(); // Generate a unique filename
            Storage::disk('public')->put('/prestasi/' . $filename, file_get_contents($file));
            $prestasi->photo_path = $filename;
        }

        // $prestasi->biography = $request->biography;
        $prestasi->save();

        return redirect()->route('admin.prestasi')->with('success', 'Prestasi added successfully.');
    }

    public function show(Prestasi $prestasi)
    {
        return view('prestasis.show', compact('prestasi'));
    }

    public function edit(Prestasi $prestasi)
    {
        return view('prestasis.edit', compact('prestasi'));
    }

    public function update(Request $request, Prestasi $prestasi)
    {
        $request->validate([
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'nullable|string',
        ]);

        if ($request->hasFile('photo_path')) {
            // Delete the old photo_path if it exists
            if ($prestasi->photo_path) {
                Storage::disk('public')->delete('/prestasi/' . $prestasi->photo_path);
            }

            // Store the new photo_path with a unique filename
            $file = $request->file('photo_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('/prestasi/' . $filename, file_get_contents($file));
            $prestasi->photo_path = $filename;
        }

        // if ($request->has('biography')) {
        //     $prestasi->biography = $request->input('biography');
        // }

        $prestasi->save();

        return redirect()->route('admin.prestasi')->with('success', 'Prestasi updated successfully.');
    }

    public function destroy(Prestasi $prestasi)
    {
        // Delete the photo_path if it exists
        if ($prestasi->photo_path) {
            Storage::disk('public')->delete('/prestasi/' . $prestasi->photo_path);
        }

        $prestasi->delete();
        return redirect()->route('admin.prestasi')->with('success', 'Prestasi deleted successfully.');
    }

    public function lPIndex()
    {
    $prestasis = Prestasi::all();
    // dd($prestasis);
        return view('prestasi', compact('prestasis'));
    }
}
