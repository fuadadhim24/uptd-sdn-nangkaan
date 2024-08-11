<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Response;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Response::create([
            'respondent_id' => 1,
            'answer_id' => 1,
        ]);

        Response::create([
            'respondent_id' => 1,
            'answer_id' => 2,
        ]);

        Response::create([
            'respondent_id' => 2,
            'answer_id' => 1,
        ]);

        Response::create([
            'respondent_id' => 2,
            'answer_id' => 2,
        ]);

        Response::create([
            'respondent_id' => 3,
            'answer_id' => 1,
        ]);

        Response::create([
            'respondent_id' => 3,
            'answer_id' => 2,
        ]);

        // Kasus 2: Respons untuk Survey 2
        Response::create([
            'respondent_id' => 4,
            'answer_id' => 3,
        ]);

        Response::create([
            'respondent_id' => 4,
            'answer_id' => 4,
        ]);

        Response::create([
            'respondent_id' => 5,
            'answer_id' => 3,
        ]);

        Response::create([
            'respondent_id' => 5,
            'answer_id' => 4,
        ]);

        Response::create([
            'respondent_id' => 6,
            'answer_id' => 3,
        ]);

        Response::create([
            'respondent_id' => 6,
            'answer_id' => 4,
        ]);

        Response::create([
            'respondent_id' => 7,
            'answer_id' => 3,
        ]);

        Response::create([
            'respondent_id' => 7,
            'answer_id' => 4,
        ]);

        Response::create([
            'respondent_id' => 8,
            'answer_id' => 3,
        ]);

        Response::create([
            'respondent_id' => 8,
            'answer_id' => 4,
        ]);

        // Kasus 3: Respons untuk Survey 3
        Response::create([
            'respondent_id' => 9,
            'answer_id' => 5,
        ]);

        Response::create([
            'respondent_id' => 10,
            'answer_id' => 5,
        ]);
    }
}
