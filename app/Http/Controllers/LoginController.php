<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('guest.login')->with('title', 'Login');
    }

    public function loginAction(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->with('message', 'Username or Password is wrong');
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
