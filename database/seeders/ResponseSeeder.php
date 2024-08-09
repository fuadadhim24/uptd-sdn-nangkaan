<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respondentId = DB::table('respondents')->first()->id;

        DB::table('responses')->insert([
            ['respondent_id' => $respondentId, 'answer_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['respondent_id' => $respondentId, 'answer_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['respondent_id' => $respondentId, 'answer_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['respondent_id' => $respondentId, 'answer_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['respondent_id' => $respondentId, 'answer_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
