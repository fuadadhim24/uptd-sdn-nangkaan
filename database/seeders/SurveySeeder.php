<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Survey::create([
            'title' => 'Survey 1',
            'description' => 'Deskripsi Survey 1',
            'is_active' => true,
        ]);

        // Kasus 2: Survey dengan 5 responden
        Survey::create([
            'title' => 'Survey 2',
            'description' => 'Deskripsi Survey 2',
            'is_active' => true,
        ]);

        // Kasus 3: Survey dengan 2 responden
        Survey::create([
            'title' => 'Survey 3',
            'description' => 'Deskripsi Survey 3',
            'is_active' => false,
        ]);
    }
}
