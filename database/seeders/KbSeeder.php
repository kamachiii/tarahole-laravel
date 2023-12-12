<?php

namespace Database\Seeders;

use App\Models\Kb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kb::create(
            [
                'user_id' => 1,
                'nama_bidan' => 'Dr. Good Game',
                'jenis_kb' => 'Pil',
                'kb_terakhir' => 'Pil',
                'tgl_kb_terakhir' => now(),
                'lk' => 1,
                'pr' => 1,
                'hamil' => 0,
                'keluhan' => 'Tempat antre yang terlalu kecil sehingga membuat antrean menjadi panjang',
                'metode_payment' => 'Mandiri',
                'payment' => '1000000',
            ]
        );
    }
}
