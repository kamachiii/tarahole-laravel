<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create(
            [
                'name' => 'Pasien',
                'no_bpjs' => 'xxxxxxxxxx',
                'no_telepon' => '08xxxxxxxxxx',
                'tb' => '206',
                'bb' => '70',
                'td' => '100',
                'tgl_kunjungan' => now(),
                'tgl_kembali' => now(),
            ],
        );
    }
}
