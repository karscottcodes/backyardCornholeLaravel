<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Player;
use App\Models\Team;
use App\Models\Result;
use App\Models\PlayerTeam;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Player::factory(10)->create();
        Team::factory(10)->create();
        // Result::factory(20)->create();
    }
}
