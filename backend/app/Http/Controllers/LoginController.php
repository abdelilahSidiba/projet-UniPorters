<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // تم تسجيل الدخول بنجاح
            return redirect()->intended('/');
        } else {
            // فشل في تسجيل الدخول
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    // تسجيل الخروج
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

