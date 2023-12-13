<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use Illuminate\Http\Request;

class KbController extends Controller
{
    public function index()
    {
        $data = Kb::with('pasien')->get();

        return view('staff/kb/index')->with('data', $data);
    }

    public function create()
    {
        return view('staff/kb/create');
    }

    public function store(Request $request)
    {
        $req = $request->validate(
            [
                'pasien_id' => 'required',
                'nama_bidan' => 'required',
                'jenis_kb' => 'required',
                'kb_terakhir' => 'required',
                'tgl_kb_terakhir' => 'required',
                'lk' => 'required',
                'pr' => 'required',
                'hamil' => 'required',
                'keluhan' => 'required',
                'method_payment' => 'required',
                'payment' => 'required',
            ]
        );

        $val = Kb::create($req);
        if($val) {
            return view('staff/kb/index');
        }
        return view('staff/kb/create');
    }
}
