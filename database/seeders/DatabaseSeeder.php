<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            // SurveySeeder::class,
            // QuestionSeeder::class, 
            // AnswerSeeder::class,
            // RespondentSeeder::class,
            // ResponseSeeder::class,
            PrestasiSeeder::class,
            KaryaSeeder::class,
            VisiMisiSeeder::class,
            SurveyDataSeeder::class,
            FaqsTableSeeder::class,
            PpdbInformationTableSeeder::class,
            AcademicCalendarsTableSeeder::class,
            CurriculaTableSeeder::class,
            TeachersTableSeeder::class,
            FacilitiesTableSeeder::class,
            ExtracurricularsTableSeeder::class,
            PrincipalWelcomeMessagesTableSeeder::class,
        ]);
    }
}
