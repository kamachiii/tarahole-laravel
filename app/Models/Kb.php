<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;

    protected $table = 'kbs';
    protected $fillable = [
        'pasien_id',
        'nama_bidan',
        'jenis_kb',
        'kb_terakhir',
        'tgl_kb_terakhir',
        'lk',
        'pr',
        'hamil',
        'keluhan',
        'method_payment',
        'payment',
    ];

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
}
