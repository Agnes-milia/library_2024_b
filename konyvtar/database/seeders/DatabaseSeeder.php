<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Copy;
use App\Models\Lending;
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
        //fontos a sorrend!!
        User::factory(10)->create();
        Book::factory(10)->create();
        Copy::factory(10)->create();
        Lending::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}