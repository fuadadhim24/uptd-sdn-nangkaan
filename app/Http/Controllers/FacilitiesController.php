<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FacilitiesController extends Controller
{
    public function index()
    {
        $facilities = Facilities::all();
        return view('admin.fasilitas.index', compact('facilities'));
    }

    public function create()
    {
        return view('facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validate image file types
        ]);

        $facility = new Facilities();
        $facility->name = $request->name;
        $facility->description = $request->description;

        if ($request->hasFile('photo')) {
            // Handle the file upload
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('/facilities/' . $filename, file_get_contents($file));
            $facility->photo = $filename;
        }

        $facility->save();

        return redirect()->route('admin.fasilitas')->with('success', 'Facility created successfully.');
    }

    public function show(Facilities $facility)
    {
        return view('facilities.show', compact('facility'));
    }

    public function edit(Facilities $facility)
    {
        return view('facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facilities $facility)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validate image file types
        ]);

        $facility->name = $request->input('name');
        $facility->description = $request->input('description');

        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($facility->photo) {
                Storage::disk('public')->delete('/facilities/' . $facility->photo);
            }

            // Handle the new file upload
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('/facilities/' . $filename, file_get_contents($file));
            $facility->photo = $filename;
        }

        $facility->save();

        return redirect()->route('admin.fasilitas')->with('success', 'Facility updated successfully.');
    }

    public function destroy(Facilities $facility)
    {
        // Delete the photo if it exists
        if ($facility->photo) {
            Storage::disk('public')->delete('/facilities/' . $facility->photo);
        }

        $facility->delete();
        return redirect()->route('admin.fasilitas')->with('success', 'Facility deleted successfully.');
    }
}
