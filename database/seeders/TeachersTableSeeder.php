<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Seed the teachers table.
     */
    public function run(): void
    {
        DB::table('teachers')->insert([
            [
                'name' => 'John Doe',
                'designation' => 'Mathematics Teacher',
                'photo' => 'photos/john_doe.jpg',
                'biography' => 'John Doe has been teaching Mathematics for over 10 years.',
            ],
            [
                'name' => 'Jane Smith',
                'designation' => 'English Teacher',
                'photo' => 'photos/jane_smith.jpg',
                'biography' => 'Jane Smith is an expert in English Literature with a passion for teaching.',
            ],
        ]);
    }
}
