<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function index()
    {
    $teachers = Teacher::all();
        return view('admin.guru.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'required|string',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension(); // Generate a unique filename
            Storage::disk('public')->put('/guru/' . $filename, file_get_contents($file));
            $teacher->photo = $filename;
        }

        // $teacher->biography = $request->biography;
        $teacher->save();

        return redirect()->route('admin.guru')->with('success', 'Teacher added successfully.');
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg',
            // 'biography' => 'nullable|string',
        ]);

        $teacher->name = $request->input('name');
        $teacher->designation = $request->input('designation');

        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($teacher->photo) {
                Storage::disk('public')->delete('/guru/' . $teacher->photo);
            }

            // Store the new photo with a unique filename
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put('/guru/' . $filename, file_get_contents($file));
            $teacher->photo = $filename;
        }

        // if ($request->has('biography')) {
        //     $teacher->biography = $request->input('biography');
        // }

        $teacher->save();

        return redirect()->route('admin.guru')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        // Delete the photo if it exists
        if ($teacher->photo) {
            Storage::disk('public')->delete('/guru/' . $teacher->photo);
        }

        $teacher->delete();
        return redirect()->route('admin.guru')->with('success', 'Teacher deleted successfully.');
    }

    public function lPIndex()
    {
    $teachers = Teacher::all();
    // dd($teachers);
        return view('guru', compact('teachers'));
    }
}
