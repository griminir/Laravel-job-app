<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (RateLimiter::tooManyAttempts(
            key: 'login:'.request()->input('email'), maxAttempts: 5)) {
            throw ValidationException::withMessages([
                'email' => 'Too many login attempts. Please try again later.',
            ]);
        }

        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(! Auth::attempt($attributes, true)){
            RateLimiter::hit(key: 'login:'.request()->input('email'), decaySeconds: 120);
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        request()->session()->regenerate();

        RateLimiter::clear(key: 'login:'.request()->input('email'));

        return redirect('/')->with('success', 'Welcome back!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
