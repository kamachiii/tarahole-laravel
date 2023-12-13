<?php

namespace App\Http\Controllers;

use App\Models\Pnc;
use Illuminate\Http\Request;

class PncController extends Controller
{
    public function index()
    {
        $data = Pnc::with('pasien')->get();
        return view('staff/pnc/index')->with('data', $data);
    }

    public function create()
    {
        return view('staff/pnc/create');
    }

    public function store(Request $request)
    {
        $req = $request->validate(
            [
                'pasien_id' => 'required',
                's' => 'required',
                'r' => 'required',
                'n' => 'required',
                'kunjungan' => 'required',
                'gpa' => 'required',
                'keluhan' => 'required',
                'terapi' => 'required',
                'nama_bidan' => 'required',
                'method_payment' => 'required',
                'payment' => 'required',
            ]
        );

        $val = Pnc::create($req);
        if($val){
            return view('staff/pnc/index');
        }
        return view('staff/pnc/create');
    }
}
