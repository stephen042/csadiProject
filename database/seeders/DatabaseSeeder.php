<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Member;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        // Project::factory()->count(15)->create();
        Member::factory()->count(3)->create();
        
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'daniella55@example.org',
            'role' => '2',
        ]);
    }
}
