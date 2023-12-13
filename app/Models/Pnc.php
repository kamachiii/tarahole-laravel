<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pnc extends Model
{
    use HasFactory;

    protected $table = 'pncs';
    protected $fillable = [
        'pasien_id',
        's',
        'r',
        'n',
        'kunjungan',
        'gpa',
        'keluhan',
        'terapi',
        'nama_bidan',
        'method_payment',
        'payment',
    ];
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
}
