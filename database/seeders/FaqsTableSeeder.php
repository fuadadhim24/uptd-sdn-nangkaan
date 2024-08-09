<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsTableSeeder extends Seeder
{
    /**
     * Seed the FAQs table.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What is the admission process?',
                'answer' => 'The admission process involves filling out an application form and submitting the required documents.',
            ],
            [
                'question' => 'What are the school hours?',
                'answer' => 'School hours are from 8:00 AM to 3:00 PM, Monday through Friday.',
            ],
            [
                'question' => 'Are there any extracurricular activities?',
                'answer' => 'Yes, we offer various extracurricular activities including sports, music, and arts.',
            ],
        ]);
    }
}
