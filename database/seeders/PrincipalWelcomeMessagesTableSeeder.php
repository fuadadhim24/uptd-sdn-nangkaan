<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrincipalWelcomeMessagesTableSeeder extends Seeder
{
    /**
     * Seed the principal welcome messages table.
     */
    public function run(): void
    {
        DB::table('principal_welcome_messages')->insert([
            [
                'message' => 'Welcome to our school! We are committed to providing the best education and support for our students.',
                'photo_path' => 'photos/principal_welcome.jpg',
            ],
        ]);
    }
}
