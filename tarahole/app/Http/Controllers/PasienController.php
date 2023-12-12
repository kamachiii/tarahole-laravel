<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('staff.pasien.index')->with('data', $data);
    }

    public function create()
    {
        return view('staff.pasien.create');
    }

    public function store(Request $request)
    {
        $req = $request->validate([
            'name' => 'required',
            'nama_bidan' => 'required',
            'no_bpjs' => 'required',
            'no_telepon' => 'required',
            'tgl_kunjungan' => 'required',
            'tgl_kembali' => 'required',
            'jenis_kb' => 'required',
            'kb_terakhir' => 'required',
            'tgl_kb_terakhir' => 'required',
            'hamil' => 'required',
            'metode_payment' => 'required',
            'payment' => 'required'
        ]);
        $int = str_replace(".", "", $req['payment']);
        $req['payment'] = (int) $int;
        if($req){
            Pasien::create($req);
            return redirect()->route('pasien-index');
        }
        return redirect()->route('pasien-create');
    }

    public function edit($id)
    {
        $data = Pasien::find($id);
    }
}
