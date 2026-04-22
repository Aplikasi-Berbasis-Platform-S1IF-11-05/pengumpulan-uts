<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
        ]);

        // Profile
        \App\Models\Profile::create([
            'name' => 'Syiva Qaila Natasa Sugama',
            'role' => 'Informatics Engineering Student',
            'bio' => 'Informatics Engineering student and scholarship awardee with a strong interest in UI/UX design, digital innovation, and technology-driven solutions. Experienced in international project collaboration, research data processing, and digital content development. Demonstrated leadership through organizational roles and active involvement in community engagement initiatives. Passionate about leveraging technology to create meaningful impact for society.',
            'email' => 'syiva@example.com',
            'linkedin' => 'https://linkedin.com/in/syivaqaila',
            'github' => 'https://github.com/syivaqaila',
        ]);

        // Skills
        $skills = [
            ['name' => 'UI/UX Design', 'category' => 'Design'],
            ['name' => 'Digital Innovation', 'category' => 'Tech'],
            ['name' => 'Research Data Processing', 'category' => 'Research'],
            ['name' => 'Digital Content Development', 'category' => 'Content'],
            ['name' => 'International Project Collaboration', 'category' => 'Collaboration'],
        ];

        foreach ($skills as $skill) {
            \App\Models\Skill::create($skill);
        }

        // Achievements
        \App\Models\Achievement::create([
            'title' => 'LPK Yamaguchi - Workforce Training Digital Platform',
            'description' => 'Designed the UI/UX interface for the LPK Yamaguchi digital application. Created user interface layouts and user experience flows to improve usability and accessibility. Collaborated with a multidisciplinary development team in building the platform. The application is officially registered under Intellectual Property Rights (HKI) and actively used by partner institutions for workforce training services.',
            'year' => '2025',
            'company' => 'LPK Yamaguchi',
            'role' => 'UI/UX Designer | Registered Intellectual Property (HKI)',
        ]);

        \App\Models\Achievement::create([
            'title' => 'SampaHero - Sustainable Waste Management Mobile Application',
            'description' => 'Designed the UI/UX of the SampaHero mobile application to support waste management awareness. Developed user flow and interface design to improve application usability. Collaborated with an international team in developing a sustainable city solution. Achieved Second Runner-up in the international program.',
            'year' => '2025',
            'company' => 'Global Project Based Learning Program (GPBL), Suranaree University of Technology - Thailand',
            'role' => 'UI/UX Designer',
        ]);
    }
}
