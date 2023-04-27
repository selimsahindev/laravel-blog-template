<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Post::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Selim',
        //     'email' => 'developer@test.com',
        //     'password' => bcrypt('123123123'),
        // ]);
    }
}
