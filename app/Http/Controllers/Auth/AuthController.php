<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $credential = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return match(Auth::user()->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'member' => redirect()->route('member.dashboard'),
                default => redirect('/dashboard')
            };
        }

        return redirect()->back()->with('error', 'username atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
