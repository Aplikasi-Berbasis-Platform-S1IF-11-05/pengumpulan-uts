<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Organization;
use App\Models\Tool;
use App\Models\ProblemSolving;
use App\Models\CareerTarget;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        Profile::create([
            'name' => 'Brian Farrel Evandhika',
            'role' => 'Full Stack Developer & AI Specialist',
            'about' => 'Mahasiswa Teknik Informatika dengan IPK 3,72 yang berfokus pada pengembangan Full Stack serta kecerdasan buatan. Berpengalaman dalam merancang dan membangun antarmuka frontend serta sistem backend untuk berbagai platform digital, termasuk CRM, ERP, hingga solusi berbasis Agentic AI.',
            'nim' => '2311102037',
            'program_studi' => 'Teknik Informatika',
            'universitas' => 'Telkom University Purwokerto',
            'ipk' => '3,72 / 4,00',
            'email' => 'brianfe25@gmail.com',
            'github' => 'https://github.com/BERIYANT',
            'linkedin' => 'https://linkedin.com/in/brian-farrel-evandhika',
            'whatsapp' => 'https://wa.me/628112618282',
        ]);

        $experiences = [
            ['company' => 'PT Digital Era Fista', 'year' => '2026', 'role' => 'Magang Full Stack Developer', 'description' => 'Melaksanakan magang sebagai Full Stack Developer di PT Digital Era Fista, berkontribusi dalam pengembangan antarmuka web menggunakan HTML, CSS, dan JavaScript, Django(Python), PostgreSQL serta berkolaborasi dalam tim.', 'tech_stack' => 'HTML, CSS, JavaScript, Django(Python), PostgreSQL'],
            ['company' => 'PERADI Yogyakarta', 'year' => '2026', 'role' => 'Modeling AI Konsultasi Hukum', 'description' => 'Mengembangkan agen AI cerdas untuk layanan konsultasi hukum menggunakan metode Agentic RAG (Retrieval-Augmented Generation) guna meningkatkan akurasi jawaban berbasis dokumen hukum.', 'tech_stack' => 'Python, SQL Database'],
            ['company' => 'MI Desa Cilongok', 'year' => '2026', 'role' => 'Website PPDB & ERP', 'description' => 'Digitalisasi sistem administrasi madrasah yang mencakup modul Penerimaan Peserta Didik Baru (PPDB) dan manajemen sumber daya sekolah.', 'tech_stack' => 'HTML, CSS, JavaScript, Django(Python), PostgreSQL'],
            ['company' => 'Gorlami Bistro & PT SSM', 'year' => '2026', 'role' => 'Sistem Informasi, Aplikasi Kasir (POS) & CRM', 'description' => 'Merancang ekosistem digital terintegrasi (Web Laravel, Flutter Mobile App) untuk Gorlami Bistro serta membangun sistem CRM manajemen pelanggan untuk PT SSM.', 'tech_stack' => 'Laravel, MySQL, Flutter, Django'],
            ['company' => 'LPK Yamaguchi Purwokerto', 'year' => '2026', 'role' => 'E-Learning Platform', 'description' => 'Membangun platform pembelajaran daring yang dilengkapi dengan chatbot AI interaktif untuk membantu asistensi siswa secara real-time.', 'tech_stack' => 'HTML, CSS, JavaScript, Flask (Python), MySQL, Voiceflow (AI Chatbot)'],
        ];
        foreach ($experiences as $exp) { Experience::create($exp); }

        $orgs = [
            ['name' => 'Microsoft Certified: Azure AI Fundamentals (AI-900)', 'year' => null],
            ['name' => 'BNSP Competency: Social Media Marketing - 2025', 'year' => null],
            ['name' => 'AWS Academy: Cloud Foundations - 2025', 'year' => null],
            ['name' => 'Ketua UKM Basket', 'year' => '2026'],
            ['name' => 'Wakil Ketua UKM Basket', 'year' => '2025'],
        ];
        foreach ($orgs as $o) { Organization::create($o); }

        $skills = [
            ['name' => 'Web Development', 'proficiency' => 92],
            ['name' => 'AI & Automation', 'proficiency' => 86],
            ['name' => 'UI/UX Design', 'proficiency' => 74],
            ['name' => 'Database Management', 'proficiency' => 71],
        ];
        foreach ($skills as $s) { Skill::create($s); }

        $tools = ['Figma', 'Adobe Suite', 'VS Code', 'Git', 'n8n / Zapier'];
        foreach ($tools as $t) { Tool::create(['name' => $t]); }

        $problems = [
            ['aspect' => 'Partisipasi:', 'description' => 'Pengingat personal & variasi kegiatan agar hidup.'],
            ['aspect' => 'Komunikasi:', 'description' => 'Pertemuan berkala & transparansi informasi.'],
            ['aspect' => 'Manajemen Waktu:', 'description' => 'Perencanaan prioritas & to-do list terstruktur.'],
            ['aspect' => 'Konflik:', 'description' => 'Diskusi terbuka & musyawarah via voting.'],
        ];
        foreach ($problems as $p) { ProblemSolving::create($p); }

        $targets = [
            ['term' => 'Pendek:', 'goal' => 'Lulus cumlaude, mendalami Full Stack & AI via kursus riil.'],
            ['term' => 'Menengah:', 'goal' => 'Berkarier di Full Stack Engineer & Integrasi Fitur AI (Sertifikasi).'],
            ['term' => 'Panjang:', 'goal' => 'Membangun ekosistem AI inklusi keuangan Indonesia.'],
        ];
        foreach ($targets as $t) { CareerTarget::create($t); }
    }
}
