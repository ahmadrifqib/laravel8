<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd('success');

        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];

        // $credentials = $request->only('email', 'password');
        $credentials = $attributes;

        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         // dd($user);
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'You are now logged in');
        //     }
        // }

        // dd($attributes);
        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'You are now logged in');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match our records.',
            'password' => 'Yout password wrong.'
        ]);
    }
}
