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
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory(2)->unverified()->create();
        
        \App\Models\Task::factory()->create(['title' => 'Pray Almugrib in Masjid']);
        \App\Models\Task::factory()->create(['title' => 'Buy groceries']);
        \App\Models\Task::factory()->create(['title' => 'Sell old stuff']);
        \App\Models\Task::factory()->create(['title' => 'Learn programming']);
        \App\Models\Task::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}