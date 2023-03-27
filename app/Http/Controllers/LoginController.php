<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index(): View {
        if (Auth::check()){
            return Redirect('reedem');
        } else {
            return view('auth.login');
        }
    }
    public function login(Request $request):Response
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

    public function logout(): Response
    {
        Auth::logout();
        return response()->redirect('/');
    }
}
