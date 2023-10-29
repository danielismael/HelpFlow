<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
            'name' => 'Daniel nagibe',
            'email' => 'daniel_nagibe@outlook.com',
            'password' => bcrypt('daniel123')
         ]);
    }
}
