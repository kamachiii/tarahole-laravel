<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'role_user' => 'required'
        ]);
        $user['password'] = bcrypt($user['password']);

        if(Auth::user()->role_user == 1){
            User::create($user);

            return redirect()->route('user-create')->with('message', 'Create User Successfully');
        }

        return redirect()->route('user-create')->with('message', 'Create User Failed');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $req = $request->validate([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role_user' => $request->role_user,
        ]);


        return redirect()->route('user-index')->with('error', 'Error updating user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
