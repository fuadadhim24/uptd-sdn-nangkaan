<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicCalendarsTableSeeder extends Seeder
{
    /**
     * Seed the academic calendars table.
     */
    public function run(): void
    {
        DB::table('academic_calendars')->insert([
            [
                'title' => 'Academic Calendar 2024',
                'file_path' => 'files/academic_calendar_2024.pdf',
            ],
            [
                'title' => 'Academic Calendar 2025',
                'file_path' => 'files/academic_calendar_2025.pdf',
            ],
        ]);
    }
}
