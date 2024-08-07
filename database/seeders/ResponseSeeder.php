<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('responses')->insert([
            // Responses for respondent 1
            ['respondent_id' => 1, 'answer_id' => 1, 'created_at' => now(), 'updated_at' => now()], // John Doe - "Sangat Puas"
            ['respondent_id' => 1, 'answer_id' => 5, 'created_at' => now(), 'updated_at' => now()], // John Doe - "Ya"
            
            // Responses for respondent 2
            ['respondent_id' => 2, 'answer_id' => 2, 'created_at' => now(), 'updated_at' => now()], // Jane Smith - "Puas"
            ['respondent_id' => 2, 'answer_id' => 6, 'created_at' => now(), 'updated_at' => now()] // Jane Smith - "Tidak"
        ]);
    }
}
