<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\PpdbInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KaryaController extends Controller
{
    public function index()
    {
    $karyas = Karya::all();
        return view('admin.karya.index', compact('karyas'));
    }

    public function create()
    {
        return view('karyas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'required|string',
        ]);

        $karya = new Karya();

        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension(); // Generate a unique filename
            Storage::disk('public')->put('/karya/' . $filename, file_get_contents($file));
            $karya->photo_path = $filename;
        }

        // $karya->biography = $request->biography;
        $karya->save();

        return redirect()->route('admin.karya')->with('success', 'Karya added successfully.');
    }

    public function show(Karya $karya)
    {
        return view('karyas.show', compact('karya'));
    }

    public function edit(Karya $karya)
    {
        return view('karyas.edit', compact('karya'));
    }

    public function update(Request $request, Karya $karya)
    {
        $request->validate([
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'nullable|string',
        ]);

        if ($request->hasFile('photo_path')) {
            // Delete the old photo_path if it exists
            if ($karya->photo_path) {
                Storage::disk('public')->delete('/karya/' . $karya->photo_path);
            }

            // Store the new photo_path with a unique filename
            $file = $request->file('photo_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('/karya/' . $filename, file_get_contents($file));
            $karya->photo_path = $filename;
        }

        // if ($request->has('biography')) {
        //     $karya->biography = $request->input('biography');
        // }

        $karya->save();

        return redirect()->route('admin.karya')->with('success', 'Karya updated successfully.');
    }

    public function destroy(Karya $karya)
    {
        // Delete the photo_path if it exists
        if ($karya->photo_path) {
            Storage::disk('public')->delete('/karya/' . $karya->photo_path);
        }

        $karya->delete();
        return redirect()->route('admin.karya')->with('success', 'Karya deleted successfully.');
    }

    public function lPIndex()
    {
        $karyas = Karya::all();
        // dd($karyas);
        $ppdbInformation = PpdbInformation::latest()->first();
            return view('karya', compact('karyas','ppdbInformation'));
    }
}
