<?php

namespace App\Http\Controllers;

use App\Models\AcademicCalendar;
use App\Models\PpdbInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AcademicCalendarController extends Controller
{
    public function index()
    {
        $academicCalendar = AcademicCalendar::latest()->first();
        return view('admin.kalender-akademik.index', compact('academicCalendar'));
    }
    
    public function update(Request $request, AcademicCalendar $academicCalendar)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
        ]);
        
        $data = $request->only(['title']);
        
        if ($request->hasFile('file_path')) {
            if ($academicCalendar->file_path) {
                Storage::disk('public')->delete('academic_calendars/' . $academicCalendar->file_path);
            }
            
            $file = $request->file('file_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('academic_calendars', $file, $filename);
            $data['file_path'] = $filename;
        }
        
        $academicCalendar->update($data);
        
        return redirect()->route('admin.kalender-akademik')->with('success', 'Academic Calendar updated successfully.');
    }
    
    public function lPIndex()
    {
        $academicCalendar = AcademicCalendar::latest()->first();
        $ppdbInformation = PpdbInformation::latest()->first();
        // dd($academicCalendar);
        return view('akademik', compact('academicCalendar','ppdbInformation'));
    }
}
