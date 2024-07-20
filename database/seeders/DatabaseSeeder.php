<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        Blog::factory(50)->create();
        
        // $user = User::first(); // Get the first created user
        // dd($user);  // TO TEST IF THE SEEDING WAS SUCCESSFUL IN THE TERMINAL, IT SHOWS THE SEEDED FAKE USERS

    }
}
