<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd('success');
        $request->validate([
            'username' => ['required', 'unique:users,username', 'alpha_num', 'min:3', 'max:25'],
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:8']
        ]);

        // $user = User::where('email', $request->email)
        //     ->orWhere('username', $request->username)
        //     ->first();

        // if ($user) {
        //     dd('user tersedia');
        // }

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        session()->flash('success', 'Thank you, you are now registered.');
        return redirect('/');
    }
}
