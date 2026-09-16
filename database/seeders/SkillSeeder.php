<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Skill::insert([
            // Frontend
            [
                'name' => 'React',
                'category' => 'Frontend',
                'proficiency' => 90,
                'icon' => 'fa-brands fa-react',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vue.js',
                'category' => 'Frontend',
                'proficiency' => 75,
                'icon' => 'fa-brands fa-vuejs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HTML/CSS',
                'category' => 'Frontend',
                'proficiency' => 95,
                'icon' => 'fa-brands fa-html5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Backend
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'proficiency' => 85,
                'icon' => 'fa-brands fa-laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Node.js',
                'category' => 'Backend',
                'proficiency' => 80,
                'icon' => 'fa-brands fa-node-js',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Outils / DevOps
            [
                'name' => 'Docker',
                'category' => 'Outils & DevOps',
                'proficiency' => 60,
                'icon' => 'fa-brands fa-docker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Git',
                'category' => 'Outils & DevOps',
                'proficiency' => 90,
                'icon' => 'fa-brands fa-git-alt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
