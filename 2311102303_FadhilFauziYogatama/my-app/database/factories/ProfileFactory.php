<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => 'Fadhil Fauzi Yogatama',
            'asal' => 'Purbalingga',
            'sekolah' => 'SMK Telkom Purwokerto',
            'tanggal_lahir' => '2005-04-06',
            'deskripsi' => 'Saya memiliki minat di bidang web development dan teknologi.'
        ];
    }
}