<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function home() {
        return redirect('login');
    }

    public function index() {
        return view('auth.login');
    }

    public function userLogin(Request $request) {
        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }
        return redirect('login')->with('message', 'Login details are not valid');
    }
}
