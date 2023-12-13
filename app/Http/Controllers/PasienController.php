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
        $req = $request->validate(
            [
                'nama' => 'required',
                'no_bpjs' => 'required',
                'no_telepon' => 'required',
                'tb' => 'required',
                'bb' => 'required',
                'td' => 'required',
                'tgl_kunjungan' => 'required',
            ]
        );
        if($req){
            Pasien::create($req);
            return redirect()->route('pasien-index');
        }
        return redirect()->route('pasien-create');
    }
}
