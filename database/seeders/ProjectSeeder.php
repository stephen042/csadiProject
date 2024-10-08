<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->count(15)->create();
        Member::factory()->count(3)->create();
    }
}
