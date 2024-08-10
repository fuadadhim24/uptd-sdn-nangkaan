<?php

namespace App\Http\Controllers;

use App\Models\AcademicCalendar;
use Illuminate\Http\Request;

class AcademicCalendarController extends Controller
{
    public function index()
    {
        $calendars = AcademicCalendar::all();
        return view('academic_calendars.index', compact('calendars'));
    }

    public function create()
    {
        return view('academic_calendars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        AcademicCalendar::create($request->all());
        return redirect()->route('academic_calendars.index')->with('success', 'Academic Calendar created successfully.');
    }

    public function show(AcademicCalendar $academicCalendar)
    {
        return view('academic_calendars.show', compact('academicCalendar'));
    }

    public function edit(AcademicCalendar $academicCalendar)
    {
        return view('academic_calendars.edit', compact('academicCalendar'));
    }

    public function update(Request $request, AcademicCalendar $academicCalendar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        $academicCalendar->update($request->all());
        return redirect()->route('academic_calendars.index')->with('success', 'Academic Calendar updated successfully.');
    }

    public function destroy(AcademicCalendar $academicCalendar)
    {
        $academicCalendar->delete();
        return redirect()->route('academic_calendars.index')->with('success', 'Academic Calendar deleted successfully.');
    }
}
