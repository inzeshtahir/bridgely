<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
    Plan::create([
        'name' => 'Basic',
        'slug' => 'basic',
        'price' => 19.99,
        'features' => json_encode(['AI Chatbot', 'Email Support']),
    ]);

    Plan::create([
        'name' => 'Pro',
        'slug' => 'pro',
        'price' => 49.99,
        'features' => json_encode(['AI Chatbot', 'Live Support', 'CRM Sync']),
    ]);
}
}
