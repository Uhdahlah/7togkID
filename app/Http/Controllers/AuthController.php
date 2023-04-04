<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;


class AuthController extends Controller
{
    public function showLoginForm(){
        if(!Auth::check()){
            return view('auth.login');
        }else {
            return Redirect('/redeem');
        }
    }
    public function username()
    {
        return 'Gamertag';
    }
    public function Login(Request $request)
    {
        $Gamertag = $request->input('Gamertag');
        $user = User::where('Gamertag', $Gamertag)->first();
        if(!$user){
            return redirect()->back()->withErrors(['alert' => 'gamertag tidak ada, silahkan login ke server dulu lalu ulangi']);
        } else 
        { Auth::login($user);
        return redirect('/redeem'); }
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}