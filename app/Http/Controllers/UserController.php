<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
}
public function showRegistrationForm(){
    return view('auth.register');
}
public function register(Request $request)
{

    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|string|email|max:255|unique:users',
    'password' => 'required|string|min:8|confirmed', 
    ]);

    $user = User::create([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'password' => Hash::make($validated['password']), 
    ]);

    auth()->login($user);

    return redirect()->route('home'); 
    }
}
