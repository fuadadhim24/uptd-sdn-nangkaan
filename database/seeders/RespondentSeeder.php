<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Respondent;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Respondent::create(['name' => 'Alice']);
        Respondent::create(['name' => 'Bob']);
        Respondent::create(['name' => 'Charlie']);

        // Kasus 2: Responden untuk Survey 2
        Respondent::create(['name' => 'David']);
        Respondent::create(['name' => 'Eve']);
        Respondent::create(['name' => 'Frank']);
        Respondent::create(['name' => 'Grace']);
        Respondent::create(['name' => 'Heidi']);

        // Kasus 3: Responden untuk Survey 3
        Respondent::create(['name' => 'Ivan']);
        Respondent::create(['name' => 'Judy']);
    }
}
