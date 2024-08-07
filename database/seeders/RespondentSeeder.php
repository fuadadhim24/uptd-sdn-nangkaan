<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('respondents')->insert([
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob Brown', 'email' => 'bob.brown@example.com', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
