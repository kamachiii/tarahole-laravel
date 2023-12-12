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
                'nama_bidan' => 'Bidan',
                'no_bpjs' => 'xxxxxxxxxx',
                'no_telepon' => '08xxxxxxxxxx',
                'tgl_kunjungan' => now(),
                'tgl_kembali' => now(),
                'metode_payment' => 'Mandiri',
                'payment' => '1000000',
                'jenis_kb' => 'Pil',
                'kb_terakhir' => 'Pil',
                'tgl_kb_terakhir' => now(),
                'hamil' => 0,
            ],
        );
    }
}
