<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public function index() {
        if (Auth::check()){
            return Redirect('reedem');
        } else {
            return view('auth.login');
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'Gamertag' => ['Gamertag'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('redeem');
        }
 
        return back()->withErrors([
            'Gamertag' => 'gamertag tidak ada, silahkan memasuki game terlebih dahulu',
        ])->onlyInput('Gamertag');
    }

    public function logout()
    {
        Auth::logout();
        return response()->redirect('/');
    }
}
