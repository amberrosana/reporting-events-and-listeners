<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
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

        UserRegistered::dispatch($user);
        
        Auth::login(User::where('email', $validated['email'])->first());

        return redirect()->route('showDashboard');
    }

    public function showDashboard() 
    {
        return view('auth.dashboard', ['profile' => Auth::user()->profile]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('showRegisterForm');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) 
        {

            Auth::login($user);

            return redirect()->intended(route('showDashboard'));
        }

        if (!$user) {
            return back()->withInput($request->only('email'));
        }

        return back()->withInput($request->only('email'));
    }
    
}