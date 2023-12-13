<?php

namespace Database\Seeders;

use App\Models\Pnc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pnc::create(
            [
                'pasien_id' => 1,
                's' => 1,
                'r' => 2,
                'n' => 3,
                'kunjungan' => 4,
                'gpa' => 20,
                'keluhan' => 'Pelayanan yang kurang baik 👎',
                'terapi' => 'Pijat',
                'nama_bidan' => 'Dr. Gadungan',
                'method_payment' => 'JKN',
                'payment' => 10000
            ]
        );
    }
}
