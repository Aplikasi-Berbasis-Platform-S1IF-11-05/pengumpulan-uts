<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PersonalInfo::create([
            'name' => 'GERANADA SAPUTRA PRIAMBUDI',
            'bio' => 'Undergraduate student of Informatics at Telkom University, with a background of Telkom Purwokerto Vocational School graduates in Access Network Engineering expertise. Has a foundation in Fiber Optic network infrastructure which has now transformed into a UI / UX Designer and Front-end Web Development specialty. During my 6 semesters in college, I have created several web designs using figma and worked on my final assignment for the course by creating an E-Learning Website for LPK Yamaguchi in the Front-end Web section. Currently actively contributing as a Front-end Developer in a Website creation project for PT. Satria Sakti Mandiri',
            'phone' => '+62-812-2814-0839',
            'email' => 'gerydrews@gmail.com',
            'linkedin' => 'www.linkedin.com',
            'education' => 'Access Network Engineering (2020 - 2023) TELKOM PURWOKERTO VOCATIONAL SCHOOL Bachelor of Informatics (2023 - Now) GPA 3.72 / 4.00 TELKOM UNIVERSITY',
        ]);
    }
}
