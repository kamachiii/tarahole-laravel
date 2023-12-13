<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = [
        'nama',
        'no_bpjs',
        'bb',
        'tb',
        'td',
        'no_telepon',
        'tgl_kunjungan',
        'tgl_kembali',
    ];
    public function pncs(){
        return $this->hasMany(Pnc::class);
    }
    public function kbs(){
        return $this->hasMany(Kb::class);
    }
}
