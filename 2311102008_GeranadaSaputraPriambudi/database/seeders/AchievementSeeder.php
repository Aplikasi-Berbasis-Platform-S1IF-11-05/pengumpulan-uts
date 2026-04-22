<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            // Certifications
            [
                'type' => 'certification',
                'title' => 'Professional Certification – Social Media Marketing',
                'description' => '',
                'date' => '2025',
                'organization' => 'Badan Nasional Sertifikasi Profesi (BNSP)',
            ],
            [
                'type' => 'certification',
                'title' => 'Professional Certification – UI / UX Research and Design',
                'description' => '',
                'date' => '2025',
                'organization' => 'Myskill.id',
            ],
            [
                'type' => 'certification',
                'title' => 'Professional Certification – Digital Marketing',
                'description' => '',
                'date' => '2025',
                'organization' => 'Myskill.id',
            ],
            [
                'type' => 'certification',
                'title' => 'IT Business Plan Training',
                'description' => 'Developed the concept of Audiolitma, a digital platform for audio service access. Designed the business concept.',
                'date' => '2024',
                'organization' => 'Telkom University',
            ],
            // Projects
            [
                'type' => 'project',
                'title' => 'Audiolitma - Digital Audio Sales Service Business Concept',
                'description' => 'Developed the concept of Audiolitma, a digital platform for audio service access. Designed the business concept.',
                'date' => '',
                'organization' => '',
            ],
            [
                'type' => 'project',
                'title' => 'LPK Yamaguchi – Workforce Training Digital Platform',
                'description' => 'Front-End Developer | Registered Intellectual Property (HKI) | 2026. Developed and implemented the front-end interface for the LPK Yamaguchi digital application. Translated UI/UX designs into responsive and functional web pages. Built interactive components to enhance usability and user experience. Collaborated with UI/UX designers and the development team during the development process. Optimized front-end performance and improved accessibility of the platform.',
                'date' => '2026',
                'organization' => 'LPK Yamaguchi',
            ],
            [
                'type' => 'project',
                'title' => 'SSM Portal - Financial System for PT. Satria Sakti Mandiri (On Progress)',
                'description' => 'Front-End Developer | 2026. Developed and implemented the front-end interface for the SSM Portal digital application. Translated UI/UX designs into responsive and functional web pages. Built interactive components to enhance usability and user experience.',
                'date' => '2026',
                'organization' => 'PT. Satria Sakti Mandiri',
            ],
            // Work Experience
            [
                'type' => 'work_experience',
                'title' => 'Support Specialist',
                'description' => 'Support Specialist, assisting technicians in maintaining Indihome customers. Compiling documents sent from the field team for billing. Creating a website for the office system.',
                'date' => 'April - September 2022',
                'organization' => 'PT. Telkom Akses Purwokerto (Internship)',
            ],
            [
                'type' => 'work_experience',
                'title' => 'Front-end Developer',
                'description' => '',
                'date' => '2024 - Now',
                'organization' => 'PT. Satria Sakti Mandiri',
            ],
            // Community
            [
                'type' => 'community',
                'title' => 'Volunteer – National Social Program',
                'description' => '',
                'date' => '2025',
                'organization' => 'Yayasan Al Kautsar Bina Insani',
            ],
        ];

        foreach ($achievements as $achievement) {
            \App\Models\Achievement::create($achievement);
        }
    }
}
