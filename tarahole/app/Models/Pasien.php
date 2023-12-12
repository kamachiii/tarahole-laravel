<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = [
        'name',
        'nama_bidan',
        'no_bpjs',
        'no_telepon',
        'tgl_kunjungan',
        'tgl_kembali',
        'metode_payment',
        'payment',
        'jenis_kb',
        'kb_terakhir',
        'tgl_kb_terakhir',
        'hamil'
    ];
}
