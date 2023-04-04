<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedeemCode;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//welcome page
Route::get('/', function () {
    return view('home');
});
//login user
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
//shortlink 
Route::get('/wa', function () {return redirect('https://chat.whatsapp.com/IWfQl4h0Wc8DeiA3FBkaaw');})->name('wa');
Route::get('/discord', function () {return redirect('https://discord.com/invite/U8qAZ82uag');})->name('dc');
Route::get('/vote', function () {return redirect('https://minecraftpocket-servers.com/server/111760/vote');})->name('vote');
Route::get('/minecraft', function () {return view('page.mc');})->name('minecraft');
//auth user only
Route::middleware('auth')->group(function () {
    Route::get('/redeem', [RedeemCode::class, 'index'])->name('redeem');
    Route::get('/redem', [RedeemCode::class, 'update'])->name('redem');
    Route::get('/berhasil', [RedeemCode::class, 'show'])->name('user');
});
