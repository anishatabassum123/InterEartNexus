<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => ['Sorry, those creadentials do not match'],
            ]);
        }
        request()->session()->regenerate();
        return redirect('/');
    }
    public function forgotPassword()
    {

        return 'forgot password';
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
